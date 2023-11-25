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
        Schema::create('city_codes', function (Blueprint $table) {
            $table->id();
            $table->string('prefecturecode')->comment('都道府県コード');
            $table->string('prefecturename')->comment('都道府県名');
            $table->string('citycode')->comment('市町村コード');
            $table->string('cityname')->comment('市町村名');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('city_codes');
    }
};
