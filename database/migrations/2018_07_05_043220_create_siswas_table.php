<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->ondelete('cascade');
            $table->integer('nis');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jk');
            $table->string('agama');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('gambar');
            $table->unsignedInteger('id_kelas');
            $table->foreign('id_kelas')->references('id')->on('kelas')->ondelete('cascade');
            $table->unsignedInteger('id_jurusan');
            $table->foreign('id_jurusan')->references('id')->on('jurusans')->ondelete('cascade');
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
        Schema::dropIfExists('siswas');
    }
}
