<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    protected $table = 'jurusans';
     protected $fillable = ['nama_jurusan'];
     public $timestamps = true;

     public function siswa()
    {
    	return $this->hasMany('App\jurusan','id_jurusan');
    }
}
