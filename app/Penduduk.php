<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penduduk extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nik', 
        'kk', 
        'nama_lengkap', 
        'tempat_lahir', 
        'tgl_lahir', 
        'alamat', 
        'rt', 
        'rw', 
        'avatar'
    ];

    public function admin()
    {
        return $this->belongsToMany(Admin::class);
    }
    public function dashboard()
    {
        return $this->belongsToMany(Dashboard::class);
    }
}
