<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandPost;

class ListDisplayCityResultController extends Controller
{
    public function listdisplaycityresult(Request $request) {
        $cityCode = $request->citycode;
        $from=$request->from;
        $to=$request->to;
        // TODO:後で削除
        var_dump($cityCode);
        var_dump($from);
        var_dump($to);
        // $cityCodes=CityCode::all();
        $landPosts=LandPost::where('municipalitycode', $cityCode)->whereBetween('period',[$from,$to])->get();
        $landPosts2023=LandPost::where('municipalitycode', $cityCode)->whereBetween('period',['2023-01-01','2023-12-31'])->get();
        $landPosts2022=LandPost::where('municipalitycode', $cityCode)->whereBetween('period',['2022-01-01','2022-12-31'])->get();
        $landPosts2021=LandPost::where('municipalitycode', $cityCode)->whereBetween('period',['2021-01-01','2021-12-31'])->get();
        $landPosts2020=LandPost::where('municipalitycode', $cityCode)->whereBetween('period',['2020-01-01','2020-12-31'])->get();
        $landPosts2019=LandPost::where('municipalitycode', $cityCode)->whereBetween('period',['2019-01-01','2019-12-31'])->get();
        $landPosts2018=LandPost::where('municipalitycode', $cityCode)->whereBetween('period',['2018-01-01','2018-12-31'])->get();
        return view('listdisplaycityresult',compact('landPosts','landPosts2023','landPosts2022','landPosts2021','landPosts2020','landPosts2019','landPosts2018'));
    }
}
