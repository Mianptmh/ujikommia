<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeliKriditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beli_kridits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_kridit');
            $table->bigInteger('No_KTP')->unsigned();
            $table->foreign('No_KTP')->references('id')->on('beli_kridits');
            $table->bigInteger('kode_paket')->unsigned();
            $table->foreign('kode_paket')->references('id')->on('beli_kridits');
            $table->bigInteger('kode_motor')->unsigned();
            $table->foreign('kode_motor')->references('id')->on('beli_kridits');
            $table->date('kridit_tanggal');
            $table->binary('fotokopi_KTP');
            $table->binary('fotokopi_KK');
            $table->binary('fotokopi_gaji');
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
        Schema::dropIfExists('beli_kridits');
    }
}
