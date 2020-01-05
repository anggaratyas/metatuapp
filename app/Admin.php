<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ['nik', 'kk', 'nama_lengkap', 'tempat_lahir', 'tgl_lahir', 'alamat', 'rt', 'rw', 'avatar'];
}
