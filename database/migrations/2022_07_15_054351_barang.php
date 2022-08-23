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
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('no action')->cascadeOnUpdate();
            $table->unsignedBigInteger('suplier_id');
            $table->foreign('suplier_id')->references('id')->on('suplier')->onDelete('no action')->cascadeOnUpdate();
            $table->string('nama_barang', 100);
            $table->integer('harga_barang');
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
        Schema::drop('barang');
    }
};
