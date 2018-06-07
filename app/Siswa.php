<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
     protected $table = 'siswas';
     protected $fillable = ['nama','nis','kelas_id'];
     public $timestamps = true;

	public function Kelas()
	{
		return $this->belongsTo('App\Kelas','kelas_id');
	}

    public function Eskul()
    {
    	return $this->hasOne('App\Eskul','siswa_id');
    }
}
