<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jakett extends Model
{
	protected $fillable =['foto','harga'];
    public function bahanjakets(){
    	return $this->belongsTo('App\bahanjaket');
    }
}
