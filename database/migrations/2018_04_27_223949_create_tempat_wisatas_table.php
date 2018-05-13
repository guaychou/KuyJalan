<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempatWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempat_wisatas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kota')->unsigned();
            $table->string('nama_tempat_wisata',30);
            $table->string('telpon',20);
            $table->integer('id_kategori')->unsigned();
            $table->timestamps();
            $table->foreign('id_kota')->references('id')->on('kotas')->onDelete('cascade');
            $table->foreign('id_kategori')->references('id')->on('kategoris')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('tempat_wisatas');
    }
}
