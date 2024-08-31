<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('land_posts', function (Blueprint $table) {
            $table->renameColumn('region','temp_region')->varchar(255)('region')->change();
            $table->renameColumn('temp_region','Region')->varchar(255)->change();
            $table->renameColumn('municipalitycode','temp_municipalityCode')->varchar(255)->change();
            $table->renameColumn('temp_municipalitycode','MunicipalityCode')->varchar(255)->change();
            $table->renameColumn('prefecture','temp_prefecture')->varchar(255)->change();
            $table->renameColumn('temp_prefecture','Prefecture')->varchar(255)->change();
            $table->renameColumn('municipality','temp_municipality')->varchar(255)->change();
            $table->renameColumn('temp_municipality','Municipality')->varchar(255)->change();
            $table->renameColumn('districtname','temp_istrictName')->varchar(255)->change();
            $table->renameColumn('temp_districtname','DistrictName')->varchar(255)->change();
            $table->renameColumn('tradeprice','temp_tradePrice')->varchar(255)->change();
            $table->renameColumn('temp_tradeprice','TradePrice')->varchar(255)->change();
            $table->renameColumn('priceperunit','temp_pricePerUnit')->varchar(255)->change();
            $table->renameColumn('temp_priceperunit','PricePerUnit')->varchar(255)->change();
            $table->renameColumn('area','temp_area')->varchar(255)->change();
            $table->renameColumn('temp_area','Area')->varchar(255)->change();
            $table->renameColumn('unitprice','temp_unitPrice')->varchar(255)->change();
            $table->renameColumn('temp_unitprice','UnitPrice')->varchar(255)->change();
            $table->renameColumn('landshape','temp_landShape')->varchar(255)->change();
            $table->renameColumn('temp_landshape','LandShape')->varchar(255)->change();
            $table->renameColumn('frontage','temp_frontage')->varchar(255)->change();
            $table->renameColumn('temp_frontage','Frontage')->varchar(255)->change();
            $table->renameColumn('purpose','temp_purpose')->varchar(255)->change();
            $table->renameColumn('temp_purpose','Purpose')->varchar(255)->change();
            $table->renameColumn('direction','temp_direction')->varchar(255)->change();
            $table->renameColumn('temp_direction','Direction')->varchar(255)->change();
            $table->renameColumn('classification','temp_classification')->varchar(255)->change();
            $table->renameColumn('temp_classification','Classification')->varchar(255)->change();
            $table->renameColumn('breadth','temp_breadth')->varchar(255)->change();
            $table->renameColumn('temp_breadth','Breadth')->varchar(255)->change();
            $table->renameColumn('cityplanning','temp_cityPlanning')->varchar(255)->change();
            $table->renameColumn('temp_cityplanning','CityPlanning')->varchar(255)->change();
            $table->renameColumn('coverageratio','temp_coverageRatio')->varchar(255)->change();
            $table->renameColumn('temp_coverageratio','CoverageRatio')->varchar(255)->change();
            $table->renameColumn('floorarearatio','temp_floofAreaRatio')->varchar(255)->change();
            $table->renameColumn('temp_floorarearatio','FloofAreaRatio')->varchar(255)->change();
            $table->renameColumn('period','temp_period')->varchar(255)->change();
            $table->renameColumn('temp_period','Period')->varchar(255)->change();
            $table->renameColumn('remarks','temp_remarks')->varchar(255)->change();
            $table->renameColumn('temp_remarks','Remarks')->varchar(255)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('land_posts', function (Blueprint $table) {
            $table->renameColumn('Region','temp_region')->varchar(255)->change();
            $table->renameColumn('temp_region','region')->varchar(255)->change();
            $table->renameColumn('MunicipalityCode','temp_municipalitycode')->varchar(255)->change();
            $table->renameColumn('temp_municipalityCode','municipalitycode')->varchar(255)->change();
            $table->renameColumn('Prefecture','temp_prefecture')->varchar(255)->change();
            $table->renameColumn('temp_prefecture','prefecture')->varchar(255)->change();
            $table->renameColumn('Municipality','temp_municipality')->varchar(255)->change();
            $table->renameColumn('temp_municipality','municipality')->varchar(255)->change();
            $table->renameColumn('DistrictName','temp_districtname')->varchar(255)->change();
            $table->renameColumn('temp_districtName','districtname')->varchar(255)->change();
            $table->renameColumn('TradePrice','temp_tradeprice')->varchar(255)->change();
            $table->renameColumn('temp_tradePrice','tradeprice')->varchar(255)->change();
            $table->renameColumn('PricePerUnit','temp_priceperunit')->varchar(255)->change();
            $table->renameColumn('temp_pricePerUnit','priceperunit')->varchar(255)->change();
            $table->renameColumn('Area','temp_area')->varchar(255)->change();
            $table->renameColumn('temp_area','area')->varchar(255)->change();
            $table->renameColumn('UnitPrice','temp_unitprice')->varchar(255)->change();
            $table->renameColumn('temp_unitPrice','unitprice')->varchar(255)->change();
            $table->renameColumn('LandShape','temp_landshape')->varchar(255)->change();
            $table->renameColumn('temp_landShape','landshape')->varchar(255)->change();
            $table->renameColumn('Frontage','temp_frontage')->varchar(255)->change();
            $table->renameColumn('temp_frontage','frontage')->varchar(255)->change();
            $table->renameColumn('Purpose','temp_purpose')->varchar(255)->change();
            $table->renameColumn('temp_purpose','purpose')->varchar(255)->change();
            $table->renameColumn('Direction','temp_direction')->varchar(255)->change();
            $table->renameColumn('temp_direction','direction')->varchar(255)->change();
            $table->renameColumn('Classification','temp_classification')->varchar(255)->change();
            $table->renameColumn('temp_classification','classification')->varchar(255)->change();
            $table->renameColumn('Breadth','temp_breadth')->varchar(255)->change();
            $table->renameColumn('temp_breadth','breadth')->varchar(255)->change();
            $table->renameColumn('CityPlanning','temp_cityplanning')->varchar(255)->change();
            $table->renameColumn('temp_cityPlanning','cityplanning')->varchar(255)->change();
            $table->renameColumn('CoverageRatio','temp_coverageratio')->varchar(255)->change();
            $table->renameColumn('temp_coverageRatio','coverageratio')->varchar(255)->change();
            $table->renameColumn('FloofAreaRatio','temp_floorarearatio')->varchar(255)->change();
            $table->renameColumn('temp_floofAreaRatio','floorarearatio')->varchar(255)->change();
            $table->renameColumn('Period','temp_period')->varchar(255)->change();
            $table->renameColumn('temp_period','period')->varchar(255)->change();
            $table->renameColumn('Remarks','temp_remarks')->varchar(255)->change();
            $table->renameColumn('temp_remarks','remarks')->varchar(255)->change();
        });
    }
};
