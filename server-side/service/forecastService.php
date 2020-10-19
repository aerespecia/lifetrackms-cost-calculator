<?php
namespace Service;

use Model\Forecast;

class ForecastService {
    
    public function calculateForecast($noStudyPerDay, $noSTudyGrowthPercentage, $noMonthsToForecast) {
        $forecast = new Forecast($noStudyPerDay, $noSTudyGrowthPercentage, $noMonthsToForecast);
        
    }
}

?>