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
            $table->renameColumn('region','temp_regipon');
            $table->renameColumn('temp_region','Regipon');
            $table->renameColumn('municipalitycode','temp_municipalityCode');
            $table->renameColumn('temp_municipalitycode','MunicipalityCode');
            $table->renameColumn('prefecture','temp_prefecture');
            $table->renameColumn('temp_prefecture','Prefecture');
            $table->renameColumn('municipality','temp_municipality');
            $table->renameColumn('temp_municipality','Municipality');
            $table->renameColumn('districtname','temp_istrictName');
            $table->renameColumn('temp_districtname','DistrictName');
            $table->renameColumn('tradeprice','temp_tradePrice');
            $table->renameColumn('temp_tradeprice','TradePrice');
            $table->renameColumn('priceperunit','temp_pricePerUnit');
            $table->renameColumn('temp_priceperunit','PricePerUnit');
            $table->renameColumn('area','temp_area');
            $table->renameColumn('temp_area','Area');
            $table->renameColumn('unitprice','temp_unitPrice');
            $table->renameColumn('temp_unitprice','UnitPrice');
            $table->renameColumn('landshape','temp_landShape');
            $table->renameColumn('temp_landshape','LandShape');
            $table->renameColumn('frontage','temp_frontage');
            $table->renameColumn('temp_frontage','Frontage');
            $table->renameColumn('purpose','temp_purpose');
            $table->renameColumn('temp_purpose','Purpose');
            $table->renameColumn('direction','temp_direction');
            $table->renameColumn('temp_direction','Direction');
            $table->renameColumn('classification','temp_classification');
            $table->renameColumn('temp_classification','Classification');
            $table->renameColumn('breadth','temp_breadth');
            $table->renameColumn('temp_breadth','Breadth');
            $table->renameColumn('cityplanning','temp_cityPlanning');
            $table->renameColumn('temp_cityplanning','CityPlanning');
            $table->renameColumn('coverageratio','temp_coverageRatio');
            $table->renameColumn('temp_coverageratio','CoverageRatio');
            $table->renameColumn('floorarearatio','temp_floofAreaRatio');
            $table->renameColumn('temp_floorarearatio','FloofAreaRatio');
            $table->renameColumn('period','temp_period');
            $table->renameColumn('temp_period','Period');
            $table->renameColumn('remarks','temp_remarks');
            $table->renameColumn('temp_remarks','Remarks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('land_posts', function (Blueprint $table) {
            $table->renameColumn('Region','temp_region');
            $table->renameColumn('temp_region','region');
            $table->renameColumn('MunicipalityCode','temp_municipalitycode');
            $table->renameColumn('temp_municipalityCode','municipalitycode');
            $table->renameColumn('Prefecture','temp_prefecture');
            $table->renameColumn('temp_prefecture','prefecture');
            $table->renameColumn('Municipality','temp_municipality');
            $table->renameColumn('temp_municipality','municipality');
            $table->renameColumn('DistrictName','temp_districtname');
            $table->renameColumn('temp_districtName','districtname');
            $table->renameColumn('TradePrice','temp_tradeprice');
            $table->renameColumn('temp_tradePrice','tradeprice');
            $table->renameColumn('PricePerUnit','temp_priceperunit');
            $table->renameColumn('temp_pricePerUnit','priceperunit');
            $table->renameColumn('Area','temp_area');
            $table->renameColumn('temp_area','area');
            $table->renameColumn('UnitPrice','temp_unitprice');
            $table->renameColumn('temp_unitPrice','unitprice');
            $table->renameColumn('LandShape','temp_landshape');
            $table->renameColumn('temp_landShape','landshape');
            $table->renameColumn('Frontage','temp_frontage');
            $table->renameColumn('temp_frontage','frontage');
            $table->renameColumn('Purpose','temp_purpose');
            $table->renameColumn('temp_purpose','purpose');
            $table->renameColumn('Direction','temp_direction');
            $table->renameColumn('temp_direction','direction');
            $table->renameColumn('Classification','temp_classification');
            $table->renameColumn('temp_classification','classification');
            $table->renameColumn('Breadth','temp_breadth');
            $table->renameColumn('temp_breadth','breadth');
            $table->renameColumn('CityPlanning','temp_cityplanning');
            $table->renameColumn('temp_cityPlanning','cityplanning');
            $table->renameColumn('CoverageRatio','temp_coverageratio');
            $table->renameColumn('temp_coverageRatio','coverageratio');
            $table->renameColumn('FloofAreaRatio','temp_floorarearatio');
            $table->renameColumn('temp_floofAreaRatio','floorarearatio');
            $table->renameColumn('Period','temp_period');
            $table->renameColumn('temp_period','period');
            $table->renameColumn('Remarks','temp_remarks');
            $table->renameColumn('temp_remarks','remarks');
        });
    }
};
