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
        $AverageObjects = LandPost::whereDate('Period', '>=', $from)->whereDate('Period', '<=', $to)->select('Prefecture')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Prefecture')->get();


        // var_dump($landPostsGunmaken);
        // $averageArrays =$averageObject;
        $averageArray = [];
        foreach ($AverageObjects as $AverageObject) {
            // dd($AverageObject);
            // var_dump($AverageObject->Prefecture);
            // echo "<br>";
            // var_dump($AverageObject->average_price);
            // echo "<br>";
            $averageArray["$AverageObject->Prefecture"] = $AverageObject->average_price;
        }

        // dd($averageArray);
        $sortArray = [];

        $baseArray = Config('settingvalue.prefecture');
        // dd($baseArray);
        foreach ($baseArray as $key=>$value) {
            if (array_key_exists($value,$averageArray)) {
                $sortArray[$value] = $averageArray[$value];
            }
            else {
                $sortArray[$value] = 0;
            }
        }
        // dd($sortArray);

        // $averageArray = $averageObject->Prefecture;
        // var_dump($averageArray);
        return view('prefecturebarchart',compact('sortArray'));
    }
}
