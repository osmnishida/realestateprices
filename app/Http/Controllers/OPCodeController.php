<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class OPCodeController extends Controller
{
    public function opcode(Request $request) {
        $prefecturecode = $request->prefecturecode;
        // return $prefecturecode;
        // return view('opcode', compact('prefecturecode'));

        // $url = 'https://www.reinfolib.mlit.go.jp/ex-api/external/XIT001?area='.$prefecturecode;
        // $url = 'https://www.reinfolib.mlit.go.jp/ex-api/external/XIT001?year=2015&area=13&language=ja';
        $url = 'https://www.reinfolib.mlit.go.jp/ex-api/external/XIT001?year=2015&area=13&language=ja';
             //   https://www.reinfolib.mlit.go.jp/ex-api/external/XIT001?year=2015&area=13 

    // $data = array(
       //  'year' => '2015',
        //'area' => '13',
    // );

    // $appkey = env('APP_KEY');

    $apiKey = "0a0cfbcc647a48faabd81dd83f6986e6";

    $client = new Client();
    $options = ['headers'=>['Ocp-Apim-Subscription-Key'=>$apiKey]];
    $respons = $client->request('GET',$url,$options);
    $responsData = $respons->getBody();
    $data = json_decode($responsData,true);
    dd($data['data'][0]);

    // $context = array(
        // 'http' => array(
            // 'method'  => 'GET',
            // 'header'  => implode("\r\n", array('Content-Type: application/x-www-form-urlencoded','Ocp-Apim-Subscription-Key:0a0cfbcc647a48faabd81dd83f6986e6',)),
            // 'header'  => implode("\r\n", array('Accept-Charset=utf-8,Ocp-Apim-Subscription-Key:0a0cfbcc647a48faabd81dd83f6986e6',)),
            // 'header'  => implode("\r\n", array('Content-Type: text/plain; charset=utf-8','Ocp-Apim-Subscription-Key:0a0cfbcc647a48faabd81dd83f6986e6',)),
            // 'content' => http_build_query($data)
        // )
    // );

    // $html = file_get_contents($url, false, stream_context_create($context));
    // $resp = \Http::get($url);
    // dd($resp);

    // $arrResp = json_decode($resp->body(),true);

    //var_dump($http_response_header);

    dd($html);


        // $basiccca="https://www.land.mlit.go.jp/webland/api/CitySearch?area=";
        // $ccaurl="$basiccca" . "$prefecturecode";
        // return $ccaurl;
        // $jsoncc = file_get_contents($ccaurl);
        // $jsoncc = mb_convert_encoding($html, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        // $jsoncc = mb_convert_encoding($html, 'UTF-8', 'SJIS');
        // dd($jsoncc);
        // return $jsoncc;
        // dd(gettype($html));
        $arrjsoncc = json_decode($html);
        // dd($arrjsoncc);
        // $arrjsoncc = json_encode(json_decode($jsoncc,true),JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
        // return $arrjsoncc;
        // return $arrjsoncc["data"][0]["name"];
        // dd($arrjsoncc);
        $arrjsoncc = $arrjsoncc["data"];
        return view('opcode', compact('arrjsoncc'));

        // $data =["id" => "terurou",
                // "name" => "八木照朗",
                // "age" => 25];
        // return $data["name"];
            
    }
}
