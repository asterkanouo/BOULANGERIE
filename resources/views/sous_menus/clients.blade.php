@extends('welcome')
@section('content')

<div class="container-fluid bg-body rounded shadow-sm ">
<nav class="navbar bg-dark ">
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
  <a href="{{route('clients.create')}}" class = "navbar-brand text-white">Ajouter un client</a>
  </li>
  <li class="nav-item ml-4">
  <a class="navbar-brand text-white" href="#">Opérations</a>
  </li>
  </ul>
</nav>
<h1 class="d-flex justify-content-center pb-2 mb-2 "><b><u> Listes des clients</u></b></h1>
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
  <thead class=" bg-success">
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Type</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Dépôt</th>
      <th scope="col">Type Client</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($clients as $client)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$client->nom}}</td>
      <td>{{$client->prenom}}</td>
      <td>{{$client->type_client}}</td>
      <td>{{$client->telephone}}</td>
      <td>{{$client->code_depot}}</td>
      <td>{{$client->types}}</td>
      <td>
      <a href="#" class= "btn btn-info">Editer</a>
      <a href="/client.delete/{{$client->code_user}}"  class= "btn btn-danger"  onclick="return confirm('voulez-vous vraiment supprimer ce client?');">Supprimer</a>
      
      </td>
    </tr>
    @endforeach
  </tbody>
  
</table>
<div class = "d-flex justify-content-end mb-2">
  {{($clients->links())}}
</div>
</div>
  @endsection
