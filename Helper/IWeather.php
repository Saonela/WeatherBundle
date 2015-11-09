<?php
/**
 * Created by PhpStorm.
 * User: klaudijus
 * Date: 15.11.6
 * Time: 21.56
 */

namespace Main\WeatherBundle\Helper;


interface IWeather
{
    public function currentWeather($location);
}