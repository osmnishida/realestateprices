<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CityCode;
use App\Models\LandPost;

class ListDisplayCityController extends Controller
{
    public function listdisplaycity(Request $request) {
        $prefectureName=$request->prefecture;
        var_dump($prefectureName);
        // $cityCodes=CityCode::all();
        $cityCodes=CityCode::where('prefecturename', $prefectureName)->get();
        // dd($cityCodes);
        $landPosts=LandPost::where('prefecture', $prefectureName)->get();
        return view('listdisplaycity',compact('cityCodes','landPosts'));
    }
}
