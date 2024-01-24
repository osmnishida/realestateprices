<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CityCode;
use App\Models\LandPost;

class ListDisplayCityController extends Controller
{
    public function listdisplaycity(Request $request) {
        $prefectureName=$request->prefecture;
        var_dump($prefectureName);
        // $cityCodes=CityCode::all();
        $cityCodes=CityCode::where('prefecturename', $prefectureName)->get();
        // dd($cityCodes);
        $landPosts=LandPost::where('prefecture', $prefectureName)->get();

        $cityCode = $request->citycode;
        $from=$request->from;
        $to=$request->to;
        // TODO:後で削除
        var_dump($cityCode);
        var_dump($from);
        var_dump($to);
        // $cityCodes=CityCode::all();
        // $landPosts=LandPost::where('prefecture', $prefectureName)->whereBetween('period',[$from,$to])->get();
        $landPosts2023=LandPost::where('prefecture', $prefectureName)->whereBetween('period',['2023-01-01','2023-12-31'])->get();
        $landPosts2022=LandPost::where('prefecture', $prefectureName)->whereBetween('period',['2022-01-01','2022-12-31'])->get();
        $landPosts2021=LandPost::where('prefecture', $prefectureName)->whereBetween('period',['2021-01-01','2021-12-31'])->get();
        $landPosts2020=LandPost::where('prefecture', $prefectureName)->whereBetween('period',['2020-01-01','2020-12-31'])->get();
        $landPosts2019=LandPost::where('prefecture', $prefectureName)->whereBetween('period',['2019-01-01','2019-12-31'])->get();
        $landPosts2018=LandPost::where('prefecture', $prefectureName)->whereBetween('period',['2018-01-01','2018-12-31'])->get();
        //return view('listdisplaycityresult',compact('landPosts','landPosts2023','landPosts2022','landPosts2021','landPosts2020','landPosts2019','landPosts2018'));
        
        $avgLandPosts2023=LandPost::where('prefecture', $prefectureName)->whereBetween('period',['2023-01-01','2023-12-31'])->avg('priceperunit');
        $avgLandPosts2022=LandPost::where('prefecture', $prefectureName)->whereBetween('period',['2022-01-01','2022-12-31'])->avg('priceperunit');
        $avgLandPosts2021=LandPost::where('prefecture', $prefectureName)->whereBetween('period',['2021-01-01','2021-12-31'])->avg('priceperunit');
        $avgLandPosts2020=LandPost::where('prefecture', $prefectureName)->whereBetween('period',['2020-01-01','2020-12-31'])->avg('priceperunit');
        $avgLandPosts2019=LandPost::where('prefecture', $prefectureName)->whereBetween('period',['2019-01-01','2019-12-31'])->avg('priceperunit');
        $avgLandPosts2018=LandPost::where('prefecture', $prefectureName)->whereBetween('period',['2018-01-01','2018-12-31'])->avg('priceperunit');

        // dd($avgLandPosts2023);
        $arrayAvgData = [
                        '2018年' => $avgLandPosts2018,
                        '2019年' => $avgLandPosts2019,
                        '2020年' => $avgLandPosts2020,
                        '2021年' => $avgLandPosts2021,
                        '2022年' => $avgLandPosts2022,
                        '2023年' => $avgLandPosts2023
                        ];
        var_dump($arrayAvgData);
        // $jsonArrayAvgData = json_encode($arrayAvgData);
        // var_dump($jsonArrayAvgData);


        return view('listdisplaycity',compact('cityCodes','landPosts','arrayAvgData'));
    
        $counter = 0;
        $totalPricePerUnit = 0;
        $counter2023 = 0;
        $totalPricePerUnit2023 = 0;
        $counter2022 = 0;
        $totalPricePerUnit2022 = 0;
        $counter2021 = 0;
        $totalPricePerUnit2021 = 0;
        $counter2020 = 0;
        $totalPricePerUnit2020 = 0;
        $counter2019 = 0;
        $totalPricePerUnit2019 = 0;
        $counter2018 = 0;
        $totalPricePerUnit2018 = 0;

        /*
        foreach($landPosts2023 as $landPost2023)
        ID：{{$landPost2023->id}}都道府県名：{{$landPost2023->prefecture}}市区町村名：{{$landPost2023->municipality}}地区名：{{$landPost2023->districtname}}
        取引価格（総額）：{{$landPost2023->tradeprice}}坪単価：{{$landPost2023->priceperunit}}面積（㎡）：{{$landPost2023->area}}
        取引価格（㎡単価）：{{$landPost2023->unitprice}}土地の形状：{{$landPost2023->landshape}}間口：{{$landPost2023->frontage}}今後の利用目的：{{$landPost2023->purpose}}前面道路：方位：{{$landPost2023->direction}}
        前面道路：種類：{{$landPost2023->classification}}前面道路：幅員（m）：{{$landPost2023->breadth}}都市計画：{{$landPost2023->cityplanning}}
        建ぺい率：{{$landPost2023->coverageratio}}容積率：{{$landPost2023->floorarearatio}}取引時点：{{$landPost2023->period}}
        取引の事情等：{{$landPost2023->remarks}}
      $totalPricePerUnit2023 = $totalPricePerUnit2023+($landPost2023->priceperunit);
      echo($totalPricePerUnit2023);
      echo('<br>');
      $counter2023++;
      echo($counter2023);
      echo("<br>");
      $averagePricePerUnit2023 = $totalPricePerUnit2023/$counter2023;
      echo('平均坪単価：'.$averagePricePerUnit2023);
  @endforeach
  */
    
    }
}
