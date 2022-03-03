@extends('welcome')
@section('content')
<div class="container-fluid bg-body rounded shadow-sm">
<nav class="d-flex justify-content-center navbar bg-dark ">
<ul class="nav">
  <li class="nav-item">
  <a href="{{route('personnel.create')}}" class = "navbar-brand text-white">Ajouter un personnel</a>
  </li>
  <li class="nav-item ml-4">
  <a class="navbar-brand text-white" href="#">Opérations</a>
  </li>
  </ul>
</nav>
    <h1 class="d-flex justify-content-center pb-2 mb-2 "><b><u> Listes du personnels</u></b></h1>
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
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Type_contrat</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Dépôt</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($personnels as $personnel)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$personnel->nom}}</td>
      <td>{{$personnel->prenom}}</td>
      <td>{{$personnel->type_contrat}}</td>
      <td>{{$personnel->telephone}}</td>
      <td>{{$personnel->code_depot}}</td>

      <td>
      <a href="#" class= "btn btn-info">Editer</a>
      <a href="/personnel.delete/{{$personnel->code_personnel}}" class= "btn btn-danger" onclick="return confirm('voulez-vous vraiment supprimer ce personnel?');">Supprimer</a>
      
      </td>
    </tr>
    @endforeach
  </tbody>
  
</table>

<div class = "d-flex justify-content-end mb-2">
  {{($personnels->links())}}
</div>
</div>
  @endsection
