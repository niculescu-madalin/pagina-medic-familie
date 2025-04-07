import fs from 'fs';
import path from 'path';
import sharp from 'sharp';
import { fileURLToPath } from 'url';

// Get the current directory
const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const inputFolder = path.join(__dirname, '../public/assets'); // Adjust path to your assets folder
const outputFolder = path.join(__dirname, '../public/compressed-assets');

// Ensure the output folder exists
if (!fs.existsSync(outputFolder)) {
    fs.mkdirSync(outputFolder, { recursive: true });
}

// Compress images
fs.readdir(inputFolder, (err, files) => {
    if (err) {
        console.error('Error reading input folder:', err);
        return;
    }

    files.forEach((file) => {
        const inputFilePath = path.join(inputFolder, file);
        const outputFilePath = path.join(outputFolder, file);

        // Check if the file is an image
        if (/\.(jpg|jpeg|png|webp)$/i.test(file)) {
            sharp(inputFilePath)
                .resize({ width: 1024 }) // Resize to a max width of 1024px (optional)
                .jpeg({ quality: 75 }) // Compress to 75% quality for JPEG
                .toFile(outputFilePath)
                .then(() => {
                    console.log(`Compressed: ${file}`);
                })
                .catch((err) => {
                    console.error(`Error compressing ${file}:`, err);
                });
        } else {
            console.log(`Skipping non-image file: ${file}`);
        }
    });
});