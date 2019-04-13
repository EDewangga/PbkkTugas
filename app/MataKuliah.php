<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'mata_kuliah';
    protected $guarded = [''];

    public function pengajar() {
      return $this->hasMany('App\Dosen', 'mengajar', 'id');
    }
}
