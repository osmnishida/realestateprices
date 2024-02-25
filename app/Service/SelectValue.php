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

class SelectValue {
  protected $prefecture;
  protected $cityPlanning;

  public function __construct($prefecture,$cityPlanning) {
    $this->prefecture = $prefecture === "全国"; // ? true:faulse; // "全国"　?? true が取れる？
    $this->cityPlanning = $cityPlanning;
  }

  public function selectvalue() {

    $value = 0;
// $objectFloorAreaRatio = LandPost::where('floorarearatio', $ratio);
            // var_dump($objectFloorAreaRatio);
  if (!$this->prefecture && $this->cityPlanning !== "問わない" ) {
    $value = 1;
  } 
  if ($this->prefecture === "全国" && $this->cityPlanning !== "問わない") {
    $value = 2;
  }
  if ($this->prefecture !== "全国" && $this->cityPlanning === "問わない") {
    $value = 3;
  }
  return $value;
                // $landPostsRatio = $objectFloorAreaRatio->avg('priceperunit');
                // $averageArray[$ratio] = $landPostsRatio;
    }

  // public function 

}
