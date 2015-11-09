<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15.10.27
 * Time: 00.04
 */

namespace  Main\WeatherBundle\Helper;
//require('vendor/autoload.php');

use Symfony\Component\Console\Helper\Helper;

class WeatherService
{
    private $api;

    function __construct(IWeather $api) {
        $this->api = $api;
    }
    function getTemperature($location)
    {
       return $temperature = $this->api->currentWeather($location);
    }
}