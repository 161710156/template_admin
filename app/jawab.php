<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jawab extends Model
{
    protected $table = 'jawabs';
    protected $fillable = ['jawaban','id_pertanyaan'];
    public $timestamps = true;

    public function pertanyaan()
	{
		return $this->belongsTo('App\pertanyaan','id_pertanyaan');
	}
}
