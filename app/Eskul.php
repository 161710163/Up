<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    protected $table = 'eskuls';
    protected $fillable = ['nama','siswa_id'];
    public $timestamps = true;

    public function Siswa()
	{
		return $this->belongsTo('App\Siswa','siswa_id');
	}
}
