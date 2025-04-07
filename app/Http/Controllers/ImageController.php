<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class ImageController extends Controller
{
    // Operation: Blur image
    public function blur(Request $request)
    {
        $path = $request->input('path');
        $blurAmount = $request->input('blur', 15); // default blur factor

        $img = Image::make($path)->blur($blurAmount);
        $outputPath = storage_path('app/public/blurred.png');
        $img->save($outputPath);

        return response()->download($outputPath);
    }

    // Operation: Rotate image
    public function rotate(Request $request)
    {
        $path = $request->input('path');
        $angle = $request->input('angle', 90); // default 90 degrees

        $img = Image::make($path)->rotate($angle);
        $outputPath = storage_path('app/public/rotated.png');
        $img->save($outputPath);

        return response()->download($outputPath);
    }

    // Operation: Scale (resize) image
    public function scale(Request $request)
    {
        $path = $request->input('path');
        $width = $request->input('width', 200);
        $height = $request->input('height', 200);

        $img = Image::make($path)->resize($width, $height);
        $outputPath = storage_path('app/public/scaled.png');
        $img->save($outputPath);

        return response()->download($outputPath);
    }

    // Operation: Crop image
    public function crop(Request $request)
    {
        $path = $request->input('path');
        $width = $request->input('width', 100);
        $height = $request->input('height', 100);
        $x = $request->input('x', 0);
        $y = $request->input('y', 0);

        $img = Image::make($path)->crop($width, $height, $x, $y);
        $outputPath = storage_path('app/public/cropped.png');
        $img->save($outputPath);

        return response()->download($outputPath);
    }

    // Simple Run Length Encoding (RLE) compression algorithm.
    public function rleCompress(Request $request)
    {
        $data = $request->input('data', '');
        $compressed = $this->rleEncode($data);
        return response()->json(['original' => $data, 'compressed' => $compressed]);
    }

    // RLE Encoding helper function
    private function rleEncode(string $input): string
    {
        if ($input === "") {
            return "";
        }
        $length = strlen($input);
        $result = "";
        $count = 1;
        for ($i = 1; $i < $length; $i++) {
            if ($input[$i] === $input[$i - 1]) {
                $count++;
            } else {
                $result .= $input[$i - 1] . $count;
                $count = 1;
            }
        }
        $result .= $input[$length - 1] . $count;
        return $result;
    }
}