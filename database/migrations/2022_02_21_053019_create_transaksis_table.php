<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pelanggan')->unsigned();
            $table->foreign('id_pelanggan')->references('id')
            ->on('pelanggans')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->bigInteger('id_mobil')->unsigned();
            $table->foreign('id_mobil')->references('id')
            ->on('mobils')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->bigInteger('id_sopir')->unsigned();
            $table->foreign('id_sopir')->references('id')
            ->on('sopirs')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->string('nota');
            $table->date('tanggal_sewa');
            $table->date('tanggal_kembali');
            $table->date('tanggal_dikembalikan');
            $table->integer('total_bayar');
            $table->string('status_sewa');
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
        Schema::dropIfExists('transaksis');
    }
}
