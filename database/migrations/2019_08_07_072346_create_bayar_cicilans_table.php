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
            $table->unsignedBigInteger('kridit_kode');
            $table->foreign('kridit_kode')->references('id')->on('beli_kridits')->ondelete('cascade');
            $table->date('cicilan_tanggal');
            $table->Integer('jumlah_cicilan');
            $table->Integer('cicilan_ke');
            $table->Integer('cicilan_sisa_ke');
            $table->Integer('cicilan_sisa_harga');
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
