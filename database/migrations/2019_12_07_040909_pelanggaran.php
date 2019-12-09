<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pelanggaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggaran', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->text('nama_pelanggaran');
            $table->enum('kategori',['kedisiplinan','kerapian','kerajinan']);
            $table->integer('poin');
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
        Schema::dropIfExists('pelanggaran');
    }
}