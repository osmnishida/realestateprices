<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandPost;

class PrefectureBarChartController extends Controller
{
    public function prefecturebarchart() {
        $landPostsHokkaido=LandPost::where('prefecture', '北海道')->get();
            $countHokkaido=0;
            foreach($landPostsHokkaido as $landPostHokkaido) {
                $pricePerUnitHokkaido = $landPostHokkaido->priceperunit;
                var_dump($pricePerUnitHokkaido);
                $countHokkaido++;
                echo $countHokkaido;
                echo "<br>";
            }


        $landPostsAomoriken=LandPost::where('prefecture', '青森県')->get();
        $landPostsIwateken=LandPost::where('prefecture', '岩手県')->get();
        $landPostsMiyagiken=LandPost::where('prefecture', '宮城県')->get();
        $landPostsAkitaken=LandPost::where('prefecture', '秋田県')->get();
        $landPostsYamagataken=LandPost::where('prefecture', '山形県')->get();
        $landPostsFukushimaken=LandPost::where('prefecture', '福島県')->get();
        $landPostsIbarakiken=LandPost::where('prefecture', '茨城県')->get();
        $landPostsTochigiken=LandPost::where('prefecture', '栃木県')->get();
        $landPostsGunmaken=LandPost::where('prefecture', '群馬県')->get();
        // var_dump($landPostsGunmaken);

        // return view('prefecturebarchart',compact('landPostsHokkaido','landPostsAomoriken','landPostsIwateken','landPostsMiyagiken','landPostsAkitaken','landPostsYamagataken','landPostsFukushimaken','landPostsIbarakiken','landPostsTochigiken','landPostsGunmaken'));
    }
}
