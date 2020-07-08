@extends('layouts.layout')

@section('title', 'Ajout')

@section('content')

<div class="center">
  <form action="/addOne" method="POST">
      @csrf
      <div><label for="name">Nom</label></div>
      <div><input type="text" name="name" value=""></div>

      <div><label for="age">Age</label></div>
      <div><input type="text" name="age" value=""></div>

      <div><label for="description">Description</label></div>
      <div><input type="text" name="description" value=""></div>

      <div><label for="genre">Sexe</label></div>
      <div><input type="text" name="genre" value=""></div>

      <div><label for="weight">poids</label></div>
      <div><input type="text" name="weight" value=""></div>

      <div><label for="species">espèce</label></div>
      <div class="">
        @foreach($species as $race)
            <input type="checkbox" name="species[]" value="{{ $race->id }}">
            <label for="genre">{{ $race->name }}</label>
        @endforeach
      </div>
      <button type="submit" name="button">ajouter</button>
  </form>
</div>

@endsection
