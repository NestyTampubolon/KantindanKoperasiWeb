<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangSnackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_snack', function (Blueprint $table) {
            $table->increments('id_barang_snack');
            $table->string('nama',200);
            $table->integer('harga');
            $table->string('kategori',200);
            $table->integer('stok');
            $table->string('gambar',200)->default('logo.png');
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
        Schema::dropIfExists('barang_snack');
    }
}
