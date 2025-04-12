<?php

namespace App\Trait;

use Illuminate\Support\Facades\Storage;

trait UploadImage
{
    public function storeImage($image, $folderName)
    {
        // $imageName = $request->image;
        $newImageName = time() . '-' . $image->getClientOriginalName();
        $image->storeAs($folderName, $newImageName, 'public');
        return $newImageName;
    }
    public function updateImage($image, $folderName)
    {
        if ($image) {
            Storage::delete("public/testmonial/$image");
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs($folderName, $newImageName, 'public');
            $data['image'] = $newImageName;
        }
    }
}
