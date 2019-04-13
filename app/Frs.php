<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frs extends Model
{
	protected $table = 'frs';
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
