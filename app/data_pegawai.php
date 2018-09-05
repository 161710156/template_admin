<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_pegawai extends Model
{
    protected $table = 'data_pegawais';
    protected $fillable = ['nama','nipd','gambar'];
    public $timestamps = true;

    public function user(){
    	return $this->belongsTo('App\User','id_user');
    }
}
