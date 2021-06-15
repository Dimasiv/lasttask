<?php
namespace App\Modules;
use IvanUskov\ImageSpider\ImageSpider;

class ImageProvider
{
    public function getUrls()
    {
        $this->urls = ImageSpider::find($this->theme);
    }

    public function getArrayUrls(): array
    {
        $this->getUrls();
        for ($i=0; $i < 5; $i++)
        {
            $images[] = $this->urls[mt_rand(0, count($this->urls) - 1)];
        }
        return $images;
    }
}