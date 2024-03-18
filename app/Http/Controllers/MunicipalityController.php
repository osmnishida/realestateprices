<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MunicipalityController extends Controller
{
    public function municipality(Request $request) {
        $prefecture = "全国";
        $arrjsoncc = ['aaa','bbb','ccc',];
        $selectPrefecture = config('settingvalue.prefecture');
        if (isset($_GET['prefecture'])) {
            $prefecture = htmlspecialchars($_GET['prefecture'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
            if ($prefecture !== '') {
                print($prefecture);
            // dd($prefecture);

        // var_dump($selectPrefecture);
        $prefectureCode = array_keys($selectPrefecture,"$prefecture");
        // var_dump($prefectureCode);
        $prefectureNumber = implode($prefectureCode);
        // var_dump($prefectureNumber);

        // TODO後で削除
        // var_dump($floorAreaRatio);
        // $prefecturecode = $request->prefecturecode;
        // var_dump($prefecturecode);
        // return view('opcode', compact('prefecturecode'));

        $basiccca="https://www.land.mlit.go.jp/webland/api/CitySearch?area=";
        $ccaurl="$basiccca" . "$prefectureNumber";
        // return $ccaurl;
        $jsoncc = file_get_contents($ccaurl);
        $jsoncc = mb_convert_encoding($jsoncc, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        // return $jsoncc;
        $arrjsoncc = json_decode($jsoncc,true);
        $arrjsoncc = $arrjsoncc["data"];
            }
        }

        return view('municipality',compact('arrjsoncc'));



        /*
        $data1 = [
            'msg'=>'これはコントローラ１番目$data1から渡されたメッセージです',
            'prefecture'=>$request->prefecture
        ];
        $data2 = [
            'msg2'=>'これはコントローラ２番目$data2から渡されたメッセージです',
            'prefecture2'=>$request->prefecture
        ];
        // dd($data);
        // $prefecture = $request->input('prefecture');
        return view('municipality',$data1,$data2);
        */
    }
}
