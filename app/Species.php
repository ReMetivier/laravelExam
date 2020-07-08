<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
  public static function getAll(){
    return Species::all();
  }

  public static function getOne($request){
    return Species::find($request->id);
  }

  public function species()
  {
    return $this->belongsToMany('App\Species');
  }
}
