import imageCompression from 'browser-image-compression';

async function compressImage(file) {
    const options = {
        maxSizeMB: 1, // Maximum size in MB
        maxWidthOrHeight: 1024, // Resize to a maximum width or height
        useWebWorker: true, // Use a web worker for better performance
    };

    try {
        const compressedFile = await imageCompression(file, options);
        console.log('Original file size:', file.size / 1024, 'KB');
        console.log('Compressed file size:', compressedFile.size / 1024, 'KB');

        return compressedFile;
    } catch (error) {
        console.error('Error compressing the image:', error);
    }
}

// Example usage
document.getElementById('imageInput').addEventListener('change', async (event) => {
    const file = event.target.files[0];
    if (file) {
        const compressedFile = await compressImage(file);

        // Optionally, display the compressed image
        const img = document.createElement('img');
        img.src = URL.createObjectURL(compressedFile);
        document.body.appendChild(img);
    }
});