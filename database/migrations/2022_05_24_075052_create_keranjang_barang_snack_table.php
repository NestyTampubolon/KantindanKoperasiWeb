<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeranjangBarangSnackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keranjang_barang_snack', function (Blueprint $table) {
            $table->increments('id_keranjang_barang_snack');
            $table->integer('id_user')->unsigned();
            $table->integer('id_barang_snack')->unsigned();
            $table->integer('kuantitas');
            $table->integer('total');
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
            $table->foreign('id_barang_snack')->references('id_barang_snack')->on('barang_snack')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keranjang_barang_snack');
    }
}
