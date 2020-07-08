@extends('layouts.layout')

@section('title', 'Listing')

@section('content')

              <h1>Liste des livres</h1>

            <form action="/updateOne" method="POST">
              @csrf
               <p><input type="hidden" name="id" value="{{$animal->id}}"></p>

               <div><label for="name">Nom</label></div>
               <div><input type="text" name="name" value="{{$animal->name}}"></div>

               <div><label for="age">Age</label></div>
               <div><input type="text" name="age" value="{{$animal->age}}"></div>

               <div><label for="description">Description</label></div>
               <div><input type="text" name="description" value="{{$animal->description}}"></div>

               <label for="sexe">Masculin</label>
               <input type="checkbox" name="sexe" value="male">
               <label for="sexe">Femelle</label>
               <input type="checkbox" name="sexe" value="female">

               <div><label for="weight">Poids</label></div>
               <div><input type="text" name="weight" value="{{$animal->weight}}"></div>

               <div class="">
               <select name="species_id">
                 @foreach ($species as $race)
                  <option value="{{$race->id}}">{{$race->name}}</option>
                 @endforeach
               </select>
             </div>
                <button type="submit" name="button">Mettre à jour</button>
          </form>
@endsection
