<?php
namespace App\Modules\AboutMe\Model;

class HobbieConstructor
{
    private string $name;
    private array $images = [];

    public function __construct(string $ThemeName, array $images)
    {
        $this->name = $ThemeName;
        $this->images = $images;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getArrUrls(): array
    {
        return $this->images;
    }
}