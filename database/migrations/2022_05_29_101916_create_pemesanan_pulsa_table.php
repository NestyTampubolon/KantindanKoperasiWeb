<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananPulsaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan_pulsa', function (Blueprint $table) {
            $table->increments('id_pemesanan_pulsa');
            $table->string('kode_transaksi');
            $table->date('tanggal_pemesanan');
            $table->string('status',20);
            $table->integer('id_pulsa');
            $table->integer('id_user')->unsigned();
            $table->string('nomor_telephone')->nullable();
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
        Schema::dropIfExists('pemesanan_pulsa');
    }
}
