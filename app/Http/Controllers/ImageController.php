<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function compressImage($filePath, $outputPath, $quality = 75)
    {
        // Load the image
        $image = Image::make($filePath);

        // Compress and save the image
        $image->save($outputPath, $quality);

        return "Image compressed and saved to: " . $outputPath;
    }
}