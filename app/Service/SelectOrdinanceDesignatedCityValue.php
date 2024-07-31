<?php
namespace App\Service;

/*
class SelectValue {
  public function avg($math,$english) {
    $average = (($math + $english) / 2);
    return $average;
  }
}
*/

class SelectOrdinanceDesignatedCityValue {
  protected $prefecture;
  protected $municipalityCode;
  protected $cityPlanning;

  public function __construct($prefecture,$municipalityCode,$cityPlanning) {
    $this->prefecture = $prefecture; // ? true:faulse; // "全国"　?? true が取れる？
    $this->municipality = $municipalityCode;
    $this->cityPlanning = $cityPlanning;
  }

  public function selectOrdinanceDesignatedCityValue() {

    $value = 0;
// $objectFloorAreaRatio = LandPost::where('floorarearatio', $ratio);
            // var_dump($objectFloorAreaRatio);
  if ($this->prefecture !== "全国" && $this->municipality !== 0 && $this->cityPlanning !== "問わない" ) {
    $value = 0;
  } 
  if ($this->prefecture === "全国" && $this->cityPlanning === "問わない") {
    $value = 1;
  }
  if ($this->prefecture !== "全国" && $this->municipality !== 0 && $this->cityPlanning === "問わない") {
    $value = 2;
  }
  if ($this->prefecture === "全国" && $this->cityPlanning !== "問わない") {
    $value = 3;
  }
  if ($this->prefecture !== "全国" && $this->municipality === 0 && $this->cityPlanning === "問わない") {
    $value = 4;
  }
  if ($this->prefecture !== "全国" && $this->municipality === 0 && $this->cityPlanning !== "問わない") {
    $value = 5;
  }
  return $value;
                // $landPostsRatio = $objectFloorAreaRatio->avg('priceperunit');
                // $averageArray[$ratio] = $landPostsRatio;
    }

  // public function 

}
