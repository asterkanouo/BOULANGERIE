@extends('welcome')
@section('content')

<div class=" border rounded-0 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
<nav class="navbar bg-dark ">
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
  <a href="{{route('fournisseur.create')}}" class = "navbar-brand text-white">Ajouter un fournisseur</a>
  </li>
  <li class="nav-item ml-4">
  <a class="navbar-brand text-white" href="#">Opérations</a>
  </li>
  </ul>
</nav>
<h1 class="d-flex justify-content-center pb-2 mb-2 "><b><u> Listes des fournisseurs</u></b></h1>
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
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($fournisseurs as $fournisseur)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$fournisseur->nom}}</td>
      <td>{{$fournisseur->prenom}}</td>
      <td>{{$fournisseur->type_fournisseur}}</td>
      <td>{{$fournisseur->telephone}}</td>
      <td>{{$fournisseur->code_depot}}</td>
      <td>
      <a href="#" class= "btn btn-info">Editer</a>
      <a href="/fournisseur.delete/{{$fournisseur->code_fournisseur}}"  class= "btn btn-danger"  onclick="return confirm('voulez-vous vraiment supprimer ce fournisseur?');">Supprimer</a>
      
      </td>
    </tr>
    @endforeach
  </tbody>
  
</table>
<div class = "d-flex justify-content-end mb-2">
  {{($fournisseurs->links())}}
</div>
</div>
  @endsection
