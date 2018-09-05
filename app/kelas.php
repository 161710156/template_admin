<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table = 'kelas';
     protected $fillable = ['nama_kelas'];
     public $timestamps = true;

     public function siswa()
    {
    	return $this->hasMany('App\kelas','id_kelas');
    }
}
