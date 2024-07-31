<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectCityplanningController extends Controller
{
    public function selectcityplanning() {
        // $floorAreaRatio = config('settingvalue.floorAreaRatio');
        // $cityPlanning = config('settingvalue.cityplanning');

       // return view('selectplanning',compact('floorAreaRatio','cityPlanning'));
       return view('selectcityplanning');
    }
}
