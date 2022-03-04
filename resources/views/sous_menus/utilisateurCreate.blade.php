@extends('welcome')
@section('content')
<div class=" col-8 card bg-body rounded shadow-sm ">
    <div class=" card-header d-flex bg-primary justify-content-center pb-2 mb-4 ">
    <h1>Ajout d'un nouvel utilisateur</h1>
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
      <form method="post" action="{{route('utilisateur.ajouter')}}">
      @csrf
      <div class="row row-cols-1 row-cols-md-2">
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Compte</label>
    <input type="text" class="form-control" required name="compte">
  </div>
  <div class="mb-3 px-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Nom</label>
    <input type="text" class="form-control" required name="nom">
  </div>
  <div class="mb-3 px-3">
    <label for="exampleInputtext" class="form-label">Prenom</label>
    <input type="text" class="form-control" required name="prenom">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Groupe</label>
    <select class="form-control" required name="groupe">
        <option value=""></option>
        @foreach($groupes as $groupe)
            <option value="{{$groupe->code_groupe}}">{{$groupe->libelle}}</option>
        @endforeach
    </select>
  </div>
  <div class="mb-3 px-3 ">
      <label for="disabledSelect" class="form-label">Statut</label>
      <select class="form-control" required name="statut">
        <option></option>
        <option>Actif</option>
        <option>bloqué</option>
      </select>
    </div>
    
    <div class="mb-2">
    <label for="exampleInputtext" class="form-label">Email</label>
    <input type="text" class="form-control" required name="email">
  </div>
  </div>
  <div class="d-flex justify-content-center ">
  <button type="submit" class="btn btn-success mr-4">Enregistrer</button>
  <a  href="{{route('utilisateur')}}" class="btn btn-danger">Retour</a>
  </div>
</form>
</div>
  
  @endsection
