<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MunicipalityController extends Controller
{
    public function municipality($prefectureNumber) {
        // dd($prefectureNumber);
        // $prefecture = "全国";
        // $arrjsoncc = ['aaa','bbb','ccc',];
        /*
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
        */

        // TODO後で削除
        // var_dump($floorAreaRatio);
        // $prefecturecode = $request->prefecturecode;
        // var_dump($prefecturecode);
        // return view('opcode', compact('prefecturecode'));

        /*
        $basiccca="https://www.land.mlit.go.jp/webland/api/CitySearch?area=";
        $ccaurl="$basiccca" . "$prefectureNumber";
        // return $ccaurl;
        $jsoncc = file_get_contents($ccaurl);
        $jsoncc = mb_convert_encoding($jsoncc, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        // return $jsoncc;
        $arrjsoncc = json_decode($jsoncc,true);
        $arrjsoncc = $arrjsoncc["data"];
        */
        
        

        $basiccca = "https://www.reinfolib.mlit.go.jp/ex-api/external/XIT002?area=";
        // $ccaurl = "$basiccca" . "01";
        $ccaurl = (string)$basiccca . (string)$prefectureNumber;

        $Ocp_Apim_Subscription_Key = env('Ocp_Apim_Subscription_Key');

            $client = new Client();
            $options = ['headers'=>['Ocp-Apim-Subscription-Key'=>$Ocp_Apim_Subscription_Key]];
            $respons = $client->request('GET',$ccaurl,$options);
            $responsData = $respons->getBody();
            $data = json_decode($responsData,true);
            $data = $data['data'];
            // dd($data);
            // $jsonData = json_encode($data);
            // dd($jsonData);


            // }
        // }

        // return $jsonData;
        // return view('municipality',compact('jsonData'));
        return response()->json($data);



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
