@extends('welcome')
@section('content')
<div class=" col-6 card bg-body rounded shadow-sm ">
    <div class=" card-header d-flex bg-primary justify-content-center pb-2 mb-4 ">
    <h1>Ajout d'un dépôt de stockage</h1>
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
      <form method="post" action="{{route('clients.ajouter')}}">
      @csrf
      
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Libelle</label>
    <input type="text" class="form-control" required name="libelle">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nom contact</label>
    <input type="password" class="form-control" name="contact_personne">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Téléphone</label>
    <input type="text" class="form-control" required name="telephone">
  </div>
  <div class="mb-3">
  <label for="disabledSelect" class="form-label">Catégorie</label>
  <select class="form-control" required name="delai_reglement">
    <option></option>
    <option>Comptant</option>
    <option>24Heures</option>
    <option>48Heures</option>
    <option>72Heures</option>
    <option>96Heures</option>
  </select>
</div>
  <div class="d-flex justify-content-center ">
  <button type="submit" class="btn btn-success mr-4">Enregistrer</button>
  <a  href="{{route('depot')}}" class="btn btn-danger">Retour</a>
  </div>
</form>
</div>
  
  @endsection
