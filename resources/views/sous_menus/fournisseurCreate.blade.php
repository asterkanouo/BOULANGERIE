@extends('welcome')
@section('content')
<div class=" col-6 card bg-body rounded shadow-sm ">
    <div class=" card-header d-flex bg-primary justify-content-center pb-2 mb-4 ">
    <h1>Ajout d'un fournisseur</h1>
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
      <form method="post" action="{{route('fournisseur.ajouter')}}">
      @csrf
      
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Nom</label>
    <input type="text" class="form-control" required name="nom">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prenom </label>
    <input type="password" class="form-control" name="prenom">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Téléphone</label>
    <input type="text" class="form-control" required name="telephone">
  </div>
  <div class="mb-3">
  <label for="disabledSelect" class="form-label">Catégorie</label>
  <select class="form-control" required name="categorie">
    <option></option>
    <option>Prix de gros</option>
    <option>Prix de détail</option>
  </select>
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Dépôt</label>
    <select class="form-control" required name="code_depot">
        <option value=""></option>
        @foreach($depots as $depot)
            <option value="{{$depot->code_depot}}">{{$depot->libelle}}</option>
        @endforeach
    </select>
  </div>
  <div class="d-flex justify-content-center ">
  <button type="submit" class="btn btn-success mr-4">Enregistrer</button>
  <a  href="{{route('fournisseur')}}" class="btn btn-danger">Retour</a>
  </div>
</form>
</div>
  
  @endsection
