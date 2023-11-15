<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandPost;

class PrefectureListDisplayController extends Controller
{
    public function prefecture(Request $request) {
        $prefecture = $request->prefecture;
        $from = $request->from;
        $to = $request->to;
        // var_dump($prefecture);
        // return $prefecture;
        // var_dump($from);
        // $prefectureLandPosts=LandPost::all();
        $prefectureLandPosts=LandPost::where('prefecture',$prefecture)->whereBetween('period', [$from,$to])->get();
        // dd($prefectureLandPosts);  
        return view('prefecturelistdisplay',compact('prefectureLandPosts'));

    }

}
