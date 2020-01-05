<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('sk');
            $table->string('jabatan');
            $table->bigInteger('penduduk_id')->unsigned();
            $table->foreign('penduduk_id')->references('id')->on('penduduks');
            $table->softDeletes();
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
        Schema::dropIfExists('pems');
    }
}
