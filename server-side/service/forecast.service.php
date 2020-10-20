<?php
namespace Service;

require '../models/forecast.model.php';
require 'constants.php';

use Constants;
use Model\Forecast;

class ForecastService {
    public $forecastResult = array();

    /**
     * Calculate total forecast cost recursively
     */
    public function calculateForecast($date, $noStudyPerDay, $noStudyGrowthPercentage, $noOfMonthsToForecast) {

        if($noOfMonthsToForecast == count($this->forecastResult))
            return json_encode($this->forecastResult);

        $increaseFactor = ($noStudyGrowthPercentage/100)+1;
        $monthYear = date(Constants::MONTH_DATE_FORMAT,strtotime($date));

        $totalStudyInMonth = $noStudyPerDay*$increaseFactor;
        $totalRamCostPerMonth = $this->computeRAMCost($totalStudyInMonth);
        $totalStorageCostPerMonth = $this->computeStorageCost($totalStudyInMonth);
        $totalCost = number_format($totalRamCostPerMonth + $totalStorageCostPerMonth,2);

        $result = new Forecast($monthYear, number_format($totalStudyInMonth), $totalCost);
        array_push($this->forecastResult, $result);

        // Get next date plus 1 month
        $nextDate = date_create($date);
        date_add($nextDate, date_interval_create_from_date_string(Constants::DATE_INTERVAL));

        return $this->calculateForecast(
            date_format($nextDate, Constants::DATE_FORMAT),
            $totalStudyInMonth,
            $noStudyGrowthPercentage,
            $noOfMonthsToForecast
        );
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

?>