<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeliCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beli_cases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('cash_kode');
            $table->bigInteger('pembeli_no_ktp')->unsigned();
            $table->foreign('pembeli_no_ktp')->references('id')->on('beli_cases');
            $table->bigInteger('motor_kode')->unsigned();
            $table->foreign('motor_kode')->references('id')->on('beli_cases');
            $table->Date('cash_tanggal');
            $table->Double('cash_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beli_cases');
    }
}
