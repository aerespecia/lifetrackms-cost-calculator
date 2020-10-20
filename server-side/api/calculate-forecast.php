<?php
namespace API;

require '../service/forecast.service.php';

 // Headers
 header('Access-Control-Allow-Origin: *');
 header('Content-Type: application/json');
 header('Access-Control-Allow-Methods: POST');
 header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
;

use Service\ForecastService;

// Get raw posted data
$data = json_decode(file_get_contents("php://input"));

$date = date("Y-m-d", time());
$noStudyPerDay = $data->noStudyPerday;
$noStudyGrowthPercentage = $data->noStudyGrowthPercentage;
$noOfMonthsToForecast = $data->noOfMonthsToForecast;

$forecast = new ForecastService();
$result = $forecast->calculateForecast($date,$noStudyPerDay,$noStudyGrowthPercentage,$noOfMonthsToForecast);

echo $result;

?>