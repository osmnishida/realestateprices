<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandPost;
use App\Models\CityCode;

class FloorAreaRatioBarChartController extends Controller
{
    public function floorarearatiobarchart(Request $request) {
        $prefecture = $request->prefecture;
        $cityPlanning = $request->cityplanning;
        $cityCodes=CityCode::where('prefecturename', $prefecture)->get();
        $cityCode = $request->citycode;
        // TODO:後で削除
        // var_dump($cityCodes);
        // echo "<br>";
        // var_dump($prefecture);
        // echo "<br>";
        // var_dump($cityPlanning);
        // echo "<br>";
        $floorAreaRatio = config('settingvalue.floorAreaRatio');
        $averageArray = [];

        foreach ($floorAreaRatio as $ratio) {
            $objectFloorAreaRatio = LandPost::where('floorarearatio', $ratio);
            // var_dump($objectFloorAreaRatio);
            if ($prefecture !== "全国" && $cityPlanning !== "問わない" ) {
                $objectFloorAreaRatio = $objectFloorAreaRatio->where('prefecture',$prefecture)->where('cityplanning',$cityPlanning);
            } elseif ($prefecture === "全国" && $cityPlanning !== "問わない") {
                $objectFloorAreaRatio = $objectFloorAreaRatio->where('cityplanning',$cityPlanning);
            } elseif ($prefecture !== "全国" && $cityPlanning === "問わない") {
                $objectFloorAreaRatio = $objectFloorAreaRatio->where('prefecture',$prefecture);
            }
                $landPostsRatio = $objectFloorAreaRatio->avg('priceperunit');
                $averageArray[$ratio] = $landPostsRatio;
            
        }

        /*
        if ($prefecture === "全国") {
            foreach($floorAreaRatio as $ratio) {
                $landPostsRatio = LandPost::where('floorarearatio', $ratio)->avg('priceperunit');
                $averageArray[$ratio] = $landPostsRatio;
            }
        } else {
            foreach($floorAreaRatio as $ratio) {
                $landPostsRatio = LandPost::where('prefecture',$prefecture)->where('floorarearatio', $ratio)->avg('priceperunit');
                $averageArray[$ratio] = $landPostsRatio;
            }
        }
        */

        // TODO後で削除
        //var_dump($averageArray);
        // return view('floorarearatiobarchart',compact('averageArray','cityCodes'));
    }
}
