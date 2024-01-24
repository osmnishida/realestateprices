<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectFloorAreaRatioController extends Controller
{
    public function selectfloorarearatio() {
        $floorAreaRatio = config('settingvalue.floorAreaRatio');
        $prefecture = config('settingvalue.prefecture');
        // TODO後で削除
        // var_dump($floorAreaRatio);
        // echo "<br>";
        // var_dump($prefecture);

        return view('selectfloorarearatio');
    }
}
