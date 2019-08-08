<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBayarCicilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayar_cicilans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cicilan_kode');
            $table->bigInteger('kridit_kode')->unsigned();
            $table->foreign('kridit_kode')->references('id')->on('bayar_cicilans');
            $table->date('tanggal_cicilan');
            $table->bigInteger('jumlah_cicilan');
            $table->bigInteger('cicilan_ke');
            $table->bigInteger('cicilan_sisake');
            $table->bigInteger('cicilan_sisaharga');
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
        Schema::dropIfExists('bayar_cicilans');
    }
}
