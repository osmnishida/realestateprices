<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandPost;

class PrefectureBarChartController extends Controller
{
    public function prefecturebarchart() {
        $averageArray=[];
        $landPostsHokkaido=LandPost::where('prefecture', '北海道')->get();
            $pricePerUnitHokkaido=0;
            $countHokkaido=0;
            $averageHokkaido=0;
            foreach($landPostsHokkaido as $landPostHokkaido) {
                $pricePerUnitHokkaido += $landPostHokkaido->priceperunit;
                $countHokkaido++;
            }
            $averageHokkaido = $pricePerUnitHokkaido/$countHokkaido;
            var_dump($averageHokkaido);
            echo "<br>";
            $averageArray["北海道"] = "$averageHokkaido";
        $landPostsAomoriken=LandPost::where('prefecture', '青森県')->get();
            $pricePerUnitAomoriken=0;
            $countAomoriken=0;
            $averageAomoriken=0;
            foreach($landPostsAomoriken as $landPostAomoriken) {
                $pricePerUnitAomoriken += $landPostAomoriken->priceperunit;
                $countAomoriken++;
            }
            $averageAomoriken = $pricePerUnitAomoriken/$countAomoriken;
            var_dump($averageAomoriken);
            echo "<br>";
            $averageArray["青森県"] = "$averageAomoriken";
        $landPostsIwateken=LandPost::where('prefecture', '岩手県')->get();
            $pricePerUnitIwateken=0;
            $countIwateken=0;
            $averageIwateken=0;
            foreach($landPostsIwateken as $landPostIwateken) {
                $pricePerUnitIwateken += $landPostIwateken->priceperunit;
                $countIwateken++;
            }
            $averageIwateken = $pricePerUnitIwateken/$countIwateken;
            var_dump($averageIwateken);
            echo "<br>";
            $averageArray["岩手県"] = "$averageIwateken";
        $landPostsMiyagiken=LandPost::where('prefecture', '宮城県')->get();
            $pricePerUnitMiyagiken=0;
            $countMiyagiken=0;
            $averageMiyagiken=0;
            foreach($landPostsMiyagiken as $landPostMiyagiken) {
                $pricePerUnitMiyagiken += $landPostMiyagiken->priceperunit;
                $countMiyagiken++;
            }
            $averageMiyagiken = $pricePerUnitMiyagiken/$countMiyagiken;
            var_dump($averageMiyagiken);
            echo "<br>";
            $averageArray["miyagiken"] = "$averageMiyagiken";
        $landPostsAkitaken=LandPost::where('prefecture', '秋田県')->get();
            $pricePerUnitAkitaken=0;
            $countAkitaken=0;
            $averageAkitaken=0;
            foreach($landPostsAkitaken as $landPostAkitaken) {
                $pricePerUnitAkitaken += $landPostAkitaken->priceperunit;
                $countAkitaken++;
            }
            $averageAkitaken = $pricePerUnitAkitaken/$countAkitaken;
            var_dump($averageAkitaken);
            echo "<br>";
            $averageArray["akitaken"] = "$averageAkitaken";
            var_dump($averageArray);
        $landPostsYamagataken=LandPost::where('prefecture', '山形県')->get();
            $pricePerUnitYamagataken=0;
            $countYamagataken=0;
            $averageYamagataken=0;
            foreach($landPostsYamagataken as $landPostYamagataken) {
                $pricePerUnitYamagataken += $landPostYamagataken->priceperunit;
                $countYamagataken++;
            }
            $averageyamagataken = $pricePerUnitYamagataken/$countYamagataken;
            var_dump($averageYamagataken);
            echo "<br>";
            $averageArray["yamagataken"] = "$averageyamagataken";
        $landPostsFukushimaken=LandPost::where('prefecture', '福島県')->get();
            $pricePerUnitFukushimaken=0;
            $countFukushimaken=0;
            $averageFukushimaken=0;
            foreach($landPostsFukushimaken as $landPostFukushimaken) {
                $pricePerUnitFukushimaken += $landPostFukushimaken->priceperunit;
                $countFukushimaken++;
            }
            $averageFukushimaken = $pricePerUnitFukushimaken/$countFukushimaken;
            var_dump($averageFukushimaken);
            echo "<br>";
            $averageArray["fukushimaken"] = "$averageFukushimaken";
        $landPostsIbarakiken=LandPost::where('prefecture', '茨城県')->get();
            $pricePerUnitIbarakiken=0;
            $countIbarakiken=0;
            $averageIbarakiken=0;
            foreach($landPostsIbarakiken as $landPostIbarakiken) {
                $pricePerUnitIbarakiken += $landPostIbarakiken->priceperunit;
                $countIbarakiken++;
            }
            $averageIbarakiken = $pricePerUnitIbarakiken/$countIbarakiken;
            var_dump($averageIbarakiken);
            echo "<br>";
            $averageArray["ibarakiken"] = "$averageIbarakiken";
        $landPostsTochigiken=LandPost::where('prefecture', '栃木県')->get();
            $pricePerUnitTochigiken=0;
            $countTochigiken=0;
            $averageTochigiken=0;
            foreach($landPostsTochigiken as $landPostTochigiken) {
                $pricePerUnitTochigiken += $landPostTochigiken->priceperunit;
                $countTochigiken++;
            }
            $averageTochigiken = $pricePerUnitTochigiken/$countTochigiken;
            var_dump($averageTochigiken);
            echo "<br>";
            $averageArray["tochigiken"] = "$averageTochigiken";
        $landPostsGunmaken=LandPost::where('prefecture', '群馬県')->get();
            $pricePerUnitGunmaken=0;
            $countGunmaken=0;
            $averageGunmaken=0;
            foreach($landPostsGunmaken as $landPostGunmaken) {
                $pricePerUnitGunmaken += $landPostGunmaken->priceperunit;
                $countGunmaken++;
            }
            $averageGunmaken = $pricePerUnitGunmaken/$countGunmaken;
            var_dump($averageGunmaken);
            echo "<br>";
            $averageArray["gunmaken"] = "$averageGunmaken";
        $landPostsSaitamaken=LandPost::where('prefecture', '埼玉県')->get();
            $pricePerUnitSaitamaken=0;
            $countSaitamaken=0;
            $averageSaitamaken=0;
            foreach($landPostsSaitamaken as $landPostSaitamaken) {
                $pricePerUnitSaitamaken += $landPostSaitamaken->priceperunit;
                $countSaitamaken++;
            }
            $averageSaitamaken = $pricePerUnitSaitamaken/$countSaitamaken;
            var_dump($averageSaitamaken);
            echo "<br>";
            $averageArray["saitamaken"] = "$averageSaitamaken";
        $landPostsChibaken=LandPost::where('prefecture', '千葉県')->get();
            $pricePerUnitChibaken=0;
            $countChibaken=0;
            $averageChibaken=0;
            foreach($landPostsChibaken as $landPostChibaken) {
                $pricePerUnitChibaken += $landPostChibaken->priceperunit;
                $countChibaken++;
            }
            $averageChibaken = $pricePerUnitChibaken/$countChibaken;
            var_dump($averageChibaken);
            echo "<br>";
            $averageArray["chibaken"] = "$averageChibaken";
        $landPostsTokyoto=LandPost::where('prefecture', '東京都')->get();
            $pricePerUnitTokyoto=0;
            $countTokyoto=0;
            $averageTokyoto=0;
            foreach($landPostsTokyoto as $landPostTokyoto) {
                $pricePerUnitTokyoto += $landPostTokyoto->priceperunit;
                $countTokyoto++;
            }
            $averageTokyoto = $pricePerUnitTokyoto/$countTokyoto;
            var_dump($averageTokyoto);
            echo "<br>";
            $averageArray["tokyoto"] = "$averageTokyoto";
        $landPostsKanagawaken=LandPost::where('prefecture', '神奈川県')->get();
            $pricePerUnitKanagawaken=0;
            $countKanagawaken=0;
            $averageKanagawaken=0;
            foreach($landPostsKanagawaken as $landPostKanagawaken) {
                $pricePerUnitKanagawaken += $landPostKanagawaken->priceperunit;
                $countKanagawaken++;
            }
            $averageKanagawaken = $pricePerUnitKanagawaken/$countKanagawaken;
            var_dump($averageKanagawaken);
            echo "<br>";
            $averageArray["kanagawaken"] = "$averageKanagawaken";
        $landPostsNiigataken=LandPost::where('prefecture', '新潟県')->get();
            $pricePerUnitNiigataken=0;
            $countNiigataken=0;
            $averageNiigataken=0;
            foreach($landPostsNiigataken as $landPostNiigataken) {
                $pricePerUnitNiigataken += $landPostNiigataken->priceperunit;
                $countNiigataken++;
            }
            $averageNiigataken = $pricePerUnitNiigataken/$countNiigataken;
            var_dump($averageNiigataken);
            echo "<br>";
            $averageArray["niigataken"] = "$averageNiigataken";
        $landPostsToyamaken=LandPost::where('prefecture', '富山県')->get();
            $pricePerUnitToyamaken=0;
            $countToyamaken=0;
            $averageToyamaken=0;
            foreach($landPostsToyamaken as $landPostToyamaken) {
                $pricePerUnitToyamaken += $landPostToyamaken->priceperunit;
                $countToyamaken++;
            }
            $averageToyamaken = $pricePerUnitToyamaken/$countToyamaken;
            var_dump($averageToyamaken);
            echo "<br>";
            $averageArray["toyamaken"] = "$averageToyamaken";
        $landPostsIshikawaken=LandPost::where('prefecture', '石川県')->get();
            $pricePerUnitIshikawaken=0;
            $countIshikawaken=0;
            $averageIshikawaken=0;
            foreach($landPostsIshikawaken as $landPostIshikawaken) {
                $pricePerUnitIshikawaken += $landPostIshikawaken->priceperunit;
                $countIshikawaken++;
            }
            $averageIshikawaken = $pricePerUnitIshikawaken/$countIshikawaken;
            var_dump($averageIshikawaken);
            echo "<br>";
            $averageArray["ishikawaken"] = "$averageIshikawaken";
        $landPostsFukuiken=LandPost::where('prefecture', '福井県')->get();
            $pricePerUnitFukuiken=0;
            $countFukuiken=0;
            $averageFukuiken=0;
            foreach($landPostsFukuiken as $landPostFukuiken) {
                $pricePerUnitFukuiken += $landPostFukuiken->priceperunit;
                $countFukuiken++;
            }
            $averageFukuiken = $pricePerUnitFukuiken/$countFukuiken;
            var_dump($averageFukuiken);
            echo "<br>";
            $averageArray["fukuiken"] = "$averageFukuiken";
        $landPostsYamanashiken=LandPost::where('prefecture', '山梨県')->get();
            $pricePerUnitYamanashiken=0;
            $countYamanashiken=0;
            $averageYamanashiken=0;
            foreach($landPostsYamanashiken as $landPostYamanashiken) {
                $pricePerUnitYamanashiken += $landPostYamanashiken->priceperunit;
                $countYamanashiken++;
            }
            $averageYamanashiken = $pricePerUnitYamanashiken/$countYamanashiken;
            var_dump($averageYamanashiken);
            echo "<br>";
            $averageArray["yamanashiken"] = "$averageYamanashiken";
        $landPostsNaganoken=LandPost::where('prefecture', '長野県')->get();
            $pricePerUnitNaganoken=0;
            $countNaganoken=0;
            $averageNaganoken=0;
            foreach($landPostsNaganoken as $landPostNaganoken) {
                $pricePerUnitNaganoken += $landPostNaganoken->priceperunit;
                $countNaganoken++;
            }
            $averageNaganoken = $pricePerUnitNaganoken/$countNaganoken;
            var_dump($averageNaganoken);
            echo "<br>";
            $averageArray["naganoken"] = "$averageNaganoken";
        $landPostsGifuken=LandPost::where('prefecture', '岐阜県')->get();
            $pricePerUnitGifuken=0;
            $countGifuken=0;
            $averageGifuken=0;
            foreach($landPostsGifuken as $landPostGifuken) {
                $pricePerUnitGifuken += $landPostGifuken->priceperunit;
                $countGifuken++;
            }
            $averageGifuken = $pricePerUnitGifuken/$countGifuken;
            var_dump($averageGifuken);
            echo "<br>";
            $averageArray["gifuken"] = "$averageGifuken";
        $landPostsShizuokaken=LandPost::where('prefecture', '静岡県')->get();
            $pricePerUnitShizuokaken=0;
            $countShizuokaken=0;
            $averageShizuokaken=0;
            foreach($landPostsShizuokaken as $landPostShizuokaken) {
                $pricePerUnitShizuokaken += $landPostShizuokaken->priceperunit;
                $countShizuokaken++;
            }
            $averageShizuokaken = $pricePerUnitShizuokaken/$countShizuokaken;
            var_dump($averageShizuokaken);
            echo "<br>";
            $averageArray["shizuokaken"] = "$averageShizuokaken";
        $landPostsAichiken=LandPost::where('prefecture', '愛知県')->get();
            $pricePerUnitAichiken=0;
            $countAichiken=0;
            $averageAichiken=0;
            foreach($landPostsAichiken as $landPostAichiken) {
                $pricePerUnitAichiken += $landPostAichiken->priceperunit;
                $countAichiken++;
            }
            $averageAichiken = $pricePerUnitAichiken/$countAichiken;
            var_dump($averageAichiken);
            echo "<br>";
            $averageArray["aichiken"] = "$averageAichiken";
        $landPostsMieken=LandPost::where('prefecture', '三重県')->get();
            $pricePerUnitMieken=0;
            $countMieken=0;
            $averageMieken=0;
            foreach($landPostsMieken as $landPostMieken) {
                $pricePerUnitMieken += $landPostMieken->priceperunit;
                $countMieken++;
            }
            $averageMieken = $pricePerUnitMieken/$countMieken;
            var_dump($averageMieken);
            echo "<br>";
            $averageArray["mieken"] = "$averageMieken";
        $landPostsShigaken=LandPost::where('prefecture', '滋賀県')->get();
            $pricePerUnitShigaken=0;
            $countShigaken=0;
            $averageShigaken=0;
            foreach($landPostsShigaken as $landPostShigaken) {
                $pricePerUnitShigaken += $landPostShigaken->priceperunit;
                $countShigaken++;
            }
            $averageShigaken = $pricePerUnitShigaken/$countShigaken;
            var_dump($averageShigaken);
            echo "<br>";
            $averageArray["shigaken"] = "$averageShigaken";
        $landPostsKyotofu=LandPost::where('prefecture', '京都府')->get();
            $pricePerUnitKyotofu=0;
            $countKyotofu=0;
            $averageKyotofu=0;
            foreach($landPostsKyotofu as $landPostKyotofu) {
                $pricePerUnitKyotofu += $landPostKyotofu->priceperunit;
                $countKyotofu++;
            }
            $averageKyotofu = $pricePerUnitKyotofu/$countKyotofu;
            var_dump($averageKyotofu);
            echo "<br>";
            $averageArray["kyotofu"] = "$averageKyotofu";
        $landPostsOsakafu=LandPost::where('prefecture', '大阪府')->get();
            $pricePerUnitOsakafu=0;
            $countOsakafu=0;
            $averageOsakafu=0;
            foreach($landPostsOsakafu as $landPostOsakafu) {
                $pricePerUnitOsakafu += $landPostOsakafu->priceperunit;
                $countOsakafu++;
            }
            $averageOsakafu = $pricePerUnitOsakafu/$countOsakafu;
            var_dump($averageOsakafu);
            echo "<br>";
            $averageArray["osakafu"] = "$averageOsakafu";
        $landPostsHyogoken=LandPost::where('prefecture', '兵庫県')->get();
            $pricePerUnitHyogoken=0;
            $countHyogoken=0;
            $averageHyogoken=0;
            foreach($landPostsHyogoken as $landPostHyogoken) {
                $pricePerUnitHyogoken += $landPostHyogoken->priceperunit;
                $countHyogoken++;
            }
            $averageHyogoken = $pricePerUnitHyogoken/$countHyogoken;
            var_dump($averageHyogoken);
            echo "<br>";
            $averageArray["hyogoken"] = "$averageHyogoken";
        $landPostsNaraken=LandPost::where('prefecture', '奈良県')->get();
            $pricePerUnitNaraken=0;
            $countNaraken=0;
            $averageNaraken=0;
            foreach($landPostsNaraken as $landPostNaraken) {
                $pricePerUnitNaraken += $landPostNaraken->priceperunit;
                $countNaraken++;
            }
            $averageNaraken = $pricePerUnitNaraken/$countNaraken;
            var_dump($averageNaraken);
            echo "<br>";
            $averageArray["naraken"] = "$averageNaraken";
        $landPostsWakayamaken=LandPost::where('prefecture', '和歌山県')->get();
            $pricePerUnitWakayamaken=0;
            $countWakayamaken=0;
            $averageWakayamaken=0;
            foreach($landPostsWakayamaken as $landPostWakayamaken) {
                $pricePerUnitWakayamaken += $landPostWakayamaken->priceperunit;
                $countWakayamaken++;
            }
            $averageWakayamaken = $pricePerUnitWakayamaken/$countWakayamaken;
            var_dump($averageWakayamaken);
            echo "<br>";
            $averageArray["Wakayamaken"] = "$averageWakayamaken";
        $landPostsTottoriken=LandPost::where('prefecture', '鳥取県')->get();
            $pricePerUnitTottoriken=0;
            $countTottoriken=0;
            $averageTottoriken=0;
            foreach($landPostsTottoriken as $landPostTottoriken) {
                $pricePerUnitTottoriken += $landPostTottoriken->priceperunit;
                $countTottoriken++;
            }
            $averageTottoriken = $pricePerUnitTottoriken/$countTottoriken;
            var_dump($averageTottoriken);
            echo "<br>";
            $averageArray["tottoriken"] = "$averageTottoriken";
        $landPostsShimaneken=LandPost::where('prefecture', '島根県')->get();
            $pricePerUnitShimaneken=0;
            $countShimaneken=0;
            $averageShimaneken=0;
            foreach($landPostsShimaneken as $landPostShimaneken) {
                $pricePerUnitShimaneken += $landPostShimaneken->priceperunit;
                $countShimaneken++;
            }
            $averageShimaneken = $pricePerUnitShimaneken/$countShimaneken;
            var_dump($averageShimaneken);
            echo "<br>";
            $averageArray["shimaneken"] = "$averageShimaneken";
        $landPostsOkayamaken=LandPost::where('prefecture', '岡山県')->get();
            $pricePerUnitOkayamaken=0;
            $countOkayamaken=0;
            $averageOkayamaken=0;
            foreach($landPostsOkayamaken as $landPostOkayamaken) {
                $pricePerUnitOkayamaken += $landPostOkayamaken->priceperunit;
                $countOkayamaken++;
            }
            $averageOkayamaken = $pricePerUnitOkayamaken/$countOkayamaken;
            var_dump($averageOkayamaken);
            echo "<br>";
            $averageArray["okayamaken"] = "$averageOkayamaken";
        $landPostsHiroshimaken=LandPost::where('prefecture', '広島県')->get();
            $pricePerUnitHiroshimaken=0;
            $countHiroshimaken=0;
            $averageHiroshimaken=0;
            foreach($landPostsHiroshimaken as $landPostHiroshimaken) {
                $pricePerUnitHiroshimaken += $landPostHiroshimaken->priceperunit;
                $countHiroshimaken++;
            }
            $averageHiroshimaken = $pricePerUnitHiroshimaken/$countHiroshimaken;
            var_dump($averageHiroshimaken);
            echo "<br>";
            $averageArray["hiroshimaken"] = "$averageHiroshimaken";
        $landPostsYamaguchiken=LandPost::where('prefecture', '山口県')->get();
            $pricePerUnitYamaguchiken=0;
            $countYamaguchiken=0;
            $averageYamaguchiken=0;
            foreach($landPostsYamaguchiken as $landPostYamaguchiken) {
                $pricePerUnitYamaguchiken += $landPostYamaguchiken->priceperunit;
                $countYamaguchiken++;
            }
            $averageYamaguchiken = $pricePerUnitYamaguchiken/$countYamaguchiken;
            var_dump($averageYamaguchiken);
            echo "<br>";
            $averageArray["yamaguchiken"] = "$averageYamaguchiken";
        $landPostsTokushimaken=LandPost::where('prefecture', '徳島県')->get();
            $pricePerUnitTokushimaken=0;
            $countTokushimaken=0;
            $averageTokushimaken=0;
            foreach($landPostsTokushimaken as $landPostTokushimaken) {
                $pricePerUnitTokushimaken += $landPostTokushimaken->priceperunit;
                $countTokushimaken++;
            }
            $averageTokushimaken = $pricePerUnitTokushimaken/$countTokushimaken;
            var_dump($averageTokushimaken);
            echo "<br>";
            $averageArray["tokushimaken"] = "$averageTokushimaken";
        $landPostsKagawaken=LandPost::where('prefecture', '香川県')->get();
            $pricePerUnitKagawaken=0;
            $countKagawaken=0;
            $averageKagawaken=0;
            foreach($landPostsKagawaken as $landPostKagawaken) {
                $pricePerUnitKagawaken += $landPostKagawaken->priceperunit;
                $countKagawaken++;
            }
            $averageKagawaken = $pricePerUnitKagawaken/$countKagawaken;
            var_dump($averageKagawaken);
            echo "<br>";
            $averageArray["kagawaken"] = "$averageKagawaken";
        $landPostsEhimeken=LandPost::where('prefecture', '愛媛県')->get();
            $pricePerUnitEhimeken=0;
            $countEhimeken=0;
            $averageEhimeken=0;
            foreach($landPostsEhimeken as $landPostEhimeken) {
                $pricePerUnitEhimeken += $landPostEhimeken->priceperunit;
                $countEhimeken++;
            }
            $averageEhimeken = $pricePerUnitEhimeken/$countEhimeken;
            var_dump($averageEhimeken);
            echo "<br>";
            $averageArray["ehimeken"] = "$averageEhimeken";
        $landPostsKochiken=LandPost::where('prefecture', '高知県')->get();
            $pricePerUnitKochiken=0;
            $countKochiken=0;
            $averageKochiken=0;
            foreach($landPostsKochiken as $landPostKochiken) {
                $pricePerUnitKochiken += $landPostKochiken->priceperunit;
                $countKochiken++;
            }
            $averageKochiken = $pricePerUnitKochiken/$countKochiken;
            var_dump($averageKochiken);
            echo "<br>";
            $averageArray["kochiken"] = "$averageKochiken";
        $landPostsFukuokaken=LandPost::where('prefecture', '福岡県')->get();
            $pricePerUnitFukuokaken=0;
            $countFukuokaken=0;
            $averageFukuokaken=0;
            foreach($landPostsFukuokaken as $landPostFukuokaken) {
                $pricePerUnitFukuokaken += $landPostFukuokaken->priceperunit;
                $countFukuokaken++;
            }
            $averageFukuokaken = $pricePerUnitFukuokaken/$countFukuokaken;
            var_dump($averageFukuokaken);
            echo "<br>";
            $averageArray["fukuokaken"] = "$averageFukuokaken";
        $landPostsSagaken=LandPost::where('prefecture', '佐賀県')->get();
            $pricePerUnitSagaken=0;
            $countSagaken=0;
            $averageSagaken=0;
            foreach($landPostsSagaken as $landPostSagaken) {
                $pricePerUnitSagaken += $landPostSagaken->priceperunit;
                $countSagaken++;
            }
            $averageSagaken = $pricePerUnitSagaken/$countSagaken;
            var_dump($averageSagaken);
            echo "<br>";
            $averageArray["sagaken"] = "$averageSagaken";
        $landPostsNagasakiken=LandPost::where('prefecture', '長崎県')->get();
            $pricePerUnitNagasakiken=0;
            $countNagasakiken=0;
            $averageNagasakiken=0;
            foreach($landPostsNagasakiken as $landPostNagasakiken) {
                $pricePerUnitNagasakiken += $landPostNagasakiken->priceperunit;
                $countNagasakiken++;
            }
            $averageNagasakiken = $pricePerUnitNagasakiken/$countNagasakiken;
            var_dump($averageNagasakiken);
            echo "<br>";
            $averageArray["nagasakiken"] = "$averageNagasakiken";
        $landPostsKumamotoken=LandPost::where('prefecture', '熊本県')->get();
            $pricePerUnitKumamotoken=0;
            $countKumamotoken=0;
            $averageKumamotoken=0;
            foreach($landPostsKumamotoken as $landPostKumamotoken) {
                $pricePerUnitKumamotoken += $landPostKumamotoken->priceperunit;
                $countKumamotoken++;
            }
            $averageKumamotoken = $pricePerUnitKumamotoken/$countKumamotoken;
            var_dump($averageKumamotoken);
            echo "<br>";
            $averageArray["kumamotoken"] = "$averageKumamotoken";
        $landPostsOitaken=LandPost::where('prefecture', '大分県')->get();
            $pricePerUnitOitaken=0;
            $countOitaken=0;
            $averageOitaken=0;
            foreach($landPostsOitaken as $landPostOitaken) {
                $pricePerUnitOitaken += $landPostOitaken->priceperunit;
                $countOitaken++;
            }
            $averageOitaken = $pricePerUnitOitaken/$countOitaken;
            var_dump($averageOitaken);
            echo "<br>";
            $averageArray["oitaken"] = "$averageOitaken";
        $landPostsMiyazakiken=LandPost::where('prefecture', '宮崎県')->get();
            $pricePerUnitMiyazakiken=0;
            $countMiyazakiken=0;
            $averageMiyazakiken=0;
            foreach($landPostsMiyazakiken as $landPostMiyazakiken) {
                $pricePerUnitMiyazakiken += $landPostMiyazakiken->priceperunit;
                $countMiyazakiken++;
            }
            $averageMiyazakiken = $pricePerUnitMiyazakiken/$countMiyazakiken;
            var_dump($averageMiyazakiken);
            echo "<br>";
            $averageArray["miyazakiken"] = "$averageMiyazakiken";
        $landPostsKagoshimaken=LandPost::where('prefecture', '鹿児島県')->get();
            $pricePerUnitKagoshimaken=0;
            $countKagoshimaken=0;
            $averageKagoshimaken=0;
            foreach($landPostsKagoshimaken as $landPostKagoshimaken) {
                $pricePerUnitKagoshimaken += $landPostKagoshimaken->priceperunit;
                $countKagoshimaken++;
            }
            $averageKagoshimaken = $pricePerUnitKagoshimaken/$countKagoshimaken;
            var_dump($averageKagoshimaken);
            echo "<br>";
            $averageArray["kagoshimaken"] = "$averageKagoshimaken";
        $landPostsOkinawaken=LandPost::where('prefecture', '沖縄県')->get();
            $pricePerUnitOkinawaken=0;
            $countOkinawaken=0;
            $averageOkinawaken=0;
            foreach($landPostsOkinawaken as $landPostOkinawaken) {
                $pricePerUnitOkinawaken += $landPostOkinawaken->priceperunit;
                $countOkinawaken++;
            }
            $averageOkinawaken = $pricePerUnitOkinawaken/$countOkinawaken;
            var_dump($averageOkinawaken);
            echo "<br>";
            $averageArray["okinawaken"] = "$averageOkinawaken";


        // var_dump($landPostsGunmaken);
        // dd($averageArray);
        return view('prefecturebarchart',compact('averageArray'));
    }
}
