<?php

namespace App\Http\Controllers;

use App\Animal;
use App\Species;

use Illuminate\Http\Request;

class NavController extends Controller
{
  public function home(){
    return view('home');
  }

  public function listing(){
    return view('listing', ['animals' => Animal::getAll()]);
  }

  public function ajout(){
    return view('ajout', ['animals' => Animal::getAll(), 'species' => Species::getAll()]);
  }

  public function update(Request $request){
    $animal =  Animal::getOne($request);
    // $species =  Species::getOne($request);
    return view('update', ['animal' => $animal, 'species' => Species::getAll()]);
  }


}
