<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    //
    protected $table = 'donations';
    public $timestamps = false;

    public function campaign(){
    	return $this->hasOne('App\Models\Campaign');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
