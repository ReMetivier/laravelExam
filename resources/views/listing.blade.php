@extends('layouts.layout')

@section('title', 'Listing')

@section('content')

<h1>Liste des livres</h1>
<table>
        <tr>
          <th>identifiant</th>
          <th>nom</th>
          <th>age</th>
          <th>description</th>
          <th>genre</th>
          <th>poids</th>
          <th>espèce</th>
          <th>delete</th>
          <th>update</th>
        </tr>

        @foreach ($animals as $animal)
          <tr>
            <td>{{$animal->id}}</td>
            <td>{{$animal->name}}</td>
            <td>{{$animal->age}}</td>
            <td>{{$animal->description}}</td>
            <td>{{$animal->genre}}</td>
            <td>{{$animal->weight}}</td>
            @foreach ($animal->species as $species)
              <td>{{$species->name}}</td>
            @endforeach
          <td>
            <form action="/destroy" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{$animal->id}}">
              <input type="submit" value="Delete">
            </form>
          </td>
          <td>
            <form class="" action="/update" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{$animal->id}}">
              <input type="submit" value="Update">
            </form>
          </td>
        </tr>
        @endforeach
</table>
@endsection
