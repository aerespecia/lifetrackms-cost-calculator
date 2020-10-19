<?php
namespace Model;

class Forecast {
  const RAM_COST_PER_HOUR_PER_GB = 0.00553;
  const STORAGE_COST_PER_MONTH_PER_GB = 0.10;

  /**
   * properties to forecast
   * 
   */
  public $noStudyPerDay;
  public $noSTudyGrowthPercentage;
  public $noMonthsToForecast;

  function __construct($noStudyPerDay, $noSTudyGrowthPercentage, $noMonthsToForecast) {
    $this->noStudyPerDay = $noStudyPerDay;
    $this->noSTudyGrowthPercentage = $noSTudyGrowthPercentage;
    $this->noMonthsToForecast = $noMonthsToForecast;
  }

  /**
   * getters and setters
   * 
   */
  function set_noStudyPerDay($noStudyPerDay) {
    $this->noStudyPerDay = $noStudyPerDay;
  }
  function get_noStudyPerDay() {
    return $this->noStudyPerDay;
  }

  function set_noSTudyGrowthPercentage($noSTudyGrowthPercentage) {
    $this->noSTudyGrowthPercentage = $noSTudyGrowthPercentage;
  }
  function get_noSTudyGrowthPercentage() {
    return $this->noSTudyGrowthPercentage;
  }

  function set_noMonthsToForecastcolor($noMonthsToForecast) {
    $this->noMonthsToForecast = $noMonthsToForecast;
  }
  function get_noMonthsToForecast() {
    return $this->noMonthsToForecast;
  }
}


?>