<?php
namespace App\Service;

$prefecture = htmlspecialchars($_GET['prefecture'],ENT_QUOTES | 'UTF-8');
if ($prefecture !== '') {
  print('こんにちは'.$prefecture.'さん！');
}

/*
class Municipality {
  public function avg($math,$english) {
    $average = (($math + $english) / 2);
    return $average;
  }
*/