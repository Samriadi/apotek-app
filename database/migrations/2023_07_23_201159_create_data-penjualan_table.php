<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data-penjualan', function (Blueprint $table) {
            $table->increments('id_penjualan');
            $table->date('tanggal_penjualan');
            $table->string('nama_obat');
            $table->integer('jumlah_penjualan');
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
        Schema::dropIfExists('data-penjualan');
    }
};
