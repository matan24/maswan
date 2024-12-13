<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mas extends Model
{
    protected $table = 'mas_karyawan_staff';
    protected $fillable = [

        'nik_ms',
        'npwp', 
        'nama', 
        'lahir', 
        'ttl',
        'umur',
        'gender',
        'status_karyawan',
        'pkwt',
        'pkwtt',
        'tmk',
        'jabatan',
        'domisili',
        'pendidikan',
        'agama',
        'status_pernikahan',
        'jml_anak',
        'wp',
        'bpjs_kesehatan',
        'bpjs_kerja',
        'cv',
        'ktp'
    
    ];
}
