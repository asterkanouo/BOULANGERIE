@extends('welcome')
@section('content')
<div class=" border rounded-0 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
    <div class=" card-header d-flex  justify-content-center pb-2 mb-4 ">
    <h2>Ajout d'une nouvelle marchandise</h2>
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
      <form method="post" action="{{route('marchandise.ajouter')}}">
      @csrf
      <div class="row row-cols-1 row-cols-md-2">
      <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Référence</label>
    <input type="text" class="form-control" required name="reference">
  </div>
  <div class="mb-3 px-3">
    <label for="exampleInputtext" class="form-label">Désignation</label>
    <input type="text" class="form-control" required name="designation">
  </div>
  
  <div class="mb-3">
  <label for="disabledSelect" class="form-label">Contidionnement</label>
  <select class="form-control" required name="categorie">
    <option></option>
    <option>Pièce</option>
    <option>Carton</option>
    <option>Paquet</option>
    <option>Sachet</option>
    <option>Boîte</option>
    <option>Pot</option>
    <option>Barre</option>
    <option>Kg</option>
    <option>Litre</option>
  </select>
</div>
  <div class="mb-3 px-3">
    <label for="exampleInputtext" class="form-label">Prix d'achat</label>
    <input type="text" class="form-control" required name="prix_achat">
  </div>
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Prix de gros</label>
    <input type="text" class="form-control" required name="prix_gros">
  </div>
  <div class="mb-3 px-3">
    <label for="exampleInputtext" class="form-label">Prix de détail</label>
    <input type="text" class="form-control" required name="prix_detail">
  </div>
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Dernier Prix d'achat</label>
    <input type="text" class="form-control" required name="prix_detail">
  </div>
  <div class="mb-3 px-3">
  <label for="disabledSelect" class="form-label">Contidionnement</label>
  <select class="form-control" required name="categorie">
    <option></option>
    <option>Pièce</option>
    <option>Carton</option>
    <option>Paquet</option>
    <option>Sachet</option>
    <option>Boîte</option>
    <option>Pot</option>
    <option>Barre</option>
    <option>Kg</option>
    <option>Litre</option>
  </select>
</div>
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">CMPU</label>
    <input type="text" class="form-control" required name="cmup">
  </div>
  <div class="mb-3  px-3">
    <label for="exampleInputtext" class="form-label">Quantité</label>
    <input type="text" class="form-control" required name="qte_entree">
  </div>
    </div>
  <div class="d-flex justify-content-center ">
  <button type="submit" class="btn btn-success mr-4">Enregistrer</button>
  <a  href="{{route('marchandise')}}" class="btn btn-danger">Retour</a>
  </div>
</form>
</div>
  
  @endsection
