<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandPost;
use GuzzleHttp\Client;

class AllSaveController extends Controller
{
    public function citycode() {
        $baseUrl = 'https://www.reinfolib.mlit.go.jp/ex-api/external/XIT001?';
             //   https://www.reinfolib.mlit.go.jp/ex-api/external/XIT001?year=2015&area=13 

        $area = "01";

        for ($year = 2005; $year <=2023; $year++) {
            var_dump($area);
            var_dump($year);
            echo "<br>";
            $url = "$baseUrl" . 'year=' . "$year" . '&area=' . "$area";  

            $Ocp_Apim_Subscription_Key = env('Ocp_Apim_Subscription_Key');

            $client = new Client();
            $options = ['headers'=>['Ocp-Apim-Subscription-Key'=>$Ocp_Apim_Subscription_Key]];
            $respons = $client->request('GET',$url,$options);
            $responsData = $respons->getBody();
            $data = json_decode($responsData,true);
            $data = $data['data'];
            // dd($data);

            foreach ($data as $respValue) {
                switch($respValue["Type"]) {
                    case "宅地(土地)":
                        // var_dump($respValue);
                        if($respValue["Period"]=="2023年第４四半期") {
                            $respValue["Period"] = "2023-12-31";
                        }
                        if($respValue["Period"]=="2023年第3四半期") {
                            $respValue["Period"] = "2023-09-30";
                        }
                        if($respValue["Period"]=="2023年第2四半期") {
                            $respValue["Period"] = "2023-06-30";
                        }
                        if($respValue["Period"]=="2023年第1四半期") {
                            $respValue["Period"] = "2023-03-31";
                        }
                        if($respValue["Period"]=="2022年第4四半期") {
                            $respValue["Period"] = "2022-12-31";
                        }
                        if($respValue["Period"]=="2022年第3四半期") {
                            $respValue["Period"] = "2022-09-30";
                        }
                        if($respValue["Period"]=="2022年第2四半期") {
                            $respValue["Period"] = "2022-06-30";
                        }
                        if($respValue["Period"]=="2022年第1四半期") {
                            $respValue["Period"] = "2022-03-31";
                        }
                        if($respValue["Period"]=="2021年第4四半期") {
                            $respValue["Period"] = "2021-12-31";
                        }
                        if($respValue["Period"]=="2021年第3四半期") {
                            $respValue["Period"] = "2021-09-30";
                        }
                        if($respValue["Period"]=="2021年第2四半期") {
                            $respValue["Period"] = "2021-06-30";
                        }
                        if($respValue["Period"]=="2021年第1四半期") {
                            $respValue["Period"] = "2021-03-31";
                        }
                        if($respValue["Period"]=="2020年第4四半期") {
                            $respValue["Period"] = "2020-12-31";
                        }
                        if($respValue["Period"]=="2020年第3四半期") {
                            $respValue["Period"] = "2020-09-30";
                        }
                        if($respValue["Period"]=="2020年第2四半期") {
                            $respValue["Period"] = "2020-06-30";
                        }
                        if($respValue["Period"]=="2020年第1四半期") {
                            $respValue["Period"] = "2020-03-31";
                        }
                        if($respValue["Period"]=="2019年第4四半期") {
                            $respValue["Period"] = "2019-12-31";
                        }
                        if($respValue["Period"]=="2019年第3四半期") {
                            $respValue["Period"] = "2019-09-30";
                        }
                        if($respValue["Period"]=="2019年第2四半期") {
                            $respValue["Period"] = "2019-06-30";
                        }
                        if($respValue["Period"]=="2019年第1四半期") {
                            $respValue["Period"] = "2019-03-31";
                        }
                        if($respValue["Period"]=="2018年第4四半期") {
                            $respValue["Period"] = "2018-12-31";
                        }
                        if($respValue["Period"]=="2018年第3四半期") {
                            $respValue["Period"] = "2018-09-30";
                        }
                        if($respValue["Period"]=="2018年第2四半期") {
                            $respValue["Period"] = "2018-06-30";
                        }
                        if($respValue["Period"]=="2018年第1四半期") {
                            $respValue["Period"] = "2018-03-31";
                        }
                        if($respValue["Period"]=="2017年第4四半期") {
                            $respValue["Period"] = "2017-12-31";
                        }
                        if($respValue["Period"]=="2017年第3四半期") {
                            $respValue["Period"] = "2017-09-30";
                        }
                        if($respValue["Period"]=="2017年第2四半期") {
                            $respValue["Period"] = "2017-06-30";
                        }
                        if($respValue["Period"]=="2017年第1四半期") {
                            $respValue["Period"] = "2017-03-31";
                        }
                        if($respValue["Period"]=="2016年第4四半期") {
                            $respValue["Period"] = "2016-12-31";
                        }
                        if($respValue["Period"]=="2016年第3四半期") {
                            $respValue["Period"] = "2016-09-30";
                        }
                        if($respValue["Period"]=="2016年第2四半期") {
                            $respValue["Period"] = "2016-06-30";
                        }
                        if($respValue["Period"]=="2016年第1四半期") {
                            $respValue["Period"] = "2016-03-31";
                        }
                        if($respValue["Period"]=="2015年第4四半期") {
                            $respValue["Period"] = "2015-12-31";
                        }
                        if($respValue["Period"]=="2015年第3四半期") {
                            $respValue["Period"] = "2015-09-30";
                        }
                        if($respValue["Period"]=="2015年第2四半期") {
                            $respValue["Period"] = "2015-06-30";
                        }
                        if($respValue["Period"]=="2015年第1四半期") {
                            $respValue["Period"] = "2015-03-31";
                        }
                        if($respValue["Period"]=="2014年第4四半期") {
                            $respValue["Period"] = "2014-12-31";
                        }
                        if($respValue["Period"]=="2014年第3四半期") {
                            $respValue["Period"] = "2014-09-30";
                        }
                        if($respValue["Period"]=="2014年第2四半期") {
                            $respValue["Period"] = "2014-06-30";
                        }
                        if($respValue["Period"]=="2014年第1四半期") {
                            $respValue["Period"] = "2014-03-31";
                        }
                        if($respValue["Period"]=="2013年第4四半期") {
                            $respValue["Period"] = "2013-12-31";
                        }
                        if($respValue["Period"]=="2013年第3四半期") {
                            $respValue["Period"] = "2013-09-30";
                        }
                        if($respValue["Period"]=="2013年第2四半期") {
                            $respValue["Period"] = "2013-06-30";
                        }
                        if($respValue["Period"]=="2013年第1四半期") {
                            $respValue["Period"] = "2013-03-31";
                        }
                        if($respValue["Period"]=="2012年第4四半期") {
                            $respValue["Period"] = "2012-12-31";
                        }
                        if($respValue["Period"]=="2012年第3四半期") {
                            $respValue["Period"] = "2012-09-30";
                        }
                        if($respValue["Period"]=="2012年第2四半期") {
                            $respValue["Period"] = "2012-06-30";
                        }
                        if($respValue["Period"]=="2012年第1四半期") {
                            $respValue["Period"] = "2012-03-31";
                        }
                        if($respValue["Period"]=="2011年第4四半期") {
                            $respValue["Period"] = "2011-12-31";
                        }
                        if($respValue["Period"]=="2011年第3四半期") {
                            $respValue["Period"] = "2011-09-30";
                        }
                        if($respValue["Period"]=="2011年第2四半期") {
                            $respValue["Period"] = "2011-06-30";
                        }
                        if($respValue["Period"]=="2011年第1四半期") {
                            $respValue["Period"] = "2011-03-31";
                        }
                        if($respValue["Period"]=="2010年第4四半期") {
                            $respValue["Period"] = "2010-12-31";
                        }
                        if($respValue["Period"]=="2010年第3四半期") {
                            $respValue["Period"] = "2010-09-30";
                        }
                        if($respValue["Period"]=="2010年第2四半期") {
                            $respValue["Period"] = "2010-06-30";
                        }
                        if($respValue["Period"]=="2010年第1四半期") {
                            $respValue["Period"] = "2010-03-31";
                        }
                        if($respValue["Period"]=="2009年第4四半期") {
                            $respValue["Period"] = "2009-12-31";
                        }
                        if($respValue["Period"]=="2009年第3四半期") {
                            $respValue["Period"] = "2009-09-30";
                        }
                        if($respValue["Period"]=="2009年第2四半期") {
                            $respValue["Period"] = "2009-06-30";
                        }
                        if($respValue["Period"]=="2009年第1四半期") {
                            $respValue["Period"] = "2009-03-31";
                        }
                        if($respValue["Period"]=="2008年第4四半期") {
                            $respValue["Period"] = "2008-12-31";
                        }
                        if($respValue["Period"]=="2008年第3四半期") {
                            $respValue["Period"] = "2008-09-30";
                        }
                        if($respValue["Period"]=="2008年第2四半期") {
                            $respValue["Period"] = "2008-06-30";
                        }
                        if($respValue["Period"]=="2008年第1四半期") {
                            $respValue["Period"] = "2008-03-31";
                        }
                        if($respValue["Period"]=="2007年第4四半期") {
                            $respValue["Period"] = "2007-12-31";
                        }
                        if($respValue["Period"]=="2007年第3四半期") {
                            $respValue["Period"] = "2007-09-30";
                        }
                        if($respValue["Period"]=="2007年第2四半期") {
                            $respValue["Period"] = "2007-06-30";
                        }
                        if($respValue["Period"]=="2007年第1四半期") {
                            $respValue["Period"] = "2007-03-31";
                        }
                        if($respValue["Period"]=="2006年第4四半期") {
                            $respValue["Period"] = "2006-12-31";
                        }
                        if($respValue["Period"]=="2006年第3四半期") {
                            $respValue["Period"] = "2006-09-30";
                        }
                        if($respValue["Period"]=="2006年第2四半期") {
                            $respValue["Period"] = "2006-06-30";
                        }
                        if($respValue["Period"]=="2006年第1四半期") {
                            $respValue["Period"] = "2006-03-31";
                        }
                        if($respValue["Period"]=="2005年第4四半期") {
                            $respValue["Period"] = "2005-12-31";
                        }
                        if($respValue["Period"]=="2005年第3四半期") {
                            $respValue["Period"] = "2005-09-30";
                        }

                        $now = date('Y-m-d H:i:s');

                        $insert_array = [];
                            $insert_array[] = [
                                'PriceCategory' => $respValue["PriceCategory"],
                                'Type' => $respValue["Type"],
                                'MunicipalityCode' => $respValue["MunicipalityCode"],
                                'Prefecture' => $respValue["Prefecture"],
                                'Municipality' => $respValue["Municipality"],
                                'Districtname' => $respValue["DistrictName"],
                                'Tradeprice' => $respValue["TradePrice"],
                                'Priceperunit' => $respValue["PricePerUnit"],
                                'Area' => $respValue["Area"],
                                'UnitPrice' => $respValue["UnitPrice"],
                                'LandShape' => $respValue["LandShape"],
                                'Frontage' => $respValue["Frontage"],
                                'Purpose' => $respValue["Purpose"],
                                'Direction' => $respValue["Direction"],
                                'Classification' => $respValue["Classification"],
                                'Breadth' => $respValue["Breadth"],
                                'CityPlanning' => $respValue["CityPlanning"],
                                'CoverageRatio' => $respValue["CoverageRatio"],
                                'FloorAreaRatio' => $respValue["FloorAreaRatio"],
                                'Region' => $respValue["Region"],
                                'Period' => $respValue["Period"],
                                'Remarks' => $respValue["Remarks"],
                                'created_at' => $now,
                                'updated_at' => $now,
                            ];
                        // dd($insert_array);
                        LandPost::insert($insert_array);
                        // usleep(1000000);
                        break;
                }
            }
        }
    }
}