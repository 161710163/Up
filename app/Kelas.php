<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas'; // -> meminta izin untuk mengakses table kelas
    protected $fillable = ['nama','wali_kelas']; // -> field apa saja yang boleh di isi -> fill = mengisi, able = boleh jadi fillable = boleh di isi
    public $timestamps = true; // penanggalan otomatis record kapan di isi dan di update di aktikfkan

    public function Siswa()
    {
    	return $this->hasMany('App\Siswa','kelas_id');
    }
}
