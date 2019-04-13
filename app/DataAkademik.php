<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataAkademik extends Model
{
	protected $table = 'data_akademik';
	protected $guarded = [''];

	public function dosen()
	{
			return $this->belongsTo('App\User', 'id_dosen');
	}

	public function matkul()
	{
			return $this->belongsTo('App\MataKuliah', 'id_matkul');
	}
	
}
