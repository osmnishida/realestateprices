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
        Schema::create('lands', function (Blueprint $table) {
            $table->id();
            $table->string('prefecture');
            $table->string('minicipality');
            $table->string('districtname');
            $table->integer('tradeprice');
            $table->integer('priceperunit');
            $table->integer('area');
            $table->integer('unitprice');
            $table->string('landshape');
            $table->string('direction');
            $table->string('cityplanning');
            $table->integer('coverageratio');
            $table->integer('floorarearatio');
            $table->string('region');
            $table->string('period');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lands');
    }
};
