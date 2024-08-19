<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CityCode;
use App\Models\LandPost;

class ListDisplayCityController extends Controller
{
    public function listdisplaycity(Request $request) {

      $prefecture = "全国";
      $arrjsoncc = ['aaa','bbb','ccc',];
      $selectPrefecture = config('settingvalue.prefecture');
      if (isset($_GET['prefecture'])) {
          $prefecture = htmlspecialchars($_GET['prefecture'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
          if ($prefecture !== '') {
              print($prefecture);
          // dd($prefecture);

      // var_dump($selectPrefecture);
      $prefectureCode = array_keys($selectPrefecture,"$prefecture");
      // var_dump($prefectureCode);
      $prefectureNumber = implode($prefectureCode);
      // var_dump($prefectureNumber);

      // TODO後で削除
      // var_dump($floorAreaRatio);
      // $prefecturecode = $request->prefecturecode;
      // var_dump($prefecturecode);
      // return view('opcode', compact('prefecturecode'));

      $basiccca="https://www.land.mlit.go.jp/webland/api/CitySearch?area=";
      $ccaurl="$basiccca" . "$prefectureNumber";
      // return $ccaurl;
      $jsoncc = file_get_contents($ccaurl);
      $jsoncc = mb_convert_encoding($jsoncc, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
      // return $jsoncc;
      $arrjsoncc = json_decode($jsoncc,true);
      $arrjsoncc = $arrjsoncc["data"];
          }
      }
  
      $floorAreaRatio = config('settingvalue.floorAreaRatio');
      $cityPlanning = config('settingvalue.cityplanning');

     return view('listdisplaycity',compact('floorAreaRatio','selectPrefecture','cityPlanning','arrjsoncc'));
      
  }
}
