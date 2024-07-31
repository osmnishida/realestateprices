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
            $table->renameColumn('region','Region');
            $table->renameColumn('municipalitycode','MunicipalityCode');
            $table->renameColumn('prefecture','Prefecture');
            $table->renameColumn('municipality','Municipality');
            $table->renameColumn('districtname','DistrictName');
            $table->renameColumn('tradeprice','TradePrice');
            $table->renameColumn('priceperunit','PricePerUnit');
            $table->renameColumn('area','Area');
            $table->renameColumn('unitprice','UnitPrice');
            $table->renameColumn('landshape','LandShape');
            $table->renameColumn('frontage','Frontage');
            $table->renameColumn('purpose','Purpose');
            $table->renameColumn('direction','Direction');
            $table->renameColumn('classification','Classification');
            $table->renameColumn('breadth','Breadth');
            $table->renameColumn('cityplanning','CityPlanning');
            $table->renameColumn('coverageratio','CoverageRatio');
            $table->renameColumn('floorarearatio','FloofAreaRatio');
            $table->renameColumn('period','Period');
            $table->renameColumn('remarks','Remarks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('land_posts', function (Blueprint $table) {
            $table->renameColumn('Region','region');
            $table->renameColumn('MunicipalityCode','municipalitycode');
            $table->renameColumn('Prefecture','prefecture');
            $table->renameColumn('Municipality','municipality');
            $table->renameColumn('DistrictName','districtname');
            $table->renameColumn('TradePrice','tradeprice');
            $table->renameColumn('PricePerUnit','priceperunit');
            $table->renameColumn('Area','area');
            $table->renameColumn('UnitPrice','unitprice');
            $table->renameColumn('LandShape','landshape');
            $table->renameColumn('Frontage','frontage');
            $table->renameColumn('Purpose','purpose');
            $table->renameColumn('Direction','direction');
            $table->renameColumn('Classification','classification');
            $table->renameColumn('Breadth','breadth');
            $table->renameColumn('CityPlanning','cityplanning');
            $table->renameColumn('CoverageRatio','coverageratio');
            $table->renameColumn('FloofAreaRatio','floorarearatio');
            $table->renameColumn('Period','period');
            $table->renameColumn('Remarks','remarks');
        });
    }
};
