@extends('welcome')
@section('content')
<div class="container-fluid bg-body rounded shadow-sm">
<nav class="d-flex justify-content-center navbar bg-dark ">
<ul class="nav">
  <li class="nav-item">
  <a href="{{route('utilisateur.create')}}" class = "navbar-brand text-white">Ajouter un utilisateur</a>
  </li>
  <li class="form-inline my-2 my-lg-0">
  <form action="{{ route('search') }}" method="GET">
  <input class="form-control" type="text" name="search"  placeholder="Saisir un nom" required/>
  <button class="btn btn-lg" type="submit">Rechercher</button>
</form>
  </li>
  <li >
  <a class="btn btn-lg btn-info ml-4" href="{{route('utilisateur') }}">Annuler la recherche</a>
  </li>
  <li class=" nav-item ml-4">
  <a class="navbar-brand btnprn text-white" href="{{route('utilisateurImp') }}">Imprimer</a>
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
      <th scope=class="animals col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col" >Action</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($utilisateurs as $utilisateur)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$utilisateur->compte}}</td>
      <td>{{$utilisateur->nom}}</td>
      <td>{{$utilisateur->prenom}}</td>
      <td> 
          <div class="dropdown">
            <a class=" btn btn-info btn-sm dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gerer</span></a>
              <div class="dropdown-menu" aria-labelledby="deroulantb">
                <a href="/utilisateur.update/{{$utilisateur->id}}" id="deroulantb" class= "dropdown-item">Modifier </a>
                <a href="/utilisateur.delete/{{$utilisateur->id}}"  id="deroulantb" class= "dropdown-item" onclick="return confirm('voulez-vous vraiment supprimer cet utilisateur?');">Supprimer</a>
              </div>
          </div>
      </td>
    </tr>

    @endforeach
  </tbody>
  
</table>
<div class = "d-flex justify-content-end mb-2">
  {{($utilisateurs->links())}}
</div>
</div>

    


  @endsection
