<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingRuanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_ruangan', function (Blueprint $table) {
            $table->increments('id_booking');
            $table->integer('id_user')->unsigned();
            $table->string('tanggal_pemesanan');
            $table->string('nama_ruangan');
            $table->string('jam_mulai');
            $table->string('jam_selesai');
            $table->string('deskripsi');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('booking_ruangan');
    }
}
