<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandPost;

class AllSaveController extends Controller
{
    public function citycode() {
        $basiccca="https://www.land.mlit.go.jp/webland/api/CitySearch?area=";
        $prefecturecode="01";
        $ccaurl="$basiccca" . "$prefecturecode";
        $jsoncc = file_get_contents($ccaurl);
        $jsoncc = mb_convert_encoding($jsoncc, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        $arrjsoncc = json_decode($jsoncc,true);
        $arrjsoncc = $arrjsoncc["data"];
        for ($i=1; $i<=10; $i++) {
            if ($i==1) {
                $fromyyyyn="20053";
                $toyyyyn="20053";
            }
            if ($i==2) {
                $fromyyyn="20054";
                $toyyyyn="20054";
            }
            if ($i==3) {
                $fromyyyyn="20061";
                $toyyyyn="20061";
            }
            if ($i==4) {
                $fromyyyn="20062";
                $toyyyyn="20062";
            }
            if ($i==5) {
                $fromyyyyn="20063";
                $toyyyyn="20063";
            }
            if ($i==6) {
                $fromyyyn="20064";
                $toyyyyn="20064";
            }
            if ($i==7) {
                $fromyyyyn="20071";
                $toyyyyn="20071";
            }
            if ($i==8) {
                $fromyyyn="20072";
                $toyyyyn="20072";
            }
            if ($i==9) {
                $fromyyyyn="20073";
                $toyyyyn="20073";
            }
            if ($i==10) {
                $fromyyyn="20074";
                $toyyyyn="20074";
            }
            if ($i==11) {
                $fromyyyyn="20081";
                $toyyyyn="20081";
            }
            if ($i==12) {
                $fromyyyn="20082";
                $toyyyyn="20082";
            }
            if ($i==13) {
                $fromyyyyn="20083";
                $toyyyyn="20083";
            }
            if ($i==14) {
                $fromyyyn="20084";
                $toyyyyn="20084";
            }
            if ($i==15) {
                $fromyyyyn="20091";
                $toyyyyn="20091";
            }
            if ($i==16) {
                $fromyyyn="20092";
                $toyyyyn="20092";
            }
            if ($i==17) {
                $fromyyyyn="20093";
                $toyyyyn="20093";
            }
            if ($i==18) {
                $fromyyyn="20094";
                $toyyyyn="20094";
            }
            if ($i==19) {
                $fromyyyyn="20101";
                $toyyyyn="20101";
            }
            if ($i==20) {
                $fromyyyn="20102";
                $toyyyyn="20102";
            }
            if ($i==21) {
                $fromyyyyn="20103";
                $toyyyyn="20103";
            }
            if ($i==22) {
                $fromyyyn="20104";
                $toyyyyn="20104";
            }
            if ($i==23) {
                $fromyyyyn="20111";
                $toyyyyn="20111";
            }
            if ($i==24) {
                $fromyyyn="20112";
                $toyyyyn="20112";
            }
            if ($i==25) {
                $fromyyyyn="20113";
                $toyyyyn="200113";
            }
            if ($i==26) {
                $fromyyyn="20114";
                $toyyyyn="20114";
            }
            if ($i==27) {
                $fromyyyyn="20121";
                $toyyyyn="20121";
            }
            if ($i==28) {
                $fromyyyn="20122";
                $toyyyyn="20122";
            }
            if ($i==29) {
                $fromyyyyn="20123";
                $toyyyyn="20123";
            }
            if ($i==30) {
                $fromyyyn="20124";
                $toyyyyn="20124";
            }
            if ($i==31) {
                $fromyyyyn="20131";
                $toyyyyn="20131";
            }
            if ($i==32) {
                $fromyyyn="20132";
                $toyyyyn="20132";
            }
            if ($i==33) {
                $fromyyyyn="20133";
                $toyyyyn="20133";
            }
            if ($i==34) {
                $fromyyyn="20134";
                $toyyyyn="20134";
            }
            if ($i==35) {
                $fromyyyyn="20151";
                $toyyyyn="20151";
            }
            if ($i==36) {
                $fromyyyn="20152";
                $toyyyyn="20152";
            }
            if ($i==37) {
                $fromyyyyn="20153";
                $toyyyyn="20153";
            }
            if ($i==38) {
                $fromyyyn="20154";
                $toyyyyn="20154";
            }
            if ($i==39) {
                $fromyyyyn="20161";
                $toyyyyn="20161";
            }
            if ($i==40) {
                $fromyyyn="20162";
                $toyyyyn="20162";
            }
            if ($i==41) {
                $fromyyyyn="20163";
                $toyyyyn="20163";
            }
            if ($i==42) {
                $fromyyyn="20164";
                $toyyyyn="20164";
            }
            if ($i==43) {
                $fromyyyyn="20171";
                $toyyyyn="20171";
            }
            if ($i==44) {
                $fromyyyn="20172";
                $toyyyyn="20172";
            }
            if ($i==45) {
                $fromyyyyn="20173";
                $toyyyyn="20173";
            }
            if ($i==46) {
                $fromyyyn="20174";
                $toyyyyn="20174";
            }
            if ($i==47) {
                $fromyyyyn="20181";
                $toyyyyn="20181";
            }
            if ($i==48) {
                $fromyyyn="20182";
                $toyyyyn="20182";
            }
            if ($i==49) {
                $fromyyyyn="20183";
                $toyyyyn="20183";
            }
            if ($i==50) {
                $fromyyyn="20184";
                $toyyyyn="20184";
            }
            if ($i==51) {
                $fromyyyyn="20191";
                $toyyyyn="20191";
            }
            if ($i==52) {
                $fromyyyn="20192";
                $toyyyyn="20192";
            }
            if ($i==53) {
                $fromyyyyn="20193";
                $toyyyyn="20193";
            }
            if ($i==54) {
                $fromyyyn="20194";
                $toyyyyn="20194";
            }
            if ($i==55) {
                $fromyyyyn="20201";
                $toyyyyn="20201";
            }
            if ($i==56) {
                $fromyyyn="20202";
                $toyyyyn="20202";
            }
            if ($i==57) {
                $fromyyyyn="20203";
                $toyyyyn="20203";
            }
            if ($i==58) {
                $fromyyyn="20204";
                $toyyyyn="20204";
            }
            if ($i==59) {
                $fromyyyyn="20211";
                $toyyyyn="20211";
            }
            if ($i==60) {
                $fromyyyn="20212";
                $toyyyyn="20212";
            }
            if ($i==61) {
                $fromyyyyn="20213";
                $toyyyyn="20213";
            }
            if ($i==62) {
                $fromyyyn="20214";
                $toyyyyn="20214";
            }
            if ($i==63) {
                $fromyyyyn="20221";
                $toyyyyn="20221";
            }
            if ($i==64) {
                $fromyyyn="20222";
                $toyyyyn="20222";
            }
            if ($i==65) {
                $fromyyyyn="20223";
                $toyyyyn="20223";
            }
            if ($i==66) {
                $fromyyyn="20224";
                $toyyyyn="20224";
            }
            if ($i==67) {
                $fromyyyyn="20231";
                $toyyyyn="20231";
            }
            if ($i==68) {
                $fromyyyn="20232";
                $toyyyyn="20232";
            }
            
            echo $i;
            echo "<br>";
            usleep(1000000);


            foreach ($arrjsoncc as $cc) {
                $basicTradeSearch = 'https://www.land.mlit.go.jp/webland/api/TradeListSearch?';
                $citycode = $cc["id"];
                $tradeSearchUrl = "$basicTradeSearch" . "from=" . "$fromyyyyn" . "&to=" . "$toyyyyn" . "&city=" . "$citycode";
                $resp = \Http::get($tradeSearchUrl);
                $arrResp = json_decode($resp->body(),true);
                $arrResp = $arrResp["data"];
                usleep(1000000);
                foreach ($arrResp as $respValue) {
                    switch($respValue["Type"]) {
                        case "宅地(土地)":
                            if(array_key_exists('Region',$respValue)) {
                            }
                            else {
                                echo "地区　未設定検出";
                                $respValue["Region"] = "未設定";
                            }
                            if(array_key_exists('MunicipalityCode',$respValue)) {
                            }
                            else {
                                echo "市町村コード　未設定検出";
                                $respValue["MunicipalityCode"] = "未設定";
                            }
                            if(array_key_exists('Prefecture',$respValue)) {
                            }
                            else {
                                echo "都道府県名　未設定検出";
                                $respValue["Prefecture"] = "未設定";
                            }
                            if(array_key_exists('Municipality',$respValue)) {
                            }
                            else {
                                echo "市町村名　未設定検出";
                                $respValue["Municipality"] = "未設定";
                            }
                            if(array_key_exists('DistrictName',$respValue)) {
                            }
                            else {
                                echo "地区名　未設定検出";
                                $respValue["DistrictName"] = "未設定";
                            }
                            if(array_key_exists('TradePrice',$respValue)) {
                            }
                            else {
                                echo "取引価格(総額）　未設定検出";
                                $respValue["TradePrice"] = "未設定";
                            }
                            if(array_key_exists('PricePerUnit',$respValue)) {
                            }
                            else {
                                echo "坪単価　未設定検出";
                                $respValue["PricePerUnit"] = "未設定";
                            }
                            if(array_key_exists('Area',$respValue)) {
                            }
                            else {
                                echo "面積(㎡)　未設定検出";
                                $respValue["Area"] = "未設定";
                            }
                            if(array_key_exists('UnitPrice',$respValue)) {
                            }
                            else {
                                echo "取引価格（㎡単価）　未設定検出";
                                $respValue["UnitPrice"] = "未設定";
                            }
                            if(array_key_exists('LandShape',$respValue)) {
                            }
                            else {
                                echo "土地の形状　未設定検出";
                                $respValue["LandShape"] = "未設定";
                            }
                            if(array_key_exists('Frontage',$respValue)) {
                            }
                            else {
                                echo "間口　未設定検出";
                                $respValue["Frontage"] = "未設定";
                            }
                            if(array_key_exists('Purpose',$respValue)) {
                            }
                            else {
                                echo "今後の利用目的　未設定検出";
                                $respValue["Purpose"] = "未設定";
                            }
                            if(array_key_exists('Direction',$respValue)) {
                            }
                            else {
                                echo "前面道路：方位　未設定検出";
                                $respValue["Direction"] = "未設定";
                            }
                            if(array_key_exists('Classification',$respValue)) {
                            }
                            else {
                                echo "前面道路：種類　未設定検出";
                                $respValue["Classification"] = "未設定";
                            }
                            if(array_key_exists('Breadth',$respValue)) {
                            }
                            else {
                                echo "前面道路：幅員(m)　未設定検出";
                                $respValue["Breadth"] = "未設定";
                            }
                            if(array_key_exists('CityPlanning',$respValue)) {
                            }
                            else {
                                echo "都市計画　未設定検出";
                                $respValue["CityPlanning"] = "未設定";
                            }
                            if(array_key_exists('CoverageRatio',$respValue)) {
                            }
                            else {
                                echo "建ぺい率　未設定検出";
                                $respValue["CoverageRatio"] = "未設定";
                            }
                            if(array_key_exists('FloorAreaRatio',$respValue)) {
                            }
                            else {
                                echo "容積率　未設定検出";
                                $respValue["FloorAreaRatio"] = "未設定";
                            }
                            if(array_key_exists('Period',$respValue)) {
                            }
                            else {
                                echo "取引時点　未設定検出";
                                $respValue["Period"] = "未設定";
                            }
                            if(array_key_exists('Remarks',$respValue)) {
                            }
                            else {
                                echo "取引の事情等　未設定検出";
                                $respValue["Remarks"] = "未設定";
                            }
                            var_dump($respValue);
                            echo "<br>";

                            $insert_array = [];
                            $insert_array[] = [
                                'type' => $respValue["Type"],
                                'municipalitycode' => $respValue["MunicipalityCode"],
                                'prefecture' => $respValue["Prefecture"],
                                'municipality' => $respValue["Municipality"],
                                'districtname' => $respValue["DistrictName"],
                                'tradeprice' => $respValue["TradePrice"],
                                'priceperunit' => $respValue["PricePerUnit"],
                                'area' => $respValue["Area"],
                                'unitprice' => $respValue["UnitPrice"],
                                'landshape' => $respValue["LandShape"],
                                'frontage' => $respValue["Frontage"],
                                'purpose' => $respValue["Purpose"],
                                'direction' => $respValue["Direction"],
                                'classification' => $respValue["Classification"],
                                'breadth' => $respValue["Breadth"],
                                'cityplanning' => $respValue["CityPlanning"],
                                'coverageratio' => $respValue["CoverageRatio"],
                                'floorarearatio' => $respValue["FloorAreaRatio"],
                                'region' => $respValue["Region"],
                                'period' => $respValue["Period"],
                                'remarks' => $respValue["Remarks"]
                            ];
                            LandPost::insert($insert_array);
                            usleep(1000000);
                            break;
                    }
                }
            }
        }
    }
}