<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class SelectFloorAreaRatioController extends Controller
{
    public function selectfloorarearatio() {
    
        $floorAreaRatio = config('settingvalue.floorAreaRatio');
        $cityPlanning = config('settingvalue.cityplanning');

       return view('selectfloorarearatio',compact('floorAreaRatio','cityPlanning'));
        
    }
}
