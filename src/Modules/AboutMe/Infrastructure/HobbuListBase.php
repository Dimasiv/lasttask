<?php
namespace App\Modules\AboutMe\Infrastructure;
use App\Modules\AboutMe\App\HobbieConfigurationInterface;

class HobbuListBase implements HobbieConfigurationInterface
{
    public function getHobbieList(): array
    {
        return ['Cats', 'Games', 'Php'];
    }
}