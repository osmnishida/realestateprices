<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandPost;

class PrefectureBarChartController extends Controller
{
    public function prefecturebarchart(Request $request) {
        $from = $request->from;
        $to = $request->to;
        // echo '$from:';
        // var_dump($from);
        // echo "<br>";
        // echo '$to:';
        // var_dump($to);
        // echo "<br>";

        // ユーザーごとにグループ化して平均値を計算
        $averageObjects = LandPost::whereDate('Period', '>=', $from)->whereDate('Period', '<=', $to)->select('Prefecture')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Prefecture')->get();
        $countObjects = LandPost::whereDate('Period', '>=', $from)->whereDate('Period', '<=', $to)->select('Prefecture')->selectRaw('COUNT(id) as count')->groupBy('Prefecture')->get();


        // var_dump($landPostsGunmaken);
        // $averageArrays =$averageObject;
        $averageArray = [];
        foreach ($averageObjects as $averageObject) {
            // dd($AverageObject);
            // var_dump($AverageObject->Prefecture);
            // echo "<br>";
            // var_dump($AverageObject->average_price);
            // echo "<br>";
            $averageArray["$averageObject->Prefecture"] = $averageObject->average_price;
        }

        // dd($averageArray);
        $sortArray = [];

        $baseArray = Config('settingvalue.prefecture');
        // dd($baseArray);
        foreach ($baseArray as $key=>$value) {
            if (array_key_exists($value,$averageArray)) {
                $sortAverageArray[$value] = $averageArray[$value];
            }
            else {
                $sortAverageArray[$value] = 0;
            }
        }
        // dd($sortArray);

        // $averageArray = $averageObject->Prefecture;
        // var_dump($averageArray);

        $countArray = [];
        foreach ($countObjects as $countObject) {
            // dd($AverageObject);
            // var_dump($AverageObject->Prefecture);
            // echo "<br>";
            // var_dump($AverageObject->average_price);
            // echo "<br>";
            $countArray["$countObject->Prefecture"] = $countObject->count;
        }
        // var_dump($countArray);

        // dd($averageArray);
        // dd($baseArray);
        foreach ($baseArray as $key=>$value) {
            if (array_key_exists($value,$countArray)) {
                $sortCountArray[$value] = $countArray[$value];
            }
            else {
                $sortCountArray[$value] = 0;
            }
        }
        // var_dump($sortCountArray);
        return view('prefecturebarchart',compact('sortAverageArray','sortCountArray'));
    }
}
