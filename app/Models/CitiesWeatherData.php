<?php

declare(strict_types=1);

namespace App\Models;

class CitiesWeatherData
{

    private array $citiesWeatherData;

    public function __construct(array $citiesWeatherData = [])
    {
        $this->citiesWeatherData = $citiesWeatherData;
    }

    public function add(CityWeatherData $cityWeatherData)
    {
        $this->citiesWeatherData [] = $cityWeatherData;
    }
    public function getCitiesWeatherData(): array
    {
        return $this->citiesWeatherData;
    }

}

