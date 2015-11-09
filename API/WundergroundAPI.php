<?php

namespace Main\WeatherBundle\API;
use Main\WeatherBundle\Helper\IWeather;
use Symfony\Component\Debug\Exception\ContextErrorException;

class WundergroundAPI implements IWeather
{
    function currentWeather($location)
    {
        try {
            $str = file_get_contents('http://api.wunderground.com/api/32ec9d148686f04a/conditions/q/'.$location.'.json');
            $json = json_decode($str);
            $temperature = $json->current_observation->temp_c;

        } catch (ContextErrorException $e) {
            $temperature = "-";
        }

        return $temperature;
    }
}