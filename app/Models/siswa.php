<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
    protected $table = 'siswas';

    protected $fillable = [
        'nisn',
        'nama',
        'jenis_kelamin',
        'tahun_masuk',
    ];
}
