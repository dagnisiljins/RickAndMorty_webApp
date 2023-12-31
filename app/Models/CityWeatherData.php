<?php

declare(strict_types=1);

namespace App\Models;

class CityWeatherData
{

    private string $cityName;
    private string $description;
    private float $temp;
    private int $time;

    public function __construct(string $cityName, string $description, float $temp, int $time)
    {
        $this->cityName = $cityName;
        $this->description = $description;
        $this->temp = $temp;
        $this->time = $time;
    }

    public function getCityName(): string
    {
        return 'Weather in ' . $this->cityName;
    }

    public function getDescription(): string
    {
        $descriptionToSymbol = [
            'clear sky' => '☀️',
            'few clouds' => '🌤',
            'scattered clouds' => '🌥',
            'broken clouds' => '☁️',
            'overcast clouds' => '🌦',
            'shower rain' => '🌧',
            'rain' => '🌧',
            'light rain' => '🌧',
            'moderate rain' => '🌧'
        ];

        return $descriptionToSymbol[$this->description] ?? $this->description;
    }

    public function getTemp(): string
    {
        return 'Temperature: ' . round($this->temp) . '°C';
    }

    public function getTime(): string
    {
        $timestamp = $this->time;
        $date = new \DateTime("@$timestamp");
        $date->setTimezone(new \DateTimeZone('Europe/Riga'));
        return $date->format('Y-m-d | H:i:s');
    }

}