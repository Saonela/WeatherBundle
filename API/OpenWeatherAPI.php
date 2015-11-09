<?php

namespace Main\WeatherBundle\API;
use Main\WeatherBundle\Helper\IWeather;
use Symfony\Component\Debug\Exception\ContextErrorException;

class OpenWeatherAPI implements IWeather
{
    function currentWeather($location)
    {
        try {
            $str = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='.$location.'&units=metric&appid=d7f68cbc4a437e0090e0232171141b62');
            $json = json_decode($str);
            $temperature = $json->main->temp;

        } catch (ContextErrorException $e) {
            $temperature = "-";
        }

        return $temperature;
    }
}