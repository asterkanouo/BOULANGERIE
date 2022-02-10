@extends('layouts.master')
@section('content')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Listes des utilisateurs</h3>
      <div class=" mt-4">
      <div class = "d-flex justify-content-end mb-2">
      <a href="#" class = "btn btn-info">Ajouter un utilisateur</a>
      </div>
      <table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">code_utilisateur</th>
      <th scope="col">compte</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Statut</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($utilisateurs as $utilisateur)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$utilisateur->compte}}</td>
      <td>{{$utilisateur->nom}}</td>
      <td>{{$utilisateur->prenom}}</td>
      <td>{{$utilisateur->email}}</td>
      <td>{{$utilisateur->statut}}</td>
      <td>
      <a href="#" class= "btn btn-info">Editer</a>
      <a href="#" class= "btn btn-danger">Supprimer</a>
      </td>
    </tr>
    @endforeach
  </tbody>
  
</table>
<div class = "d-flex justify-content-end mb-2">
  {{($utilisateurs->links())}}
</div>
      </div>
    <small class="d-block text-end mt-3">
      <a href="{{route('welcome')}}"><h4>page d'accueil</h4></a>
    </small>
  </div>
  @endsection
