<?php

declare(strict_types=1);

namespace App\Models;

class CityWeatherData
{

    private string $cityName;
    private string $description;
    private float $temp;

    public function __construct(string $cityName, string $description, float $temp)
    {
        $this->cityName = $cityName;
        $this->description = $description;
        $this->temp = $temp;
    }

    public function getCityName(): string
    {
        return $this->cityName;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getTemp(): float
    {
        return $this->temp;
    }
}