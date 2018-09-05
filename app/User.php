<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function datapegawai(){
        return $this->hasOne('App\data_pegawai','id_user');
    }
    public function siswa(){
        return $this->hasOne('App\siswa','id_user');
    }
    public function pertanyaan(){
        return $this->hasOne('App\pertanyaan','id_user');
    }
}
