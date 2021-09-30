<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_kategori');
            $table->string('nama');
            $table->string('deskripsi');
            $table->double('harga');
            $table->string('lokasi');
            $table->string('nomer_telp');
            $table->double('rating');
            $table->enum('status',['Diterima','Proses','Ditolak']);
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
        Schema::dropIfExists('produks');
    }
}
