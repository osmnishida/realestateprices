<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandPost;
use App\Models\CityCode;
use App\Service\SelectValue;
use App\Service\SelectOrdinanceDesignatedCityValue;

class ListDisplayCityResultController extends Controller
{
    public function listdisplaycityresult(Request $request) {
        $floorAreaRatio = config('settingvalue.floorAreaRatio');
        $cityPlanning = config('settingvalue.cityplanning');
        $selectPrefecture = config('settingvalue.prefecture');
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
        $municipalityCode =intval($municipalityCodeStr);
        $cityCodes=CityCode::where('prefecturename', $prefecture)->get();
        $cityCode = $request->citycode;
        // TODO:後で削除
        // var_dump($prefecture);
        // Var_dump($municipalityCode);
        // var_dump($cityPlanning);
        // echo "<br>";

        $averageArray = [];

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

            $averagePeriodObjects = LandPost::query();
            if ($selectValue === 0) {
                // echo "<br>";
                $averagePeriodObjects = LandPost::whereIn('MunicipalityCode',$arrayValuesSelectOrdinanceDesignatedCity)->where('CityPlanning',$cityPlanning)->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();
                        // }
                        // $averagePeriodObjects->where('CityPlanning',$cityPlanning);
            } elseif ($selectValue === 1) {
                        $averagePeriodObjects = LaandPost::select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();;
            } elseif ($selectValue === 2) {
                        $averagePeriodObjects = LandPost::where('MunicipalityCode',$arrayValuesSelectOrdinanceDesignatedCity)->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();;
            } elseif ($selectValue === 3) {
                        $averagePeriodObjects = LandPost::where('CityPlanning',$cityPlanning)->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();;
            } elseif ($selectValue === 4) {
                        $averagePeriodObjects = LandPost::where('Prefecture',$prefecture)->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();;
            } elseif ($selectValue === 5) {
                        $averagePeriodObjects = LandPost::where('Prefecture',$prefecture)->where('CityPlanning',$cityPlanning)->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();;
            } 
                    // $averagePeriodObjects->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();
                    // echo '$averagePeriodObjects:';
                    // dd($averagePeriodObjects);
        echo "<br>";

        foreach($averagePeriodObjects as $averagePeriodObject) {
                        $averagePeriodArray["$averagePeriodObject->Period"] = $averagePeriodObject->average_price;
                        // echo '$averagePeriodObject->average_price';
                        // var_dump($averagePeriodObject->average_price);
                        // echo '$averagePeriodArray:';
                        // var_dump($averagePeriodArray);
        }
                    
        // echo '$averagePeriodArray:';
        // var_dump($averagePeriodArray);
        // echo "<br>";
                    /*
                    if ($selectValue === 0) {
                        $averagePeriodObjects = LandPost::where('MunicipalityCode',$value)->where('CityPlanning',$cityPlanning)->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();
                    } elseif ($selectValue === 1) {
                        $averagePeriodObjects = LandPost::select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();
                    } elseif ($selectValue === 2) {
                        $averagePeriodObjects = LandPost::where('MunicipalityCode',$value)->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();
                    } elseif ($selectValue === 3) {
                        $averagePeriodObjects = LandPost::where('CityPlanning',$cityPlanning)->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();
                    } elseif ($selectValue === 4) {
                        $averagePeriodObjects = LandPost::where('Prefecture',$prefecture)->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();
                    } elseif ($selectValue === 5) {
                        $averagePeriodObjects = LandPost::where('Prefecture',$prefecture)->where('CityPlanning',$cityPlanning)->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();
                    }
                    */
                    /*
                    foreach($averagePeriodObjects as $averagePeriodObject) {
                        $averagePeriodArray["$averagePeriodObject->Period"] = $averagePeriodObject->average_price;
                        // $totalAveragePeriodArray  
                    }
                    */
                    /*
                    var_dump($averagePeriodArray);
                    echo "<br>";
                    var_dump(count($averagePeriodArray));
                    echo "<br>";
                    echo "<br>";
                    */

                    // var_dump($periodObjects);
                    // echo "<br>";
                    /*
                    $periodPricePerUnitArray = [];
                    foreach($periodObjects as $periodObject) {
                        $keyPeriod = $periodObject->Period;
                        $valuePricePerUnit = $periodObject->PricePerUnit;
                        var_dump($keyPeriod);
                        var_dump($valuePricePerUnit);
                        echo "<br>";
                        $periodPricePerUnitArray["$keyPeriod"][] = $valuePricePerUnit;
                        // $periodPricePerUnitArray["$keyPeriod"] = $valuePricePerUnit;
                        var_dump($periodPricePerUnitArray);
                        echo "<br>";
                        // echo "array_sum";
                        // var_dump(array_sum($periodPricePerUnitArray["$keyPeriod"]));
                        // echo "<br>";
                        $totalPeriodArray["$keyPeriod"] = array_sum($periodPricePerUnitArray["$keyPeriod"]);
                        ksort($totalPeriodArray);
                        echo '$totalPeriodArray:';
                        var_dump($totalPeriodArray);
                        echo "<br>";
                        echo "<br>";
                    }
                    */
                    // $periodArray = (array)$periodObjects;
                    // echo '$periodArray';
                    // var_dump($periodArray);
                    // echo "<br>";

                // }

                // $totalPeriodArray = array_merge($totalPeriodArray,$periodArray);
                // echo '$totalPeriodArray'    ;
                // var_dump($totalPeriodArray);
                // echo "<br>";
                // echo "<br>";
                // $averagePeriodArray = $averagePeriodArray/$count;
        } else {
            // echo "false";
            // echo "<br>";
            $averegePeriodObjects = LandPost::query();
            if ($selectValue === 0) {
                $averagePeriodObjects = LandPost::where('MunicipalityCode',$municipalityCode)->where('CityPlanning',$cityPlanning)->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();;
            } elseif ($selectValue === 1) {
                $averagePeriodObjects = LandPost::query()->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();;
            } elseif ($selectValue === 2) {
                $averagePeriodObjects = LandPost::where('MunicipalityCode',$municipalityCode)->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();;
            } elseif ($selectValue === 3) {
                $averagePeriodObjects = LandPost::where('CityPlanning',$cityPlanning)->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();;
            } elseif ($selectValue === 4) {
                $averagePeriodObjects = LandPost::where('Prefecture',$prefecture)->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();;
            } elseif ($selectValue === 5) {
                $averagePeriodObjects = LandPost::where('Prefecture',$prefecture)->where('CityPlanning',$cityPlanning)->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();;
            }
            // $averegePeriodObjects->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();
    
            foreach($averagePeriodObjects as $averagePeriodObject) {
                $averagePeriodArray["$averagePeriodObject->Period"] = $averagePeriodObject->average_price;   
            }
            // var_dump($averagePeriodArray);
            // echo "<br>";

            /*
            foreach ($floorAreaRatio as $ratio) {
                $objectFloorAreaRatio = LandPost::where('floorarearatio', $ratio);
                // var_dump($objectFloorAreaRatio);
                if ($selectValue === 1 ) {
                    $objectFloorAreaRatio = $objectFloorAreaRatio->where('prefecture',$prefecture)->where('cityplanning',$cityPlanning);
                } elseif ($selectValue === 2 ) {
                    $objectFloorAreaRatio = $objectFloorAreaRatio->where('cityplanning',$cityPlanning);
                } elseif ($selectValue === 3 ) {
                    $objectFloorAreaRatio = $objectFloorAreaRatio->where('prefecture',$prefecture);
                }
            
                    $landPostsRatio = $objectFloorAreaRatio->avg('priceperunit');
                    $averageArray[$ratio] = $landPostsRatio;
                
            }
            */

        }

        
        // $averagePeriodObjects = LandPost::where('CityPlanning',$cityPlanning)->select('Period')->selectRaw('AVG(PricePerUnit) as average_price')->groupBy('Period')->orderBy('Period', 'asc')->get();
        

        // TODO後で削除
        //var_dump($averageArray);
        return view('listdisplaycityresult',compact('averagePeriodArray'));

    }

}
