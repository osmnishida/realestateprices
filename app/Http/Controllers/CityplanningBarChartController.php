<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandPost;
use App\Models\CityCode;
use App\Service\SelectValue;
use App\Service\SelectOrdinanceDesignatedCityValue;


class CityplanningBarChartController extends Controller
{
    public function cityplanningbarchart(Request $request) {
        $floorAreaRatio = config('settingvalue.floorAreaRatio');
        $cityPlanning = config('settingvalue.cityplanning');
        $selectPrefecture = config('settingvalue.prefecture');
        $ordinanceDesignatedCity = config('settingvalue.ordinancedesignatedcity');
        // echo '$cityPlanning:';
        // var_dump($cityPlanning);
        // echo "<br>";
        $arrayCityPlanningKey = array_fill_keys($cityPlanning, 0);
        // echo 'arraykCityPlanningKey:';
        // var_dump($arrayCityPlanningKey);
        // echo "<br>";
        // echo '$ordinanceDesignatedCity:';
        // var_dump($ordinanceDesignatedCity);
        // echo "<br>";

        $ordinanceDesignatedCityKey = array_keys($ordinanceDesignatedCity);
        // echo '$ordinanceDesignatedCityKey:';
        // print_r($ordinanceDesignatedCityKey);
        // echo "<br>";
        // echo "<br>";

        $prefecture = $request->prefecture;
        $cityPlanning = "問わない";
        $municipalityCodeStr = $request->municipality;
        $municipalityCode =intval($municipalityCodeStr);
        $from = $request->from;
        $to = $request->to;
        $cityCodes=CityCode::where('prefecturename', $prefecture)->get();
        $cityCode = $request->citycode;
        // TODO:後で削除
        // echo '$prefecture:';
        // var_dump($prefecture);
        // echo '$municipalityCode:';
        // var_dump($municipalityCode);
        // echo '$cityPlanning:';
        // var_dump($cityPlanning);
        // echo "<br>";
        // echo '$from:';
        // var_dump($from);
        // echo "<br>";
        // echo '$to:';
        // var_dump($to);
        // echo "<br>";

        $averageArray = $arrayCityPlanningKey;

        $selectValue = new SelectValue($prefecture,$municipalityCode,$cityPlanning);
        $selectValue = $selectValue->selectvalue();
        // echo '$selectValue:';
        // var_dump($selectValue);
        // echo "<br>";
        // echo "<br>";
        $count = 0;
        $averagePeriodArray = [];
        $totalPeriodArray = [];

        if (in_array($municipalityCode,$ordinanceDesignatedCityKey)) {
            // echo "true";
            // echo '(array_search($municipalityCode,$ordinanceDesignatedCityKey)):';
            // print_r(array_search($municipalityCode,$ordinanceDesignatedCityKey));
            // echo "<br>";
            
            $selectOrdinanceDesignatedCity = $ordinanceDesignatedCity["$municipalityCode"];
            // echo '$selectOrdinanceDesignatedCity:';
            // var_dump($selectOrdinanceDesignatedCity);
            // echo "<br>";
            $arrayValuesSelectOrdinanceDesignatedCity = array_values($selectOrdinanceDesignatedCity);
            // echo '$arrayValuesSelectOrdinanceDesignatedCity:';
            // var_dump($arrayValuesSelectOrdinanceDesignatedCity);
            // echo "<br>";

            $averageObjects = LandPost::query();
            if ($selectValue === 0) {
                // echo "<br>";
                $averageObjects = LandPost::whereIn('MunicipalityCode',$arrayValuesSelectOrdinanceDesignatedCity)->where('CityPlanning',$cityPlanning)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('CityPlanning')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('CityPlanning')->get();
                        // }
                        // $averagePeriodObjects->where('CityPlanning',$cityPlanning);
            } elseif ($selectValue === 1) {
                        $averageObjects = LaandPost::whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('CityPlanning')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('CityPlanning')->get();
            } elseif ($selectValue === 2) {
                        $averageObjects = LandPost::whereIn('MunicipalityCode',$arrayValuesSelectOrdinanceDesignatedCity)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('CityPlanning')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('CityPlanning')->get();
            } elseif ($selectValue === 3) {
                        $averageObjects = LandPost::where('CityPlanning',$cityPlanning)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('CityPlanning')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('CityPlanning')->get();
            } elseif ($selectValue === 4) {
                        $averageObjects = LandPost::where('Prefecture',$prefecture)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('CityPlanning')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('CityPlanning')->get();
            } elseif ($selectValue === 5) {
                        $averageObjects = LandPost::where('Prefecture',$prefecture)->where('CityPlanning',$cityPlanning)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('CityPlanning')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('CityPlanning')->get();
            } 
                    // $averagePeriodObjects->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();
                    // echo '$averagePeriodObjects:';
                    // dd($averagePeriodObjects);
        // echo "<br>";

        foreach($averageObjects as $averageObject) {
                        $averageArray["$averageObject->CityPlanning"] = $averageObject->average_price;
                        // echo '$averagePeriodObject->average_price';
                        // var_dump($averagePeriodObject->average_price);
                        // echo '$averagePeriodArray:';
                        // var_dump($averagePeriodArray);
        }
                    
        // echo '$averageArray:';
        // var_dump($averageArray);
        // echo "<br>";

        } else {
        // echo "false";
        // echo "<br>";
        $averegeObjects = LandPost::query();
        if ($selectValue === 0) {
            $averageObjects = LandPost::where('MunicipalityCode',$municipalityCode)->where('CityPlanning',$cityPlanning)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('CityPlanning')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('CityPlanning')->get();
        } elseif ($selectValue === 1) {
            $averageObjects = LandPost::query()->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('CityPlanning')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('CityPlanning')->get();
        } elseif ($selectValue === 2) {
            $averageObjects = LandPost::where('MunicipalityCode',$municipalityCode)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('CityPlanning')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('CityPlanning')->get();
        } elseif ($selectValue === 3) {
            $averageObjects = LandPost::where('CityPlanning',$cityPlanning)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('CityPlanning')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('CityPlanning')->get();
        } elseif ($selectValue === 4) {
            $averageObjects = LandPost::where('Prefecture',$prefecture)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('CityPlanning')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('CityPlanning')->get();
        } elseif ($selectValue === 5) {
            $averageObjects = LandPost::where('Prefecture',$prefecture)->where('CityPlanning',$cityPlanning)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('CityPlanning')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('CityPlanning')->get();
        }
        // $averegePeriodObjects->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();

        foreach($averageObjects as $averageObject) {
            $averageArray["$averageObject->CityPlanning"] = $averageObject->average_price;   
        }
        // var_dump($averageArray);
        // echo "<br>";
            
        }




        /*
        if ($prefecture === "全国") {
            foreach($floorAreaRatio as $ratio) {
                $landPostsRatio = LandPost::where('floorarearatio', $ratio)->avg('priceperunit');
                $averageArray[$ratio] = $landPostsRatio;
            }
        } else {
            foreach($floorAreaRatio as $ratio) {
                $landPostsRatio = LandPost::where('prefecture',$prefecture)->where('floorarearatio', $ratio)->avg('priceperunit');
                $averageArray[$ratio] = $landPostsRatio;
            }
        }
        */

        // TODO後で削除
        //      var_dump($averageArray);
        return view('cityplanningbarchart',compact('averageArray'));
    }
}
