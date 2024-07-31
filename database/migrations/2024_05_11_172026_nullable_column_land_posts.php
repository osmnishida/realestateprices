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
            $table->string('PriceCategory')->nullable()->change();
            $table->string('Type')->nullable()->change();
            $table->string('MunicipalityCode')->nullable()->change();
            $table->string('Prefecture')->nullable()->change();
            $table->string('Municipality')->nullable()->change();
            $table->string('Districtname')->nullable()->change();
            $table->string('TradePrice')->nullable()->change();
            $table->string('PricePerUnit')->nullable()->change();
            $table->string('Area')->nullable()->change();
            $table->string('UnitPrice')->nullable()->change();
            $table->string('LandShape')->nullable()->change();
            $table->string('Frontage')->nullable()->change();
            $table->string('Purpose')->nullable()->change();
            $table->string('Direction')->nullable()->change();
            $table->string('Classification')->nullable()->change();
            $table->string('Breadth')->nullable()->change();
            $table->string('CityPlanning')->nullable()->change();
            $table->string('CoverageRatio')->nullable()->change();
            $table->string('FloorAreaRatio')->nullable()->change();
            $table->string('Region')->nullable()->change();
            $table->string('Period')->nullable()->change()->comment('取引時点');
            $table->string('Remarks')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('land_posts', function (Blueprint $table) {
            $table->string('PriceCategory')->nullable(false)->change();
            $table->string('Type')->nullable()->change(false);
            $table->string('MunicipalityCode')->nullable(false)->change();
            $table->string('Prefecture')->nullable(false)->change();
            $table->string('Municipality')->nullable(false)->change();
            $table->string('Districtname')->nullable(false)->change();
            $table->string('TradePrice')->nullable(false)->change();
            $table->string('PricePerUnit')->nullable(false)->change();
            $table->string('Area')->nullable(false)->change();
            $table->string('UnitPrice')->nullable(false)->change();
            $table->string('LandShape')->nullable(false)->change();
            $table->string('Frontage')->nullable(false)->change();
            $table->string('Purpose')->nullable(false)->change();
            $table->string('Direction')->nullable(false)->change();
            $table->string('Classification')->nullable(false)->change();
            $table->string('Breadth')->nullable(false)->change();
            $table->string('CityPlanning')->nullable(false)->change();
            $table->string('CoverageRatio')->nullable(false)->change();
            $table->string('FloorAreaRatio')->nullable(false)->change();
            $table->string('Region')->nullable(false)->change();
            $table->string('Period')->nullable(false)->change()->comment('取引時点');
            $table->string('Remarks')->nullable(false)->change();
        });
    }
};
