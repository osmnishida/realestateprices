<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CityCode;

class CityCodePostController extends Controller
{   public function store() {
        for($i=1;$i<=47;$i++) {
            switch($i) {
                case 1 :
                    $prefecturecode='01';
                    $prefecturename='北海道';
                    break;
                case 2 :
                    $prefecturecode='02';
                    $prefecturename='青森県';
                    break;
                case 3 :
                    $prefecturecode='03';
                    $prefecturename='岩手県';
                    break;
                case 4 :
                    $prefecturecode='04';
                    $prefecturename='宮城県';
                    break;
                case 5 :
                    $prefecturecode='05';
                    $prefecturename='秋田県';
                    break;
                case 6 :
                    $prefecturecode='06';
                    $prefecturename='山形県';
                    break;
                case 7 :
                    $prefecturecode='07';
                    $prefecturename='福島県';
                    break;
                case 8 :
                    $prefecturecode='08';
                    $prefecturename='茨城県';
                    break;
                case 9 :
                    $prefecturecode='09';
                    $prefecturename='栃木県';
                    break;
                case 10 :
                    $prefecturecode='10';
                    $prefecturename='群馬県';
                    break;
                case 11 :
                    $prefecturecode='11';
                    $prefecturename='埼玉県';
                    break;
                case 12 :
                    $prefecturecode='12';
                    $prefecturename='千葉県';
                    break;
                case 13 :
                    $prefecturecode='13';
                    $prefecturename='東京都';
                    break;
                case 14 :
                    $prefecturecode='14';
                    $prefecturename='神奈川県';
                    break;
                case 15 :
                    $prefecturecode='15';
                    $prefecturename='新潟県';
                    break;
                case 16 :
                    $prefecturecode='16';
                    $prefecturename='富山県';
                    break;
                case 17 :
                    $prefecturecode='17';
                    $prefecturename='石川県';
                    break;
                case 18 :
                    $prefecturecode='18';
                    $prefecturename='福井県';
                    break;
                case 19 :
                    $prefecturecode='19';
                    $prefecturename='山梨県';
                    break;
                case 20 :
                    $prefecturecode='20';
                    $prefecturename='長野県';
                    break;
                case 21 :
                    $prefecturecode='21';
                    $prefecturename='岐阜県';
                    break;
                case 22 :
                    $prefecturecode='22';
                    $prefecturename='静岡県';
                    break;
                case 23 :
                    $prefecturecode='23';
                    $prefecturename='愛知県';
                    break;
                case 24 :
                    $prefecturecode='24';
                    $prefecturename='三重県';
                    break;
                case 25 :
                    $prefecturecode='25';
                    $prefecturename='滋賀県';
                    break;
                case 26 :
                    $prefecturecode='26';
                    $prefecturename='京都府';
                    break;
                case 27 :
                    $prefecturecode='27';
                    $prefecturename='大阪府';
                    break;
                case 28 :
                    $prefecturecode='28';
                    $prefecturename='兵庫県';
                    break;
                case 29 :
                    $prefecturecode='29';
                    $prefecturename='奈良県';
                    break;
                case 30 :
                    $prefecturecode='30';
                    $prefecturename='和歌山県';
                    break;
                case 31 :
                    $prefecturecode='31';
                    $prefecturename='鳥取県';
                    break;
                case 32 :
                    $prefecturecode='32';
                    $prefecturename='島根県';
                    break;
                case 33 :
                    $prefecturecode='33';
                    $prefecturename='岡山県';
                    break;
                case 34 :
                    $prefecturecode='34';
                    $prefecturename='広島県';
                    break;
                case 35 :
                    $prefecturecode='35';
                    $prefecturename='山口県';
                    break;
                case 36 :
                    $prefecturecode='36';
                    $prefecturename='徳島県';
                    break;
                case 37 :
                    $prefecturecode='37';
                    $prefecturename='香川県';
                    break;
                case 38 :
                    $prefecturecode='38';
                    $prefecturename='愛媛県';
                    break;
                case 39 :
                    $prefecturecode='39';
                    $prefecturename='高知県';
                    break;
                case 40 :
                    $prefecturecode='40';
                    $prefecturename='福岡県';
                    break;
                case 41 :
                    $prefecturecode='41';
                    $prefecturename='佐賀県';
                    break;
                case 42 :
                    $prefecturecode='42';
                    $prefecturename='長崎県';
                    break;
                case 43 :
                    $prefecturecode='43';
                    $prefecturename='熊本県';
                    break;
                case 44 :
                    $prefecturecode='44';
                    $prefecturename='大分県';
                    break;
                case 45 :
                    $prefecturecode='45';
                    $prefecturename='宮崎県';
                    break;
                case 46 :
                    $prefecturecode='46';
                    $prefecturename='鹿児島県';
                    break;
                case 47 :
                    $prefecturecode='47';
                    $prefecturename='沖縄県';
                    break;
            }

            $basicCca="https://www.land.mlit.go.jp/webland/api/CitySearch?area=";
            $ccaUrl="$basicCca" . "$prefecturecode";
            $ccaResp = \Http::get($ccaUrl);
            // var_dump($ccaResp);
            $arrCcaResps = json_decode($ccaResp->body(),true);
            // var_dump($arrCcaResps);
            $arrCcaResps = $arrCcaResps["data"];
            foreach($arrCcaResps as $resp) {
                var_dump($resp);
                echo "<br>";
                echo "<br>";
        
                $insert_array = [];
                $insert_array[] = [
                    'prefecturecode' => $prefecturecode,
                    'prefecturename' => $prefecturename,
                    'citycode' => $resp["id"],
                    'cityname' => $resp["name"]
                ];
                CityCode::insert($insert_array);
        
            }
            // $request->session()->flash('message', '保存しました');
            // return redirect()->route('selectprefecture');

        }

    // $prefecturecode = [
        // [
           //  'citycode' => '01',
           //  'cityname' => '北海道'
        // ]
    // ]


    //echo $_POST;
    // phpinfo();
    // print_r($request);
    // $landPost = $request->modifieldresp;
    // var_dump($landPost);
    // echo "<br>";
    // echo "<br>";
    // $arrLandPost = json_decode($landPost,true);
    // var_dump($arrLandPost);
    // echo "<br>";
    // echo "<br>";

    }

}
