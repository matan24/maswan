<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masnon extends Model
{
    protected $table = 'mas_karyawan_nonstaff';
    protected $fillable = [

        'nik_mns',
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
