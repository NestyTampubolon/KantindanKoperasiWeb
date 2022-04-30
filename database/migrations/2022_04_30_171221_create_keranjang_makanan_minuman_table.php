<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeranjangMakananMinumanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keranjang_makanan_minuman', function (Blueprint $table) {
            $table->increments('id_keranjang_makanan_minuman');
            $table->integer('id_user')->unsigned();
            $table->integer('id_makanan_minuman')->unsigned();
            $table->integer('kuantitas');
            $table->integer('total');
            $table->timestamps();
            
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
            $table->foreign('id_makanan_minuman')->references('id_makanan_minuman')->on('makanan_minuman')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keranjang_makanan_minuman');
    }
}
