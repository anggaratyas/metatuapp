<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationToClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('id_pel')->index()->nullable();
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->date('tgl_daftar')->nullable();
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
        Schema::table('clients', function (Blueprint $table) {
            //
        });
    }
}
