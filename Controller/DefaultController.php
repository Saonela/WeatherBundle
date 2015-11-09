<?php

namespace Main\WeatherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Main\WeatherBundle\Helper\WeatherService;


class DefaultController extends Controller
{
    public function indexAction()
    {
        $weather = $this->get("nfq.weather");
        $temp = $weather->getTemperature("Vilnius");
        return $this->render('MainWeatherBundle:Default:index.html.twig', array('temperature' => $temp));
    }
}
