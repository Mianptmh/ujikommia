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
            $table->Integer('cash_kode');
            $table->String('pembeli_no_ktp');
            $table->Integer('motor_kode');
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
