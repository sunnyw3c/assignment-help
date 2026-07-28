import fs from 'node:fs/promises';
import path from 'node:path';
import process from 'node:process';
import { chromium } from 'playwright';

const quality = Number.parseFloat(process.env.IMAGE_QUALITY ?? '0.78');
const requestedWidth = process.env.IMAGE_WIDTH
    ? Number.parseInt(process.env.IMAGE_WIDTH, 10)
    : null;
const inputPaths = process.argv.slice(2);

if (inputPaths.length === 0) {
    console.error('Usage: node scripts/optimize-images.mjs <image> [image ...]');
    process.exit(1);
}

if (!Number.isFinite(quality) || quality <= 0 || quality > 1) {
    console.error('IMAGE_QUALITY must be greater than 0 and no more than 1.');
    process.exit(1);
}

if (requestedWidth !== null && (!Number.isInteger(requestedWidth) || requestedWidth <= 0)) {
    console.error('IMAGE_WIDTH must be a positive integer.');
    process.exit(1);
}

const browser = await chromium.launch({ headless: true });
const page = await browser.newPage();

try {
    for (const inputPath of inputPaths) {
        const source = await fs.readFile(inputPath);
        const dataUrl = `data:image/*;base64,${source.toString('base64')}`;

        const result = await page.evaluate(async ({ imageUrl, outputQuality, targetWidth }) => {
            const image = new Image();
            image.src = imageUrl;
            await image.decode();

            const width = targetWidth
                ? Math.min(targetWidth, image.naturalWidth)
                : image.naturalWidth;
            const height = Math.round(image.naturalHeight * (width / image.naturalWidth));
            const canvas = document.createElement('canvas');
            canvas.width = width;
            canvas.height = height;

            const context = canvas.getContext('2d');
            context.drawImage(image, 0, 0, width, height);

            return {
                dataUrl: canvas.toDataURL('image/webp', outputQuality),
                width,
                height,
            };
        }, { imageUrl: dataUrl, outputQuality: quality, targetWidth: requestedWidth });

        const suffix = requestedWidth ? `-${requestedWidth}w.webp` : '.webp';
        const outputPath = inputPath.replace(/\.[^.]+$/, suffix);
        const output = Buffer.from(result.dataUrl.split(',', 2)[1], 'base64');
        await fs.writeFile(outputPath, output);

        const saving = Math.round((1 - output.length / source.length) * 100);
        console.log(
            `${path.basename(inputPath)} -> ${path.basename(outputPath)} `
            + `(${result.width}x${result.height}, ${source.length} -> ${output.length} bytes, ${saving}% smaller)`,
        );
    }
} finally {
    await browser.close();
}
