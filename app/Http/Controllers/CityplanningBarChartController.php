<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandPost;

class CityplanningBarChartController extends Controller
{
    public function cityplanningbarchart(Request $request) {
        $prefecture = $request->prefecture;
        var_dump($prefecture);
        echo "<br>";
        $averageArray = [];

        if ($prefecture === "全国") {
            $landPostsIchitei = LandPost::where('cityplanning', '第１種低層住居専用地域')->get();
                // dd($landPostsIchitei);
                $pricePerUnitIchitei = 0;
                $countIchitei = 0;
                $averageIchitei = 0;
                foreach($landPostsIchitei as $landPostIchitei) {
                    $pricePerUnitIchitei += $landPostIchitei->priceperunit;
                    $countIchitei++;
                }
                if ($countIchitei == 0) {
                    $averageIchitei = 0;
                } else {
                    $averageIchitei = $pricePerUnitIchitei/$countIchitei;
                }
                // TODO:後で削除
                var_dump($averageIchitei);
                echo "<br>";
                $averageArray["第１種低層住居専用地域"] = "$averageIchitei";
                var_dump($averageArray);
                echo "<br>";
            $landPostsNitei = LandPost::where('cityplanning', '第２種低層住居専用地域')->get();
                $pricePerUnitNitei = 0;
                $countNitei = 0;
                $averageNitei = 0;
                foreach($landPostsNitei as $landPostNitei) {
                    $pricePerUnitNitei += $landPostNitei->priceperunit;
                    $countNitei++;
                }
                if ($countNitei == 0) {
                    $averageNitei = 0;
                } else {
                    $averageNitei = $pricePerUnitNitei/$countNitei;
                }
                // TODO:後で削除
                var_dump($averageNitei);
                echo "<br>";
                $averageArray["第２種低層住居専用地域"] = "$averageNitei";
                var_dump($averageArray);
                echo "<br>";
            /* TODO:田園住居地域指定なし
            $landPostsDenen = LandPost::where('cityplanning', '田園住居地域')->get();
                $pricePerUnitDenen = 0;
                $countDenen = 0;
                $averageDenen = 0;
                foreach($landPostsDenen as $landPostDenen) {
                    $pricePerUnitDenen += $landPostDenen->priceperunit;
                    $countDenen++;
                }
                if ($countDenen == 0) {
                    $averageDenen = 0;
                } else {
                    $averageDenen = $pricePerUnitDenen/$countDenen;
                }
                // TODO:後で削除
                var_dump($averageDenen);
                echo "<br>";
                $averageArray["田園住居地域"] = "$averageDenen";
                var_dump($averageArray);
                echo "<br>";
            */
            $landPostsIchichu = LandPost::where('cityplanning', '第１種中高層住居専用地域')->get();
                $pricePerUnitIchichu = 0;
                $countIchichu = 0;
                $averageIchichu = 0;
                foreach($landPostsIchichu as $landPostIchichu) {
                    $pricePerUnitIchichu += $landPostIchichu->priceperunit;
                    $countIchichu++;
                }
                if ($countIchichu == 0) {
                    $averageIchichu = 0;
                } else {
                    $averageIchichu = $pricePerUnitIchichu/$countIchichu;
                }
                // TODO:後で削除
                var_dump($averageIchichu);
                echo "<br>";
                $averageArray["第１種中高層住居専用地域"] = "$averageIchichu";
                var_dump($averageArray);
                echo "<br>";
            $landPostsNichu = LandPost::where('cityplanning', '第２種中高層住居専用地域')->get();
                $pricePerUnitNichu = 0;
                $countNichu = 0;
                $averageNichu = 0;
                foreach($landPostsNichu as $landPostNichu) {
                    $pricePerUnitNichu += $landPostNichu->priceperunit;
                    $countNichu++;
                }
                if ($countNichu == 0) {
                    $averageNichu = 0;
                } else {
                    $averageNichu = $pricePerUnitNichu/$countNichu;
                }
                // TODO:後で削除
                var_dump($averageNichu);
                echo "<br>";
                $averageArray["第２種中高層住居専用地域"] = "$averageNichu";
                var_dump($averageArray);
                echo "<br>";
            $landPostsIchijyu = LandPost::where('cityplanning', '第１種住居地域')->get();
                $pricePerUnitIchijyu = 0;
                $countIchijyu = 0;
                $averageIchijyu = 0;
                foreach($landPostsIchijyu as $landPostIchijyu) {
                    $pricePerUnitIchijyu += $landPostIchijyu->priceperunit;
                    $countIchijyu++;
                }
                if ($countIchijyu == 0) {
                    $averageIchijyu = 0;
                } else {
                    $averageIchijyu = $pricePerUnitIchijyu/$countIchijyu;
                }
                // TODO:後で削除
                var_dump($averageIchijyu);
                echo "<br>";
                $averageArray["第１種住居地域"] = "$averageIchijyu";
                var_dump($averageArray);
                echo "<br>";
            $landPostsNijyu = LandPost::where('cityplanning', '第２種住居地域')->get();
                $pricePerUnitNijyu = 0;
                $countNijyu = 0;
                $averageNijyu = 0;
                foreach($landPostsNijyu as $landPostNijyu) {
                    $pricePerUnitNijyu += $landPostNijyu->priceperunit;
                    $countNijyu++;
                }
                if ($countNijyu == 0) {
                    $averageNijyu = 0;
                } else {
                    $averageNijyu = $pricePerUnitNijyu/$countNijyu;
                }
                // TODO:後で削除
                var_dump($averageNijyu);
                echo "<br>";
                $averageArray["第２種住居地域"] = "$averageNijyu";
                var_dump($averageArray);
                echo "<br>";
            $landPostsJyunjyu= LandPost::where('cityplanning', '準住居地域')->get();
                $pricePerUnitJyunjyu = 0;
                $countJyunjyu = 0;
                $averageJyunjyu = 0;
                foreach($landPostsJyunjyu as $landPostJyunjyu) {
                    $pricePerUnitJyunjyu += $landPostJyunjyu->priceperunit;
                    $countJyunjyu++;
                }
                if ($countJyunjyu == 0) {
                    $averageJyunjyu = 0;
                } else {
                    $averageJyunjyu = $pricePerUnitJyunjyu/$countJyunjyu;
                }
                // TODO:後で削除
                var_dump($averageJyunjyu);
                echo "<br>";
                $averageArray["準住居地域"] = "$averageJyunjyu";
                var_dump($averageArray);
                echo "<br>";
            $landPostsKinsyo= LandPost::where('cityplanning', '近隣商業地域')->get();
                $pricePerUnitKinsyo = 0;
                $countKinsyo = 0;
                $averageKinsyo = 0;
                foreach($landPostsKinsyo as $landPostKinsyo) {
                    $pricePerUnitKinsyo += $landPostKinsyo->priceperunit;
                    $countKinsyo++;
                }
                if ($countKinsyo == 0) {
                    $averageKinsyo = 0;
                } else {
                    $averageKinsyo = $pricePerUnitKinsyo/$countKinsyo;
                }
                // TODO:後で削除
                var_dump($averageKinsyo);
                echo "<br>";
                $averageArray["近隣商業地域"] = "$averageKinsyo";
                var_dump($averageArray);
                echo "<br>";
            $landPostsSyogyo= LandPost::where('cityplanning', '商業地域')->get();
                $pricePerUnitSyogyo = 0;
                $countSyogyo = 0;
                $averageSyogyo = 0;
                foreach($landPostsSyogyo as $landPostSyogyo) {
                    $pricePerUnitSyogyo += $landPostSyogyo->priceperunit;
                    $countSyogyo++;
                }
                if ($countSyogyo == 0) {
                    $averageSyogyo = 0;
                } else {
                    $averageSyogyo = $pricePerUnitSyogyo/$countSyogyo;
                }
                // TODO:後で削除
                var_dump($averageSyogyo);
                echo "<br>";
                $averageArray["商業地域"] = "$averageSyogyo";
                var_dump($averageArray);
                echo "<br>";
            $landPostsJyunko= LandPost::where('cityplanning', '準工業地域')->get();
                $pricePerUnitJyunko = 0;
                $countJyunko = 0;
                $averageJyunko = 0;
                foreach($landPostsJyunko as $landPostJyunko) {
                    $pricePerUnitJyunko += $landPostJyunko->priceperunit;
                    $countJyunko++;
                }
                if ($countJyunko == 0) {
                    $averageJyunko = 0;
                } else {
                    $averageJyunko = $pricePerUnitJyunko/$countJyunko;
                }
                // TODO:後で削除
                var_dump($averageJyunko);
                echo "<br>";
                $averageArray["準工業地域"] = "$averageJyunko";
                var_dump($averageArray);
                echo "<br>";
            $landPostsKogyo= LandPost::where('cityplanning', '工業地域')->get();
                $pricePerUnitKogyo = 0;
                $countKogyo = 0;
                $averageKogyo = 0;
                foreach($landPostsKogyo as $landPostKogyo) {
                    $pricePerUnitKogyo += $landPostKogyo->priceperunit;
                    $countKogyo++;
                }
                if ($countKogyo == 0) {
                    $averageKogyo = 0;
                } else {
                    $averageKogyo = $pricePerUnitKogyo/$countKogyo;
                }
                // TODO:後で削除
                var_dump($averageKogyo);
                echo "<br>";
                $averageArray["工業地域"] = "$averageKogyo";
                var_dump($averageArray);
                echo "<br>";
            $landPostsKosen= LandPost::where('cityplanning', '工業専用地域')->get();
                $pricePerUnitKosen = 0;
                $countKosen = 0;
                $averageKosen = 0;
                foreach($landPostsKosen as $landPostKosen) {
                    $pricePerUnitKosen += $landPostKosen->priceperunit;
                    $countKosen++;
                }
                if ($countKosen == 0) {
                    $averageKosen = 0;
                } else {
                    $averageKosen = $pricePerUnitKosen/$countKosen;
                }
                // TODO:後で削除
                var_dump($averageKosen);
                echo "<br>";
                $averageArray["工業専用地域"] = "$averageKosen";
                var_dump($averageArray);
                echo "<br>";
            $landPostsChosei= LandPost::where('cityplanning', '市街化調整区域')->get();
                $pricePerUnitChosei = 0;
                $countChosei = 0;
                $averageChosei = 0;
                foreach($landPostsChosei as $landPostChosei) {
                    $pricePerUnitChosei += $landPostChosei->priceperunit;
                    $countChosei++;
                }
                if ($countChosei == 0) {
                    $averageChosei = 0;
                } else {
                    $averageChosei = $pricePerUnitChosei/$countChosei;
                }
                // TODO:後で削除
                var_dump($averageChosei);
                echo "<br>";
                $averageArray["市街化調整区域"] = "$averageChosei";
                var_dump($averageArray);
                echo "<br>";
            $landPostsHisenbiki= LandPost::where('cityplanning', '市街化区域及び市街化調整区域外の都市計画区域')->get();
                $pricePerUnitHisenbiki = 0;
                $countHisenbiki = 0;
                $averageHisenbiki = 0;
                foreach($landPostsHisenbiki as $landPostHisenbiki) {
                    $pricePerUnitHisenbiki += $landPostHisenbiki->priceperunit;
                    $countHisenbiki++;
                }
                if ($countHisenbiki == 0) {
                    $averageHisenbiki = 0;
                } else {
                    $averageHisenbiki = $pricePerUnitHisenbiki/$countHisenbiki;
                }
                // TODO:後で削除
                var_dump($averageHisenbiki);
                echo "<br>";
                $averageArray["非線引き区域"] = "$averageHisenbiki";
                var_dump($averageArray);
                echo "<br>";
            $landPostsJyuntoshi= LandPost::where('cityplanning', '準都市計画区域')->get();
                $pricePerUnitJyuntoshi = 0;
                $countJyuntoshi = 0;
                $averageJyuntoshi = 0;
                foreach($landPostsJyuntoshi as $landPostJyuntoshi) {
                    $pricePerUnitJyuntoshi += $landPostJyuntoshi->priceperunit;
                    $countJyuntoshi++;
                }
                if ($countJyuntoshi == 0) {
                    $averageJyuntoshi = 0;
                } else {
                    $averageJyuntoshi = $pricePerUnitJyuntoshi/$countJyuntoshi;
                }
                // TODO:後で削除
                var_dump($averageJyuntoshi);
                echo "<br>";
                $averageArray["準都市計画区域"] = "$averageJyuntoshi";
                var_dump($averageArray);
                echo "<br>";
            $landPostsKuikigai= LandPost::where('cityplanning', '都市計画区域外')->get();
                $pricePerUnitKuikigai = 0;
                $countKuikigai = 0;
                $averageKuikigai = 0;
                foreach($landPostsKuikigai as $landPostKuikigai) {
                    $pricePerUnitKuikigai += $landPostKuikigai->priceperunit;
                    $countKuikigai++;
                }
                if ($countKuikigai == 0) {
                    $averageKuikigai = 0;
                } else {
                    $averageKuikigai = $pricePerUnitKuikigai/$countKuikigai;
                }
                // TODO:後で削除
                var_dump($averageKuikigai);
                echo "<br>";
                $averageArray["都市計画区域外"] = "$averageKuikigai";
                var_dump($averageArray);
                echo "<br>";
        } else {
        $landPostsIchitei = LandPost::where('prefecture', "$prefecture")->where('cityplanning', '第１種低層住居専用地域')->get();
        // dd($landPostsIchitei);
            $pricePerUnitIchitei = 0;
            $countIchitei = 0;
            $averageIchitei = 0;
            foreach($landPostsIchitei as $landPostIchitei) {
                $pricePerUnitIchitei += $landPostIchitei->priceperunit;
                $countIchitei++;
            }
            if ($countIchitei == 0) {
                $averageIchitei = 0;
            } else {
                $averageIchitei = $pricePerUnitIchitei/$countIchitei;
            }
            // TODO:後で削除
            var_dump($averageIchitei);
            echo "<br>";
            $averageArray["第１種低層住居専用地域"] = "$averageIchitei";
            var_dump($averageArray);
            echo "<br>";
        $landPostsNitei = LandPost::where('prefecture', "$prefecture")->where('cityplanning', '第２種低層住居専用地域')->get();
            $pricePerUnitNitei = 0;
            $countNitei = 0;
            $averageNitei = 0;
            foreach($landPostsNitei as $landPostNitei) {
                $pricePerUnitNitei += $landPostNitei->priceperunit;
                $countNitei++;
            }
            if ($countNitei == 0) {
                $averageNitei = 0;
            } else {
                $averageNitei = $pricePerUnitNitei/$countNitei;
            }
            // TODO:後で削除
            var_dump($averageNitei);
            echo "<br>";
            $averageArray["第２種低層住居専用地域"] = "$averageNitei";
            var_dump($averageArray);
            echo "<br>";
        /* TODO:田園住居地域指定なし
        $landPostsDenen = LandPost::where('prefecture', "$prefecture")->where('cityplanning', '田園住居地域')->get();
            $pricePerUnitDenen = 0;
            $countDenen = 0;
            $averageDenen = 0;
            foreach($landPostsDenen as $landPostDenen) {
                $pricePerUnitDenen += $landPostDenen->priceperunit;
                $countDenen++;
            }
            if ($countDenen == 0) {
                $averageDenen = 0;
            } else {
                $averageDenen = $pricePerUnitDenen/$countDenen;
            }
            // TODO:後で削除
            var_dump($averageDenen);
            echo "<br>";
            $averageArray["田園住居地域"] = "$averageDenen";
            var_dump($averageArray);
            echo "<br>";
        */
        $landPostsIchichu = LandPost::where('prefecture', "$prefecture")->where('cityplanning', '第１種中高層住居専用地域')->get();
            $pricePerUnitIchichu = 0;
            $countIchichu = 0;
            $averageIchichu = 0;
            foreach($landPostsIchichu as $landPostIchichu) {
                $pricePerUnitIchichu += $landPostIchichu->priceperunit;
                $countIchichu++;
            }
            if ($countIchichu == 0) {
                $averageIchichu = 0;
            } else {
                $averageIchichu = $pricePerUnitIchichu/$countIchichu;
            }
            // TODO:後で削除
            var_dump($averageIchichu);
            echo "<br>";
            $averageArray["第１種中高層住居専用地域"] = "$averageIchichu";
            var_dump($averageArray);
            echo "<br>";
        $landPostsNichu = LandPost::where('prefecture', "$prefecture")->where('cityplanning', '第２種中高層住居専用地域')->get();
            $pricePerUnitNichu = 0;
            $countNichu = 0;
            $averageNichu = 0;
            foreach($landPostsNichu as $landPostNichu) {
                $pricePerUnitNichu += $landPostNichu->priceperunit;
                $countNichu++;
            }
            if ($countNichu == 0) {
                $averageNichu = 0;
            } else {
                $averageNichu = $pricePerUnitNichu/$countNichu;
            }
            // TODO:後で削除
            var_dump($averageNichu);
            echo "<br>";
            $averageArray["第２種中高層住居専用地域"] = "$averageNichu";
            var_dump($averageArray);
            echo "<br>";
        $landPostsIchijyu = LandPost::where('prefecture', "$prefecture")->where('cityplanning', '第１種住居地域')->get();
            $pricePerUnitIchijyu = 0;
            $countIchijyu = 0;
            $averageIchijyu = 0;
            foreach($landPostsIchijyu as $landPostIchijyu) {
                $pricePerUnitIchijyu += $landPostIchijyu->priceperunit;
                $countIchijyu++;
            }
            if ($countIchijyu == 0) {
                $averageIchijyu = 0;
            } else {
                $averageIchijyu = $pricePerUnitIchijyu/$countIchijyu;
            }
            // TODO:後で削除
            var_dump($averageIchijyu);
            echo "<br>";
            $averageArray["第１種住居地域"] = "$averageIchijyu";
            var_dump($averageArray);
            echo "<br>";
        $landPostsNijyu = LandPost::where('prefecture', "$prefecture")->where('cityplanning', '第２種住居地域')->get();
            $pricePerUnitNijyu = 0;
            $countNijyu = 0;
            $averageNijyu = 0;
            foreach($landPostsNijyu as $landPostNijyu) {
                $pricePerUnitNijyu += $landPostNijyu->priceperunit;
                $countNijyu++;
            }
            if ($countNijyu == 0) {
                $averageNijyu = 0;
            } else {
                $averageNijyu = $pricePerUnitNijyu/$countNijyu;
            }
            // TODO:後で削除
            var_dump($averageNijyu);
            echo "<br>";
            $averageArray["第２種住居地域"] = "$averageNijyu";
            var_dump($averageArray);
            echo "<br>";
        $landPostsJyunjyu= LandPost::where('prefecture', "$prefecture")->where('cityplanning', '準住居地域')->get();
            $pricePerUnitJyunjyu = 0;
            $countJyunjyu = 0;
            $averageJyunjyu = 0;
            foreach($landPostsJyunjyu as $landPostJyunjyu) {
                $pricePerUnitJyunjyu += $landPostJyunjyu->priceperunit;
                $countJyunjyu++;
            }
            if ($countJyunjyu == 0) {
                $averageJyunjyu = 0;
            } else {
                $averageJyunjyu = $pricePerUnitJyunjyu/$countJyunjyu;
            }
            // TODO:後で削除
            var_dump($averageJyunjyu);
            echo "<br>";
            $averageArray["準住居地域"] = "$averageJyunjyu";
            var_dump($averageArray);
            echo "<br>";
        $landPostsKinsyo= LandPost::where('prefecture', "$prefecture")->where('cityplanning', '近隣商業地域')->get();
            $pricePerUnitKinsyo = 0;
            $countKinsyo = 0;
            $averageKinsyo = 0;
            foreach($landPostsKinsyo as $landPostKinsyo) {
                $pricePerUnitKinsyo += $landPostKinsyo->priceperunit;
                $countKinsyo++;
            }
            if ($countKinsyo == 0) {
                $averageKinsyo = 0;
            } else {
                $averageKinsyo = $pricePerUnitKinsyo/$countKinsyo;
            }
            // TODO:後で削除
            var_dump($averageKinsyo);
            echo "<br>";
            $averageArray["近隣商業地域"] = "$averageKinsyo";
            var_dump($averageArray);
            echo "<br>";
        $landPostsSyogyo= LandPost::where('prefecture', "$prefecture")->where('cityplanning', '商業地域')->get();
            $pricePerUnitSyogyo = 0;
            $countSyogyo = 0;
            $averageSyogyo = 0;
            foreach($landPostsSyogyo as $landPostSyogyo) {
                $pricePerUnitSyogyo += $landPostSyogyo->priceperunit;
                $countSyogyo++;
            }
            if ($countSyogyo == 0) {
                $averageSyogyo = 0;
            } else {
                $averageSyogyo = $pricePerUnitSyogyo/$countSyogyo;
            }
            // TODO:後で削除
            var_dump($averageSyogyo);
            echo "<br>";
            $averageArray["商業地域"] = "$averageSyogyo";
            var_dump($averageArray);
            echo "<br>";
        $landPostsJyunko= LandPost::where('prefecture', "$prefecture")->where('cityplanning', '準工業地域')->get();
            $pricePerUnitJyunko = 0;
            $countJyunko = 0;
            $averageJyunko = 0;
            foreach($landPostsJyunko as $landPostJyunko) {
                $pricePerUnitJyunko += $landPostJyunko->priceperunit;
                $countJyunko++;
            }
            if ($countJyunko == 0) {
                $averageJyunko = 0;
            } else {
                $averageJyunko = $pricePerUnitJyunko/$countJyunko;
            }
            // TODO:後で削除
            var_dump($averageJyunko);
            echo "<br>";
            $averageArray["準工業地域"] = "$averageJyunko";
            var_dump($averageArray);
            echo "<br>";
        $landPostsKogyo= LandPost::where('prefecture', "$prefecture")->where('cityplanning', '工業地域')->get();
            $pricePerUnitKogyo = 0;
            $countKogyo = 0;
            $averageKogyo = 0;
            foreach($landPostsKogyo as $landPostKogyo) {
                $pricePerUnitKogyo += $landPostKogyo->priceperunit;
                $countKogyo++;
            }
            if ($countKogyo == 0) {
                $averageKogyo = 0;
            } else {
                $averageKogyo = $pricePerUnitKogyo/$countKogyo;
            }
            // TODO:後で削除
            var_dump($averageKogyo);
            echo "<br>";
            $averageArray["工業地域"] = "$averageKogyo";
            var_dump($averageArray);
            echo "<br>";
        $landPostsKosen= LandPost::where('prefecture', "$prefecture")->where('cityplanning', '工業専用地域')->get();
            $pricePerUnitKosen = 0;
            $countKosen = 0;
            $averageKosen = 0;
            foreach($landPostsKosen as $landPostKosen) {
                $pricePerUnitKosen += $landPostKosen->priceperunit;
                $countKosen++;
            }
            if ($countKosen == 0) {
                $averageKosen = 0;
            } else {
                $averageKosen = $pricePerUnitKosen/$countKosen;
            }
            // TODO:後で削除
            var_dump($averageKosen);
            echo "<br>";
            $averageArray["工業専用地域"] = "$averageKosen";
            var_dump($averageArray);
            echo "<br>";
        $landPostsChosei= LandPost::where('prefecture', "$prefecture")->where('cityplanning', '市街化調整区域')->get();
            $pricePerUnitChosei = 0;
            $countChosei = 0;
            $averageChosei = 0;
            foreach($landPostsChosei as $landPostChosei) {
                $pricePerUnitChosei += $landPostChosei->priceperunit;
                $countChosei++;
            }
            if ($countChosei == 0) {
                $averageChosei = 0;
            } else {
                $averageChosei = $pricePerUnitChosei/$countChosei;
            }
            // TODO:後で削除
            var_dump($averageChosei);
            echo "<br>";
            $averageArray["市街化調整区域"] = "$averageChosei";
            var_dump($averageArray);
            echo "<br>";
        $landPostsHisenbiki= LandPost::where('prefecture', "$prefecture")->where('cityplanning', '市街化区域及び市街化調整区域外の都市計画区域')->get();
            $pricePerUnitHisenbiki = 0;
            $countHisenbiki = 0;
            $averageHisenbiki = 0;
            foreach($landPostsHisenbiki as $landPostHisenbiki) {
                $pricePerUnitHisenbiki += $landPostHisenbiki->priceperunit;
                $countHisenbiki++;
            }
            if ($countHisenbiki == 0) {
                $averageHisenbiki = 0;
            } else {
                $averageHisenbiki = $pricePerUnitHisenbiki/$countHisenbiki;
            }
            // TODO:後で削除
            var_dump($averageHisenbiki);
            echo "<br>";
            $averageArray["非線引き区域"] = "$averageHisenbiki";
            var_dump($averageArray);
            echo "<br>";
        $landPostsJyuntoshi= LandPost::where('prefecture', "$prefecture")->where('cityplanning', '準都市計画区域')->get();
            $pricePerUnitJyuntoshi = 0;
            $countJyuntoshi = 0;
            $averageJyuntoshi = 0;
            foreach($landPostsJyuntoshi as $landPostJyuntoshi) {
                $pricePerUnitJyuntoshi += $landPostJyuntoshi->priceperunit;
                $countJyuntoshi++;
            }
            if ($countJyuntoshi == 0) {
                $averageJyuntoshi = 0;
            } else {
                $averageJyuntoshi = $pricePerUnitJyuntoshi/$countJyuntoshi;
            }
            // TODO:後で削除
            var_dump($averageJyuntoshi);
            echo "<br>";
            $averageArray["準都市計画区域"] = "$averageJyuntoshi";
            var_dump($averageArray);
            echo "<br>";
        $landPostsKuikigai= LandPost::where('prefecture', "$prefecture")->where('cityplanning', '都市計画区域外')->get();
            $pricePerUnitKuikigai = 0;
            $countKuikigai = 0;
            $averageKuikigai = 0;
            foreach($landPostsKuikigai as $landPostKuikigai) {
                $pricePerUnitKuikigai += $landPostKuikigai->priceperunit;
                $countKuikigai++;
            }
            if ($countKuikigai == 0) {
                $averageKuikigai = 0;
            } else {
                $averageKuikigai = $pricePerUnitKuikigai/$countKuikigai;
            }
            // TODO:後で削除
            var_dump($averageKuikigai);
            echo "<br>";
            $averageArray["都市計画区域外"] = "$averageKuikigai";
            var_dump($averageArray);
            echo "<br>";
        }
        
        return view('cityplanningbarchart',compact('averageArray'));
    }
}
