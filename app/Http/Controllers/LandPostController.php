<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandPost;

class LandPostController extends Controller
{
    public function store(Request $request) {
        //echo $_POST;
        // phpinfo();
        // print_r($request);
        $landPost = $request->modifieldresp;
        // var_dump($landPost);
        // echo "<br>";
        // echo "<br>";
        $arrLandPost = json_decode($landPost,true);
        // var_dump($arrLandPost);
        // echo "<br>";
        // echo "<br>";
        foreach($arrLandPost as $landPostValue) {
            // var_dump($landPostValue);
            // echo "<br>";
            // echo "<br>";
            // var_dump($landPostValue["Prefecture"]);
            // var_dump($landPostValue["Municipality"]);
            // var_dump($landPostValue["DistrictName"]);
            // var_dump($landPostValue["TradePrice"]);
            // var_dump($landPostValue["PricePerUnit"]);
            // var_dump($landPostValue["Area"]);
            // var_dump($landPostValue["UnitPrice"]);
            // var_dump($landPostValue["LandShape"]);
            // var_dump($landPostValue["Direction"]);
            // var_dump($landPostValue["CityPlanning"]);
            // var_dump($landPostValue["CoverageRatio"]);
            // var_dump($landPostValue["FloorAreaRatio"]);
            // var_dump($landPostValue["Region"]);
            // var_dump($landPostValue["Period"]);
            // echo "<br>";

            $insert_array = [];


            $insert_array[] = [
                'prefecture' => $landPostValue["Prefecture"],
                'municipality' => $landPostValue["Municipality"],
                'districtname' => $landPostValue["DistrictName"],
                'tradeprice' => $landPostValue["TradePrice"],
                'priceperunit' => $landPostValue["PricePerUnit"],
                'area' => $landPostValue["Area"],
                'unitprice' => $landPostValue["UnitPrice"],
                'landshape' => $landPostValue["LandShape"],
                'frontage' => $landPostValue["Frontage"],
                'direction' => $landPostValue["Direction"],
                'cityplanning' => $landPostValue["CityPlanning"],
                'coverageratio' => $landPostValue["CoverageRatio"],
                'floorarearatio' => $landPostValue["FloorAreaRatio"],
                'region' => $landPostValue["Region"],
                'period' => $landPostValue["Period"]
                ];

            LandPost::insert($insert_array);

        }
        $request->session()->flash('message', '保存しました');
        return redirect()->route('selectprefecture');
    }
}
