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
        Schema::create('closed_barang', function (Blueprint $table) {
            $table->id();
            $table->string('preview_item');
            $table->bigInteger('price');
            $table->bigInteger('minimum_bid');
            $table->string('title');
            $table->string('foto');
            $table->string('deskrpsi');
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
        Schema::dropIfExists('closed_barang');
    }
};
