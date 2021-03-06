<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananBarangSnackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan_barang_snack', function (Blueprint $table) {
            $table->increments('id_pemesanan_barang_snack');
            $table->string('kode_transaksi');
            $table->date('tanggal_pemesanan_barang_snack');
            $table->integer('total_item');
            $table->integer('total_pembayaran');
            $table->string('status',20);
            $table->integer('id_user')->unsigned();
            $table->string('nama_penerima')->nullable();
            $table->string('nomor_telephone')->nullable();
            $table->string('catatan')->nullable();
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
        Schema::dropIfExists('pemesanan_barang_snack');
    }
}
