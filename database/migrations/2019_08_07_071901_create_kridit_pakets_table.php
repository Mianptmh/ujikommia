<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKriditPaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kridit_pakets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_paket');
            $table->bigInteger('paket_hargacash');
            $table->bigInteger('paket_uangmuka');
            $table->bigInteger('paket_jumlahcicilan');
            $table->bigInteger('paket_bunga');
            $table->bigInteger('paket_nilaicicilan');
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
        Schema::dropIfExists('kridit_pakets');
    }
}
