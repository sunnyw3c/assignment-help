import puppeteer from 'puppeteer';
import path from 'path';
import { fileURLToPath } from 'url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const OUT = path.join(__dirname, 'storage/app/public/screenshots');

const VIEWPORTS = [
    { name: 'desktop_ppt', width: 1440, height: 900 },
    { name: 'tablet_ppt',  width: 768,  height: 1024 },
    { name: 'mobile_ppt',  width: 390,  height: 844 },
];

(async () => {
    const browser = await puppeteer.launch({
        executablePath: 'C:\\Users\\assig\\.cache\\puppeteer\\chrome\\win64-148.0.7778.97\\chrome-win64\\chrome.exe',
        args: ['--ignore-certificate-errors', '--no-sandbox', '--disable-setuid-sandbox'],
        headless: true,
    });

    for (const vp of VIEWPORTS) {
        const page = await browser.newPage();
        await page.setViewport({ width: vp.width, height: vp.height, deviceScaleFactor: 1 });
        await page.goto('https://assignmenthelpusa.test/', {
            waitUntil: 'networkidle0',
            timeout: 30000,
        });
        // Wait for React to mount and animations to settle
        await new Promise(r => setTimeout(r, 2000));
        await page.screenshot({
            path: path.join(OUT, `${vp.name}.png`),
            fullPage: false,
        });
        await page.close();
        console.log(`✓ ${vp.name} (${vp.width}×${vp.height})`);
    }

    await browser.close();
    console.log('All done.');
})();
