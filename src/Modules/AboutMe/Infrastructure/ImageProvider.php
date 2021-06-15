<?php
namespace App\Modules\AboutMe\Infrastructure;
use IvanUskov\ImageSpider\ImageSpider;
use App\Modules\AboutMe\App\ImageProviderInterface;
class ImageProvider implements ImageProviderInterface
{
    public function getImageUrls(string $name): array
    {
        $urls = ImageSpider::find($name);
            $result = [];
            foreach (array_rand($urls, 5) as $index)
            {
                $result[] = $urls[$index];
            }
            return $result;
        return [];
    }
}