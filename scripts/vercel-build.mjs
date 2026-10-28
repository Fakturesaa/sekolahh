import { cpSync, existsSync, mkdirSync, rmSync } from 'node:fs';

const outputDirectory = 'dist';
const publicDirectories = ['build', 'icon', 'img'];
const publicFiles = ['favicon.ico', 'robots.txt'];

rmSync(outputDirectory, { recursive: true, force: true });
mkdirSync(outputDirectory, { recursive: true });

for (const directory of publicDirectories) {
    const source = `public/${directory}`;

    if (existsSync(source)) {
        cpSync(source, `${outputDirectory}/${directory}`, { recursive: true });
    }
}

for (const file of publicFiles) {
    const source = `public/${file}`;

    if (existsSync(source)) {
        cpSync(source, `${outputDirectory}/${file}`);
    }
}