<?php
namespace Model;

/**
 * Forecast Response Model
 */
class Forecast {

  /**
   * properties    
   */
  public $monthYear;
  public $studiesTotal;
  public $costForcasted;

  function __construct($monthYear, $studiesTotal, $costForcasted) {
    $this->monthYear = $monthYear;
    $this->studiesTotal = $studiesTotal;
    $this->costForcasted = $costForcasted;
  }

  /**
   * getters and setters
   * 
   */
  function set_monthYear($monthYear) {
    $this->monthYear = $monthYear;
  }
  function get_monthYear() {
    return $this->monthYear;
  }

  function set_studiesTotal($studiesTotal) {
    $this->studiesTotal = $studiesTotal;
  }
  function get_studiesTotal() {
    return $this->studiesTotal;
  }

  function set_costForcasted($costForcasted) {
    $this->costForcasted = $costForcasted;
  }
  function get_costForcasted() {
    return $this->costForcasted;
  }

}

?>