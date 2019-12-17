<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nik', 16)->unique();
            $table->char('kk', 16);
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('status');
            $table->string('jenis_kel');
            $table->string('agama');
            $table->string('kwn');
            $table->string('propinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('alamat');
            $table->char('rt', 3);
            $table->char('rw', 3);
            $table->char('kdpos', 5);
            $table->string('skul');
            $table->string('kerja');
            $table->string('ibu');
            $table->string('ayah');
            $table->char('tlp', 14);
            $table->string('email')->unique();
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
        Schema::dropIfExists('penduduks');
    }
}
