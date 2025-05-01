<?php

namespace App\Traits;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image as ImageFacade;

trait UploadImage
{


    public function uploadImage($image, $path, $disk)
    {
        $filename = Str::uuid() . time() . '_' . $image->getClientOriginalName();
        Storage::disk('uploads')->put($path.'/'.$filename, file_get_contents($image));
        return $filename;


        // $storagePath = $path . '/' . $filename;
        // \Storage::disk($disk)->put($storagePath, (string) $resizedImage->encode());
        // return $storagePath;
    }


    public function deleteImage($path)
    {
        if (File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }
}
