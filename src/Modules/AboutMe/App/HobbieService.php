<?php
namespace App\Modules\AboutMe\App;
use App\Modules\AboutMe\Model\HobbieConstructor;

class HobbieService
{
    public array $result;

    public function __construct(HobbieConfigurationInterface $hobbieMap, ImageProviderInterface $imageUrls)
    {
        $this->hobbieList = $hobbieMap->getHobbieList();
        $this->imageUrls = $imageUrls;
    }

    public function getHobbies(): array
    {
        foreach ($this->hobbieList as $header) {
            $this->addHobbie($header);
        }
        return $this->result;
    }

    private function addHobbie($name)
    {
        $hobbie = new HobbieConstructor($name, $this->imageUrls->getImageUrls($name));
        $this->result[] = [
            $hobbie->getName(),
            $hobbie->getArrUrls(),
        ];
    }
}