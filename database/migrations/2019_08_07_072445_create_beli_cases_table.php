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
            $table->unsignedBigInteger('pembeli_KTP');
            $table->foreign('pembeli_KTP')->references('id')->on('pembelis')->ondelete('cascade');
            $table->unsignedBigInteger('motor_kode');
            $table->foreign('motor_kode')->references('id')->on('motors')->ondelete('cascade');
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
