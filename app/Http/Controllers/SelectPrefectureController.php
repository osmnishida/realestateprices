<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandPost;

class SelectPrefectureController extends Controller
{
    public function selectprefecture() {

        // ユーザーごとにグループ化して平均値を計算
        $AverageObjects = LandPost::select('Prefecture')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Prefecture')->get();
        
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
        
        return view('selectprefecture',compact('sortArray'));
    }
}
