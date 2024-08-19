<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandPost;

class ListDisplayController extends Controller
{
    public function listdisplay(Request $request) {

        $floorAreaRatio = config('settingvalue.floorAreaRatio');
        $cityPlanning = config('settingvalue.cityplanning');
        $selectPrefecture = config('settingvalue.prefecture');

        $countAllRecordObjects = LandPost::selectRaw('COUNT(id) as count_id')->get();
        // var_dump($countAllRecordObjects);
        // echo "<br>";
        foreach ($countAllRecordObjects as $countAllRecord)
        $countAll = $countAllRecord->count_id;
        // Var_dump($countAll);
        // echo "<br>";

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

