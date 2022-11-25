<?php declare(strict_types=1);

namespace App\Controllers;

class WeatherReportsController extends BaseController
{
    public function index(): string
    {
        $defaultCity = "Riga";
        $city = $this->api()->getCity($_GET["city"] ?? $defaultCity);
        $weatherReport = $this->api()->getWeatherReport($city);
        return $this->render('index.html.twig', ['weatherReport' => $weatherReport, 'city' => $city]);
    }
}
