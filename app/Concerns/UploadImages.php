<?php

namespace App\Concerns;

use Illuminate\Support\Str;

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

    public function prepareHtml($body) // upload images in html and return body html
    {
        $dom = new \DOMDocument('1.0', 'utf-8');
        $dom->loadHtml($body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD); // LIBXML_NOERROR
        $imageFile = $dom->getElementsByTagName('img');

        foreach ($imageFile as $item => $image) {
            $data_image = $image->getAttribute('src'); // data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/
            if (!Str::contains($data_image, 'uploads')) { // اذا بتحتوي على كلمة ابلود بتكون الصورة مرفوعة وبيلزمش ارفعها تاني
                list($type, $data_image) = explode(';', $data_image); // $type = data:image/jpeg ------- $data_image = base64,/9j/4AAQSkZJRgABAQAAAQABAAD/
                list(, $data_image)      = explode(',', $data_image);
                $imgeData = base64_decode($data_image);
                $extension = Str::after($type, '/');
                if ($extension) {
                    $image_name = "/uploads/" . time() . $item . '.' . $extension;
                    $path = public_path() . $image_name;
                    file_put_contents($path, $imgeData);
                    $image->removeAttribute('src');
                    $image->setAttribute('src', $image_name);
                }
            }
        }

        return $dom->saveHTML();
    }

}



