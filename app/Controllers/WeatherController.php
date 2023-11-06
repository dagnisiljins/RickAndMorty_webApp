<?php

declare(strict_types=1);

namespace App\Controllers;

use App\WeatherApi;
use App\Response;

class WeatherController
{
    private WeatherApi $api;
    private string $defaultCity;
    private string $searchedCity;
    public function __construct()
    {
        $this->api = new WeatherApi();
        $this->defaultCity = 'Riga'; // Set the default city here or load it from a config
        $this->searchedCity = $_GET['s'] ?? '';
    }

    public function getWeatherData(): array
    {
        $defaultWeather = $this->api->fetchWeatherFromUrl($this->defaultCity);

        $searchedCity = $_GET['s'] ?? ''; // Get the search city from the query parameter.
        $searchedWeather = null; // Initialize the searchedWeather variable.

        if (!empty($searchedCity)) {
            // If a search city is provided, fetch the weather data.
            $searchedWeather = $this->api->fetchWeatherFromUrl($searchedCity);
        }

        return [
            'defaultWeather' => $defaultWeather,
            'searchedWeather' => $searchedWeather,
        ];
    }
}

/*$collection = new CitiesWeatherData();

        $collection->add($DefaultWeatherResults);
        $collection->add($SearchWeatherResults);*/