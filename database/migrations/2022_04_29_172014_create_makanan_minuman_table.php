<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakananMinumanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makanan_minuman', function (Blueprint $table) {
            $table->increments('id_makanan_minuman');
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
        Schema::dropIfExists('makanan_minuman');
    }
}
