<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slide extends Model
{
    protected $table = 'products';// ten table trong database
    protected $fillable = ['link','image'];
    public $timestamps = True; //thiet lap
    //public function product(){
    	//return $this->hasMany('App\product','id_type','id');// thiet lap quan he
    }
}
