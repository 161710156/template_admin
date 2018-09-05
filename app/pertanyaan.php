<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pertanyaan extends Model
{
    protected $table = 'pertanyaans';
    protected $fillable = ['id_user','id_kelas_siswa','id_jurusan_siswa','pertanyaan','tanggal'];
    public $timestamps = true;

     public function user(){
        return $this->belongsTo('App\User','id_user');
    }

	public function jawab()
    {
    	return $this->hasMany('App\pertanyaan','id_pertanyaan');
    }


}
