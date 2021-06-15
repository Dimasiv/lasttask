<?php
namespace App\Modules;
class HobbieList

{
    private array $ThemeTopic;

    private ImageProvider $provider;

    public function addTopic($theme)
    {
        $provider = new ImageProvider();
        $this->ThemeTopic[] = [
            'header' => $this->theme = $theme,
            'images' => $this->provider->getArrayUrls()
        ];
    }

    public function  getData(): array
    {
        return $this->ThemeTopic;
    }
}
