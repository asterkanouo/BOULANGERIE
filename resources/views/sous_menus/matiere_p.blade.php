@extends('welcome')
@section('content')
<div class=" border rounded-0 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
<nav class="navbar bg-dark ">
<ul class="nav">
  <li class="nav-item">
  <a href="{{route('matiere_p.create')}}" class = "navbar-brand text-white">Ajouter une matiere_p</a>
  </li>
  <li class="nav-item ml-4">
  <a class="navbar-brand text-white" href="#">Opérations</a>
  </li>
  </ul>
</nav>
<h1 class="d-flex justify-content-center pb-2 mb-2 "><b><u> Liste des Matières premières</u></b></h1>
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
      <th scope="col">Désignation</th>
      <th scope="col">Unité_consommation</th>
      <th scope="col">Prix d'achat</th>
      <th scope="col">Unite d'achat/stock</th>
      <th scope="col">CMUP</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($matiere_ps as $matiere_p)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$matiere_p->element}}</td>
      <td>{{$matiere_p->unite_consommation}}</td>
      <td>{{$matiere_p->prix_achat}}</td>
      <td>{{$matiere_p->unite_achat}}</td>
      <td>{{$matiere_p->cmup}}</td>
      <td>
      <a href="#" class= "btn btn-info">Editer</a>
      <a href="/matiere_p.delete/{{$matiere_p->code_matiere}}"  class= "btn btn-danger"  onclick="return confirm('voulez-vous vraiment supprimer cette matiere_p?');">Supprimer</a>
      
      </td>
    </tr>
    @endforeach
  </tbody>
  
</table>
<div class = "d-flex justify-content-end mb-2">
  {{($matiere_ps->links())}}
</div>
</div>
  @endsection
