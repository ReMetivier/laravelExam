<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
  public static function getAll(){
    return Animal::all();
  }

  public static function getOne($request){
    $animal = Animal::find($request->id);
    return $animal;
  }

  public static function addOne($request){
    $animal = new Animal;
    $animal->name = $request->name;
    $animal->age = $request->age;
    $animal->description = $request->description;
    $animal->genre = $request->genre;
    $animal->weight = $request->weight;
    $animal->save();
    foreach ($request->species as $raceId) {
        $animal->species()->attach($raceId);
    }
    return;
  }

  public static function destroy($request){
    $animal = Animal::find($request->id);
    $animal->species()->detach();
    $animal->delete();
    return redirect('/listing');
  }

  public static function updateOne($request){
    $animal = Animal::find($request->id);
    $animal->name = $request->name;
    $animal->age = $request->age;
    $animal->description = $request->description;
    $animal->genre = $request->sexe;
    $animal->weight = $request->weight;
    $animal->species()->detach();
    $animal->species()->attach($request->species_id);
    $animal->save();
    return;
  }

  public function species()
  {
      return $this->belongsToMany('App\Species');
  }
}
