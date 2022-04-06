<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemintasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemintas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nik');
            $table->string('nama');
            $table->string('departemen_id');
            $table->foreign('departemen_id')->references('id')->on('departemens');
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
        Schema::dropIfExists('pemintas');
    }
}
