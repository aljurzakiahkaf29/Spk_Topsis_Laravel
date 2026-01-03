<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblKKostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_k_kost', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kost');
            $table->text('alamat');
            $table->string('fasilitas_cap');
            $table->integer('fasilitas_angka');
            $table->string('harga_cap');
            $table->integer('harga_angka');
            $table->string('keamanan_cap');
            $table->integer('keamanan_angka');
            $table->string('kenyamanan_cap');
            $table->integer('kenyamanan_angka');
            $table->string('ukuran_cap');
            $table->integer('ukuran_angka');
            $table->string('jarak_cap');
            $table->integer('jarak_angka');
            $table->string('kebersihan_cap');
            $table->integer('kebersihan_angka');
            $table->string('tempat_cap');
            $table->integer('tempat_angka');
            $table->string('ordinal');
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
        Schema::dropIfExists('tbl_k_kost');
    }
}
