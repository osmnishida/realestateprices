<?php
namespace App\Service;

class test {
  public function avg($math,$english) {
    $average = (($math + $english) / 2);
    return $average;
  }
}