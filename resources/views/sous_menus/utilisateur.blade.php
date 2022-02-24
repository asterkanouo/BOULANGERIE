@extends('layouts.master')
@section('content')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="d-flex bg-primary justify-content-center pb-2 mb-4 ">Listes des utilisateurs</h3>
      <div class=" mt-4">
      @if(session()->has("success"))
      <h3 class=" alert alert-success">
      {{session()->get('success')}}
      </h3>
     @endif 
          @if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
        <li>{{($error)}}</li>
        @endforeach
    </ul>
    @endif

      <div class = "d-flex  justify-content-end mb-2">
      <a href="{{route('utilisateur.create')}}" class = "btn btn-success">Ajouter un utilisateur</a>
      </div>
      <table class="table table-bordered table-hover">
  <thead class=" bg-info">
    <tr>
      <th scope="col">compte</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($utilisateurs as $utilisateur)
    <tr>
      <!-- <th scope="row">{{$loop->index+1}}</th> -->
      <td>{{$utilisateur->compte}}</td>
      <td>{{$utilisateur->nom}}</td>
      <td>{{$utilisateur->prenom}}</td>
      <td>
      <a href="#" class= "btn btn-info">Editer</a>
      <a href="/utilisateur.delete/{{$utilisateur->code_user}}" class= "btn btn-danger" onclick="return confirm('voulez-vous vraiment supprimer cet utilisateur?')">Supprimer</a>
      
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
