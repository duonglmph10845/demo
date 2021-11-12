<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait StorageImageTrait
{
    public function storageImageUpload($request, $fileName, $foderName)
    {
        if ($request->hasFile($fileName)) {
            $file = $request->$fileName;
            $fileNameOrigin = $file->getClientOriginalName();
            $fileNameHas = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $filePath = $request->file('feature_image_path')->storeAs($foderName . '/' . auth()->id(), $fileNameHas);
            $dataUploadTrait = [
                'file_path' => Storage::url($filePath),
            ];
            return $dataUploadTrait;
        }
        return null;
    }

    public function storageImageUploadMutiple($file, $foderName)
    {
            $fileNameOrigin = $file->getClientOriginalName();
            $fileNameHas = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs($foderName . '/' . auth()->id(), $fileNameHas);
            $dataUploadTrait = [
                'file_path' => Storage::url($filePath),
            ];
            return $dataUploadTrait;
    }
}
