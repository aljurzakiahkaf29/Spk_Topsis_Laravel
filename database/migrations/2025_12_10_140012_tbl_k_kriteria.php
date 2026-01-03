<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblKKriteria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriteria', function (Blueprint $table) {
        $table->id();
        $table->string('kriteria');
        $table->string('bobot');
        $table->text('nilai');
        $table->enum('active', ['0', '1'])->default('1');
        $table->timestamps(); // Hapus ini jika tabel asli tidak punya created_at/updated_at
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kriteria');
    }
}
