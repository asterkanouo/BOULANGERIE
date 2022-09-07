@extends('welcome')
@section('content')
<div class=" border rounded-0 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
    <div class=" card-header d-flex  justify-content-center pb-2 mb-4 ">
    <h2>Ajout d'un nouveau produit</h2>
    </div>
     <div class="card-body"> 
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
    </div>
      <form method="post" action="{{route('produit.ajouter')}}">
      @csrf
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Référence</label>
    <input type="text" class="form-control" required name="reference">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Désignation</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="designation">
  </div>
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Prix de détail</label>
    <input type="text" class="form-control" required name="prix_detail">
  </div>
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Prix de gros</label>
    <input type="text" class="form-control" required name="prix_gros">
  </div>
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Prix de contrôle</label>
    <input type="text" class="form-control" required name="prix_controle">
  </div>
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">unité se stockage</label>
    <input type="text" class="form-control" required name="unite_stockage">
  </div>
  <div class="mb-3">
  <div class="d-flex justify-content-center ">
  <button type="submit" class="btn btn-success mr-4">Enregistrer</button>
  <a  href="{{route('produit')}}" class="btn btn-danger">Retour</a>
  </div>
</form>
</div>
  
  @endsection
