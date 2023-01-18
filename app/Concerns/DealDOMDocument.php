<?php

namespace App\Concerns;

use Illuminate\Support\Str;

trait DealDOMDocument
{

    public function prepareHtml($body) // upload images in html and return body html
    {
        $dom = new \DOMDocument('1.0', 'utf-8');
        $dom->loadHTML(mb_convert_encoding($body, 'HTML-ENTITIES', 'UTF-8'));

        $this->add_article_contents($dom);
        $this->upload_images($dom);
        return $dom->saveHTML();
    }

    // بتربط المحتويات مع العناوين
    public function add_article_contents($dom)
    {
        $body = $dom->getElementsByTagName('body')->item(0);
        $newUl = $dom->createElement('ul');
        $newUl->setAttribute('class', 'widget-list');

        $headers = $dom->getElementsByTagName('h3');
        foreach ($headers as $key => $header) {
            if ($header->hasAttribute('id')) {
                // update the existing id attribute
                $header->setattribute('class', 'post-title');
                $header->setattribute('id', 'contents_' . $key);
            } else {
                // create a new id attribute
                $header->setattribute('class', 'post-title');
                $header->setattribute('id', 'contents_' . $key);
            }



            $newLi = $dom->createElement('li');
            $newLink = $dom->createElement('a', $header->textContent);
            $newLink->setAttribute('href', "#contents_$key");
            $newLink->setattribute('class', 'd-flex');
            $newLi->appendChild($newLink);
            $newUl->appendChild($newLi);
        }

        $body->appendChild($newUl);
    }

    public function upload_images($dom)
    {
        $imagesFile = $dom->getElementsByTagName('img');
        foreach ($imagesFile as $item => $image) {
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
    }
}
