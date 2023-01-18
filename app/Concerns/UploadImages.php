<?php

namespace App\Concerns;

trait UploadImages
{

    public function uploadImage($request, $folder_place = 'posts')
    {
        if (!$request->hasFile('image')) {
            return;
        }
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $path = $file->store("/{$folder_place}", [
                    'disk' => 'uploads',
                ]);
            }
        }
        if ($path) {
            return 'uploads/' . $path;
        }
        return;
    }

}
