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
        Schema::create('data_notas', function (Blueprint $table) {
            $table->id('KodeNota')->unique();
            $table->unsignedBigInteger('KodeTenan');
            $table->unsignedBigInteger('KodeKasir');
            $table->foreign('KodeTenan')->references('id')->on('data_tenans');
            $table->foreign('KodeKasir')->references('id')->on('data_kasirs');
            $table->date('TglNota');
            $table->integer('JumlahBelanja');
            $table->float('Diskon');
            $table->double('Total');
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
        Schema::dropIfExists('data_notas');
    }
};
