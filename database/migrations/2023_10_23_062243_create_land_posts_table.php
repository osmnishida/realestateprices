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
        Schema::create('land_posts', function (Blueprint $table) {
            $table->id();
            $table->string('type')->comment('取引の種類');
            $table->string('municipalitycode')->comment('市区町村コード');
            $table->string('prefecture')->comment('都道府県名');
            $table->string('municipality')->comment('市町村名');
            $table->string('districtname')->comment('地区名');
            $table->string('tradeprice')->comment('取引価格（総額）');
            $table->string('priceperunit')->comment('坪単価');
            $table->string('area')->comment('面積（㎡）');
            $table->string('unitprice')->comment('取引価格（㎡単価）');
            $table->string('landshape')->comment('土地の形状');
            $table->string('frontage')->comment('間口');
            $table->string('purpose')->comment('今後の利用目的');
            $table->string('direction')->comment('全面道路：方位');
            $table->string('classification')->comment('全面道路：種類');
            $table->string('breadth')->comment('全面道路：幅員（m）');
            $table->string('cityplanning')->comment('都市計画');
            $table->string('coverageratio')->comment('建ぺい率（％）');
            $table->string('floorarearatio')->comment('容積率（％）');
            $table->string('region')->comment('地区');
            $table->string('period')->comment('取引時点');
            $table->string('remarks')->comment('取引の事情等');
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
