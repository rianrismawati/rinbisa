<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //
    protected $table = 'campaigns';
    public $timestamps = false;

   	public function donations(){
   		return $this->hasMany('App\Models\Donastion');
   	} 
}
