<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandPost;

class ListDisplayController extends Controller
{
    /*
    public function listdisplay() {
        // $landPosts=LandPost::orderBy('id', 'desc')->get();
        // $paginateLandPosts=LandPost::paginate(25);
        // dd($paginateLandPosts);
        // return view('listdisplay');
       // return view('listdisplay',compact('landPosts'));

        $avgLandPosts2023=LandPost::whereBetween('period',['2023-01-01','2023-12-31'])->avg('priceperunit');
        $avgLandPosts2022=LandPost::whereBetween('period',['2022-01-01','2022-12-31'])->avg('priceperunit');
        $avgLandPosts2021=LandPost::whereBetween('period',['2021-01-01','2021-12-31'])->avg('priceperunit');
        $avgLandPosts2020=LandPost::whereBetween('period',['2020-01-01','2020-12-31'])->avg('priceperunit');
        $avgLandPosts2019=LandPost::whereBetween('period',['2019-01-01','2019-12-31'])->avg('priceperunit');
        $avgLandPosts2018=LandPost::whereBetween('period',['2018-01-01','2018-12-31'])->avg('priceperunit');

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

        return view('listdisplay',compact('arrayAvgData')); */

    public function listdisplay(Request $request) {

        /*
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

        $avgLandPosts2023=LandPost::whereBetween('period',['2023-01-01','2023-12-31'])->avg('priceperunit');
        $avgLandPosts2022=LandPost::whereBetween('period',['2022-01-01','2022-12-31'])->avg('priceperunit');
        $avgLandPosts2021=LandPost::whereBetween('period',['2021-01-01','2021-12-31'])->avg('priceperunit');
        $avgLandPosts2020=LandPost::whereBetween('period',['2020-01-01','2020-12-31'])->avg('priceperunit');
        $avgLandPosts2019=LandPost::whereBetween('period',['2019-01-01','2019-12-31'])->avg('priceperunit');
        $avgLandPosts2018=LandPost::whereBetween('period',['2018-01-01','2018-12-31'])->avg('priceperunit');

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
        */

        $floorAreaRatio = config('settingvalue.floorAreaRatio');
        $cityPlanning = config('settingvalue.cityplanning');
        $selectPrefecture = config('settingvalue.prefecture');

        $AverageObjects = LandPost::select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->get();

        $averageArray = [];
        foreach ($AverageObjects as $AverageObject) {
            // var_dump($AverageObject->Period);
            // echo "<br>";
            // var_dump($AverageObject->average_price);
            // echo "<br>";
            $averageArray["$AverageObject->Period"] = $AverageObject->average_price;
        }

        // $averageArray = $averageObject->Prefecture;
        // var_dump($averageArray);


       // return view('listdisplay',compact('floorAreaRatio','selectPrefecture','cityPlanning','averageArray'));
       return view('listdisplay',compact('cityPlanning','averageArray'));

    }
}

