<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswas';
     protected $fillable = ['id_user','nis','nama','tempat_lahir','tanggal_lahir','jk','agama','alamat','no_hp','gambar','id_kelas','id_jurusan'];
     public $timestamps = true;

     public function jurusan()
	{
		return $this->belongsTo('App\jurusan','id_jurusan');
	}

	public function kelas()
	{
		return $this->belongsTo('App\kelas','id_kelas');
	}

	public function pertanyaan()
    {
    	return $this->hasMany('App\pertanyaan','id_siswa');
    }
    public function user(){
    	return $this->belongsTo('App\User','id_user');
    }
}
