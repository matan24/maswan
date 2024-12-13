<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wannon extends Model
{
    protected $table = 'wankaryawan_non_staff';
    protected $fillable = [

        'nik_wns',
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
