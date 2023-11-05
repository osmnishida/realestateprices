<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandPost;

class PrefectureListDisplayController extends Controller
{
    public function prefecture(Request $request) {
        $prefecture = $request->prefecture;
        // var_dump($prefecture);
        // return $prefecture;
        // $prefectureLandPosts=LandPost::all();
        $prefectureLandPosts=LandPost::where('prefecture',[$prefecture])->get();
        // dd($prefectureLandPosts);  
        return view('prefecturelistdisplay',compact('prefectureLandPosts'));

    }

}
