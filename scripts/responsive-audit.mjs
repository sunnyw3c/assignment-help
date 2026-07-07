import puppeteer from 'puppeteer';

const BASE_URL = process.env.AUDIT_BASE_URL || 'https://assignment-help-online.test';
const CHROME = process.env.CHROME_PATH || 'C:/Users/Developer-2/AppData/Local/ms-playwright/chromium-1228/chrome-win64/chrome.exe';

const routes = [
    '/',
    '/services',
    '/programming-help',
    '/programming-help/web-development',
    '/programming-help/mobile-app',
    '/programming-help/algorithms',
    '/programming-help/database',
    '/programming-help/machine-learning',
    '/programming-help/debugging',
    '/assignment-help',
    '/assignment-help/math-problem-solving',
    '/essay-writing-help',
    '/research-paper-help',
    '/case-study-help',
    '/homework-help',
    '/lab-report-help',
    '/literature-review-help',
    '/presentation-design-help',
    '/proofreading-editing-help',
    '/thesis-dissertation-help',
    '/mathematics-assignment-help',
    '/law-assignment-help',
    '/how-it-works',
    '/about',
    '/faq',
    '/reviews',
    '/experts',
    '/privacy-policy',
    '/terms-of-service',
    '/order',
    '/login',
    '/register',
    '/forgot-password',
];

const viewports = [
    { name: 'mobile', width: 390, height: 844 },
    { name: 'tablet', width: 768, height: 1024 },
    { name: 'desktop', width: 1440, height: 900 },
];

const browser = await puppeteer.launch({
    executablePath: CHROME,
    headless: true,
    args: ['--ignore-certificate-errors', '--no-sandbox', '--disable-setuid-sandbox'],
});

const failures = [];

for (const route of routes) {
    for (const viewport of viewports) {
        const page = await browser.newPage();
        await page.setViewport({ ...viewport, deviceScaleFactor: 1 });

        const pageErrors = [];
        const consoleErrors = [];
        page.on('pageerror', error => pageErrors.push(error.message));
        page.on('console', message => {
            if (message.type() === 'error') {
                consoleErrors.push(message.text());
            }
        });

        const url = new URL(route, BASE_URL).toString();
        let response = null;
        let navError = null;

        try {
            response = await page.goto(url, { waitUntil: 'networkidle2', timeout: 45000 });
            await new Promise(resolve => setTimeout(resolve, 500));
        } catch (error) {
            navError = error.message;
        }

        const result = await page.evaluate(() => {
            const width = document.documentElement.clientWidth;
            const docWidth = Math.max(document.documentElement.scrollWidth, document.body?.scrollWidth || 0);
            const overflowing = [...document.body.querySelectorAll('*')]
                .map(element => {
                    const rect = element.getBoundingClientRect();
                    return {
                        tag: element.tagName.toLowerCase(),
                        id: element.id,
                        className: typeof element.className === 'string' ? element.className : '',
                        text: (element.textContent || '').trim().replace(/\s+/g, ' ').slice(0, 90),
                        left: Math.round(rect.left),
                        right: Math.round(rect.right),
                        width: Math.round(rect.width),
                    };
                })
                .filter(item => item.width > 0 && (item.left < -2 || item.right > width + 2))
                .slice(0, 8);

            return { width, docWidth, overflowBy: docWidth - width, overflowing };
        }).catch(error => ({ evalError: error.message }));

        const status = response?.status() || 0;
        const failed = navError || status >= 400 || result.evalError || result.overflowBy > 2 || pageErrors.length;
        if (failed) {
            failures.push({
                route,
                viewport: viewport.name,
                status,
                navError,
                pageErrors,
                consoleErrors: consoleErrors.slice(0, 5),
                ...result,
            });
        }

        await page.close();
    }
}

await browser.close();

if (failures.length) {
    console.log(JSON.stringify(failures, null, 2));
    process.exitCode = 1;
} else {
    console.log(`Checked ${routes.length} routes across ${viewports.length} viewports with no responsive failures.`);
}
