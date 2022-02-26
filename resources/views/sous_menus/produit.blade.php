@extends('welcome')
@section('content')
<div class="container-fluid bg-body rounded shadow-sm">
<nav class="navbar bg-dark ">
<ul class="nav">
  <li class="nav-item">
  <a href="{{route('produit.create')}}" class = "navbar-brand text-white">Ajouter un produit</a>
  </li>
  <li class="nav-item ml-4">
  <a class="navbar-brand text-white" href="#">Opérations</a>
  </li>
  </ul>
</nav>
<h1 class="d-flex justify-content-center pb-2 mb-2 "><b><u> Liste des produits</u></b></h1>
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
      <th scope="col">Réf</th>
      <th scope="col">Désignation</th>
      <th scope="col">Prix détail</th>
      <th scope="col">Prix gros</th>
      <th scope="col">Prix Contrôle</th>
      <th scope="col">Unité stockage</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($produits as $produit)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$produit->reference}}</td>
      <td>{{$produit->designation}}</td>
      <td>{{$produit->prix_detail}}</td>
      <td>{{$produit->prix_gros}}</td>
      <td>{{$produit->prix_controle}}</td>
      <td>{{$produit->unite_stockage}}</td>
      <td>
      <a href="#" class= "btn btn-info">Editer</a>
      <a href="/produit.delete/{{$produit->id}}"  class= "btn btn-danger"  onclick="return confirm('voulez-vous vraiment supprimer ce produit' . $produit->designation'?')">Supprimer</a>
      
      </td>
    </tr>
    @endforeach
  </tbody>
  
</table>
<div class = "d-flex justify-content-end mb-2">
  {{($produits->links())}}
</div>
  @endsection
