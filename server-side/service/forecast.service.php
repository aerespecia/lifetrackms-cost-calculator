<?php
namespace Service;

require '../models/forecast.model.php';
require 'constants.php';

use Constants;
use Model\Forecast;

class ForecastService {
    public $forecastResult = array();
    public $date;

    /**
     * Calculate total forecast cost recursively
     */
    public function calculateForecast($noStudyPerDay, $noStudyGrowthPercentage, $noOfMonthsToForecast) {

        if($noOfMonthsToForecast == count($this->forecastResult))
            return $this->forecastResult;
        $date = date_create("");
        $increaseFactor = ($noStudyGrowthPercentage/100)+1;
        $monthYear = date("M Y",time());

        $totalStudyInMonth = $noStudyPerDay*$increaseFactor;
        $totalRamCostPerMonth = $this->computeRAMCost($totalStudyInMonth);
        $totalStorageCostPerMonth = $this->computeStorageCost($totalStudyInMonth);
        $totalCost = number_format($totalRamCostPerMonth + $totalStorageCostPerMonth,2);

        $result = new Forecast($monthYear, $totalStudyInMonth, $totalCost);
        array_push($this->forecastResult, $result);

        return $this->calculateForecast($totalStudyInMonth, $noStudyGrowthPercentage, $noOfMonthsToForecast);
    }

    /**
     * Compute RAM cost in given month
     */
    private function computeRAMCost($totalStudyInMonth) {
        $totalGBRAMUsed = Constants::GB_RAM_PER_STUDY*$totalStudyInMonth;
        $total = Constants::RAM_COST_PER_HOUR_PER_GB*Constants::HOURS_IN_MONTH*$totalGBRAMUsed;
        return $total;
    }

    /**
     * Compute STORAGE cost in given month
     */
    private function computeStorageCost($totalStudyinMonth) {
        $totalGBStorageUsed = Constants::GB_STORAGE_PER_STUDY*$totalStudyinMonth;
        $total = Constants::STORAGE_COST_PER_MONTH_PER_GB*$totalGBStorageUsed;
        return $total;
    }
}

$ramCostTemp = new ForecastService();
echo json_encode($ramCostTemp->calculateForecast(10000000,3,4));


?>