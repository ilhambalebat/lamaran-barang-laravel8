<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaans', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("peminta_id");
            $table->dateTime("tanggal_permintaan");
            $table->enum('status', ['belum diproses', 'diterima', 'ditolak','dibatalkan'])->default('belum diproses');
            $table->string("keterangan")->default("-");
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
        Schema::dropIfExists('permintaans');
    }
}
