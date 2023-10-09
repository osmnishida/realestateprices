<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OPCodeController extends Controller
{
    public function opcode(Request $request) {
        $prefecturecode = $request->prefecturecode;
        // return $prefecturecode;
        // return view('opcode', compact('prefecturecode'));

        $basiccca="https://www.land.mlit.go.jp/webland/api/CitySearch?area=";
        $ccaurl="$basiccca" . "$prefecturecode";
        // return $ccaurl;
        $jsoncc = file_get_contents($ccaurl);
        $jsoncc = mb_convert_encoding($jsoncc, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        // return $jsoncc;
        $arrjsoncc = json_decode($jsoncc,true);
        // $arrjsoncc = json_encode(json_decode($jsoncc,true),JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
        // return $arrjsoncc;
        // return $arrjsoncc["data"][0]["name"];
        // dd($arrjsoncc);
        $arrjsoncc = $arrjsoncc["data"];
        return view('opcode', compact('arrjsoncc'));

        $data =["id" => "terurou",
                "name" => "八木照朗",
                "age" => 25];
        // return $data["name"];
            
    }
}
