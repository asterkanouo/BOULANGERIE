@extends('welcome')
@section('content')
<div class="col-8 card bg-body rounded shadow-sm ">
    <div class=" card-header d-flex bg-primary justify-content-center pb-2 mb-4 ">
    <h2>Ajout d'une nouvelle matière première</h2>
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
      <form method="post" action="{{route('matiere_p.ajouter')}}">
      @csrf
      <div class="row row-cols-1 row-cols-md-2">
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Désignation</label>
    <input type="text" class="form-control" required name="element">
  </div>
  <div class="mb-3 px-3">
    <label for="exampleInputPassword1" class="form-label">Unité de consommation</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="unite_consommation">
  </div>
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Prix d'achat</label>
    <input type="text" class="form-control" required name="prix_achat">
  </div>
  <div class="mb-3  px-3">
    <label for="exampleInputtext" class="form-label">Unité achat(conditionnement)</label>
    <input type="text" class="form-control" required name="unite_achat">
  </div>
  </div>
  
  <div class="row row-cols-1 row-cols-md-2">
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Valeur</label>
    <input type="text" class="form-control" required name="valeur">
  </div>
  <div class="mb-3  px-3">
    <label for="exampleInputtext" class="form-label">Quantité entrée</label>
    <input type="text" class="form-control" required name="qte_entree">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Dépôt de stockage</label>
    <select class="form-control" required name="code_depot">
        <option value=""></option>
        @foreach($depots as $depot)
            <option value="{{$depot->code_depot}}">{{$depot->libelle}}</option>
        @endforeach
    </select>
  </div>
  <div class="mb-3  px-3">
    <label for="exampleInputtext" class="form-label">CMUP</label>
    <input type="text" class="form-control" required name="cmup">
  </div>
    </div>
  <div class="d-flex justify-content-center ">
  <button type="submit" class="btn btn-success mr-4">Enregistrer</button>
  <a  href="{{route('matiere_p')}}" class="btn btn-danger">Retour</a>
  </div>
</form>
</div>
  
  @endsection
