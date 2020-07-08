<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Animal;
use App\Species;

class ActionController extends Controller
{
  public function updateOneAnimal(Request $request){
    Animal::updateOne($request);
    return redirect('/listing');
  }

  public function addOne(Request $request){
    Animal::addOne($request);
    return redirect('/listing');
  }

  public function destroy(Request $request){
    Animal::destroy($request);
    return redirect('/listing');
  }

  public function updateOne(Request $request){
    Animal::updateOne($request);
    return redirect('/listing');
  }
}
