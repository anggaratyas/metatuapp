<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected $table = 'penduduks';

    public function penduduk()
    {
        return $this->belongsToMany(Penduduk::class);
    }
}
