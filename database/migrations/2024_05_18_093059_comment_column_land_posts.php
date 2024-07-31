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
            $table->id();
            $table->string('Type')->comment('取引の種類');
            $table->string('MunicipalityCode')->comment('市区町村コード');
            $table->string('Prefecture')->comment('都道府県名');
            $table->string('Municipality')->comment('市町村名');
            $table->string('DistrictName')->comment('地区名');
            $table->string('TradePrice')->comment('取引価格（総額）');
            $table->string('PricePerUnit')->comment('坪単価');
            $table->string('Area')->comment('面積（㎡）');
            $table->string('UnitPrice')->comment('取引価格（㎡単価）');
            $table->string('LandShape')->comment('土地の形状');
            $table->string('Frontage')->comment('間口');
            $table->string('Purpose')->comment('今後の利用目的');
            $table->string('Direction')->comment('前面道路：方位');
            $table->string('Classification')->comment('前面道路：種類');
            $table->string('Breadth')->comment('前面道路：幅員（m）');
            $table->string('CityPlanning')->comment('都市計画');
            $table->string('CoverageRatio')->nullable()->default('未設定')->comment('建ぺい率（％）');
            $table->string('FloorAreaRatio')->comment('容積率（％）');
            $table->string('Region')->comment('地区');
            $table->string('Period')->comment('取引時点');
            $table->string('Remarks')->comment('取引の事情等');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('land_posts');
    }
};
