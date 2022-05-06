@extends('welcome')
@section('content')
<div class="container-fluid bg-body rounded shadow-sm">
<nav class="d-flex justify-content-center navbar bg-dark ">
<ul class="nav">
  <li class="nav-item">
  <a href="{{route('utilisateur.create')}}" class = "navbar-brand text-white">Ajouter un utilisateur</a>
  </li>
  <li class="nav-item ml-4">
  <a class="navbar-brand text-white" href="#">Opérations</a>
  </li>
  </ul>
</nav>
    <h1 class="d-flex justify-content-center pb-2 mb-2 "><b><u> Listes des utilisateurs</u></b></h1>
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
      <table class="table table-bordered table-hover">
  <thead class="  bg-success">
    <tr>
      <th scope="col">N°</th>
      <th scope="col">compte</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col" colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($utilisateurs as $utilisateur)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$utilisateur->compte}}</td>
      <td>{{$utilisateur->nom}}</td>
      <td>{{$utilisateur->prenom}}</td>
      <td><a href="/utilisateur.update/{{$utilisateur->id}}" class= "btn btn-info">Editer
      </a></td>
      <td><a href="/utilisateur.delete/{{$utilisateur->id}}" class= "btn btn-danger" onclick="return confirm('voulez-vous vraiment supprimer cet utilisateur?');">Supprimer</a></td>
    </tr>
    @endforeach
  </tbody>
  
</table>

<div class = "d-flex justify-content-end mb-2">
  {{($utilisateurs->links())}}
</div>
</div>
  @endsection
