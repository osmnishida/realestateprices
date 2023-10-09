<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectPrefectureController extends Controller
{
    public function selectprefecture() {
        return view('selectprefecture');
    }
}
