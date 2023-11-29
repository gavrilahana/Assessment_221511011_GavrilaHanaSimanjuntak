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
        Schema::create('data_barang_notas', function (Blueprint $table) {
            $table->id('KodaNota');
            $table->id('KodaBarang');
            $table->id('JumlahBarang');
            $table->id('HargaSatuan');
            $table->id('Jumlah');
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
        Schema::dropIfExists('data_barang_notas');
    }
};
