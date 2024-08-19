<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandPost;
use App\Models\CityCode;
use App\Service\SelectValue;
use App\Service\SelectOrdinanceDesignatedCityValue;

class FloorAreaRatioBarChartController extends Controller
{
    public function floorarearatiobarchart(Request $request) {
        $floorAreaRatio = config('settingvalue.floorAreaRatio');

        $ordinanceDesignatedCity = config('settingvalue.ordinancedesignatedcity');
        // echo '$ordinanceDesignatedCity:';
        // var_dump($ordinanceDesignatedCity);
        // echo "<br>";

        $ordinanceDesignatedCityKey = array_keys($ordinanceDesignatedCity);
        // echo '$ordinanceDesignatedCityKey:';
        // print_r($ordinanceDesignatedCityKey);
        // echo "<br>";
        // echo "<br>";

        $prefecture = $request->prefecture;
        $cityPlanning = $request->cityplanning;
        $municipalityCodeStr = $request->municipality;
        $municipalityCode = intval($municipalityCodeStr);
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

        $selectValue = new SelectValue($prefecture,$municipalityCode,$cityPlanning);
        $selectValue = $selectValue->selectvalue();
        // echo '$selectValue:';
        // var_dump($selectValue);
        // echo "<br>";
        $averageArray = [];
        $countArray = [];

        if (in_array($municipalityCode,$ordinanceDesignatedCityKey)) {
            echo "true";
            echo '(array_search($municipalityCode,$ordinanceDesignatedCityKey)):';
            print_r(array_search($municipalityCode,$ordinanceDesignatedCityKey));
            echo "<br>";
            
            $selectOrdinanceDesignatedCity = $ordinanceDesignatedCity["$municipalityCode"];
            echo '$selectOrdinanceDesignatedCity:';
            var_dump($selectOrdinanceDesignatedCity);
            echo "<br>";
            $arrayValuesSelectOrdinanceDesignatedCity = array_values($selectOrdinanceDesignatedCity);
            echo '$arrayValuesSelectOrdinanceDesignatedCity:';
            var_dump($arrayValuesSelectOrdinanceDesignatedCity);
            echo "<br>";

            $averageObjects = LandPost::query();
            $countObjects = LandPost::query();
            if ($selectValue === 0) {
                echo "<br>";
                $averageObjects = LandPost::whereIn('MunicipalityCode',$arrayValuesSelectOrdinanceDesignatedCity)->where('CityPlanning',$cityPlanning)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
                        // }
                        // $averagePeriodObjects->where('CityPlanning',$cityPlanning);
                $countObjects = LandPost::whereIn('MunicipalityCode',$arrayValuesSelectOrdinanceDesignatedCity)->where('CityPlanning',$cityPlanning)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('COUNT(id) as count')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
            } elseif ($selectValue === 1) {
                        $averageObjects = LandPost::whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
                        $countObjects = LandPost::whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('COUNT(id) as count')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
            } elseif ($selectValue === 2) {
                        $averageObjects = LandPost::whereIn('MunicipalityCode',$arrayValuesSelectOrdinanceDesignatedCity)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
                        $countObjects = LandPost::whereIn('MunicipalityCode',$arrayValuesSelectOrdinanceDesignatedCity)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('COUNT(id) as count')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
            } elseif ($selectValue === 3) {
                        $averageObjects = LandPost::where('CityPlanning',$cityPlanning)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
                        $countObjects = LandPost::where('CityPlanning',$cityPlanning)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('COUNT(id) as count')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
            } elseif ($selectValue === 4) {
                        $averageObjects = LandPost::where('Prefecture',$prefecture)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
                        $countObjects = LandPost::where('Prefecture',$prefecture)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('COUNT(id) as count')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
            } elseif ($selectValue === 5) {
                        $averageObjects = LandPost::where('Prefecture',$prefecture)->where('CityPlanning',$cityPlanning)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
                        $countObjects = LandPost::where('Prefecture',$prefecture)->where('CityPlanning',$cityPlanning)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('COUNT(id) as count')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
                        
            } 

        // echo "<br>";

        foreach($averageObjects as $averageObject) {
                        $averageArray["$averageObject->FloorAreaRatio"] = $averageObject->average_price;
        }            
        // echo '$averageArray:';
        // var_dump($averageArray);
        // echo "<br>";
        foreach($countObjects as $countObject) {
            $countArray["$countObject->FloorAreaRatio"] = $countObject->count;
        }       
        // echo '$countArray:';
        // var_dump($countArray);
        // echo "<br>";
        } else {
        // echo "false";
        // echo "<br>";
        $averegeObjects = LandPost::query();
        if ($selectValue === 0) {
            $averageObjects = LandPost::where('MunicipalityCode',$municipalityCode)->where('CityPlanning',$cityPlanning)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
            $countObjects = LandPost::where('MunicipalityCode',$municipalityCode)->where('CityPlanning',$cityPlanning)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('COUNT(id) as count')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
        } elseif ($selectValue === 1) {
            $averageObjects = LandPost::query()->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
            $countObjects = LandPost::query()->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('COUNT(id) as count')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
        } elseif ($selectValue === 2) {
            $averageObjects = LandPost::where('MunicipalityCode',$municipalityCode)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
            $countObjects = LandPost::where('MunicipalityCode',$municipalityCode)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('COUNT(id) as count')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
        } elseif ($selectValue === 3) {
            $averageObjects = LandPost::where('CityPlanning',$cityPlanning)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
            $countObjects = LandPost::where('CityPlanning',$cityPlanning)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('COUNT(id) as count')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
        } elseif ($selectValue === 4) {
            $averageObjects = LandPost::where('Prefecture',$prefecture)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
            $countObjects = LandPost::where('Prefecture',$prefecture)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('COUNT(id) as count')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
        } elseif ($selectValue === 5) {
            $averageObjects = LandPost::where('Prefecture',$prefecture)->where('CityPlanning',$cityPlanning)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
            $countObjects = LandPost::where('Prefecture',$prefecture)->where('CityPlanning',$cityPlanning)->whereDate('period', '>=' ,$from)->whereDate('period', '<=' ,$to)->select('FloorAreaRatio')->selectRaw('COUNT(id) as count')->groupBy('FloorAreaRatio')->orderBy('FloorAreaRatio', 'asc')->get();
        }
        // $averegePeriodObjects->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();

        foreach($averageObjects as $averageObject) {
            $averageArray["$averageObject->FloorAreaRatio"] = $averageObject->average_price;   
        }
        // var_dump($averageArray);
        // echo "<br>";
        foreach($countObjects as $countObject) {
            $countArray["$countObject->FloorAreaRatio"] = $countObject->count;
        }       
        // echo '$countArray:';
        // var_dump($countArray);
        // echo "<br>";
        }
        $sumCountArray = array_sum($countArray);
        // var_dump($sumCountArray);
        // echo "<br>";
        return view('floorarearatiobarchart',compact('averageArray','countArray'));
    }
}
