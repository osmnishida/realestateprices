<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandPost;

class FloorAreaRatioBarChartController extends Controller
{
    public function floorarearatiobarchart(Request $request) {
        $prefecture = $request->prefecture;
        $floorAreaRatio = config('settingvalue.floorAreaRatio');
        $averageArray = [];
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
        // TODO後で削除
        //var_dump($averageArray);
        return view('floorarearatiobarchart',compact('averageArray'));
    }
}
