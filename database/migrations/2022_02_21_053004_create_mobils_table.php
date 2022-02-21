<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mobil');
            $table->string('gambar');
            $table->bigInteger('id_merek')->unsigned();
            $table->foreign('id_merek')->references('id')
            ->on('mereks')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('nomor_polisi');
            $table->string('warna_mobil');
            $table->string('tahun_pembuatan');
            $table->string('status');
            $table->integer('harga_sewa');
            $table->integer('denda');
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
        Schema::dropIfExists('mobils');
    }
}
