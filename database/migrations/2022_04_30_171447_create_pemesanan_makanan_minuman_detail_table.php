<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananMakananMinumanDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan_makanan_minuman_detail', function (Blueprint $table) {
            $table->increments('id_pemesanan_makanan_minuman_detail');
            $table->integer('id_makanan_minuman')->unsigned();
            $table->integer('id_pemesanan')->unsigned();
            $table->integer('kuantitas');
            $table->integer('total_harga');
            $table->timestamps();
            
            $table->foreign('id_makanan_minuman')->references('id_makanan_minuman')->on('makanan_minuman')->onDelete('cascade');
            $table->foreign('id_pemesanan')->references('id_pemesanan_makanan_minuman')->on('pemesanan_makanan_minuman')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan_makanan_minuman_detail');
    }
}
