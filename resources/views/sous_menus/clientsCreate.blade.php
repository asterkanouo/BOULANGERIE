@extends('welcome')
@section('content')
<div class=" col-8 card bg-body rounded shadow-sm ">
    <div class=" card-header d-flex bg-primary justify-content-center pb-2 mb-4 ">
    <h1>Ajout d'un nouveau client</h1>
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
      <div class="row row-cols-1 row-cols-md-2">
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Nom</label>
    <input type="text" class="form-control" required name="nom">
  </div>
  <div class="mb-3 px-3">
    <label for="exampleInputPassword1" class="form-label">Prenom</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="prenom">
  </div>
  <div class="mb-3">
  <label for="disabledSelect" class="form-label">Type_client</label>
  <select class="form-control" required name="type_client">
    <option></option>
    <option>prix de gros</option>
    <option>Prix de détail</option>
  </select>
</div>
  <div class="mb-3 px-3">
    <label for="exampleInputtext" class="form-label">solde</label>
    <input type="text" class="form-control" required name="solde">
    </div>
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Téléphone</label>
    <input type="text" class="form-control" required name="telephone">
  </div>
  <div class="mb-3 px-3">
    <label for="exampleInputtext" class="form-label">Solde initial</label>
    <input type="text" class="form-control" required name="solde_initial">
  </div>
  </div>
  
  <div class="row row-cols-1 row-cols-md-2">
  
  <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Dépôt</label>
    <select class="form-control" required name="code_depot">
        <option value=""></option>
        @foreach($depots as $depot)
            <option value="{{$depot->code_depot}}">{{$depot->libelle}}</option>
        @endforeach
    </select>
  </div>
  <div class="mb-3 px-3">
    <label for="exampleInputtext" class="form-label">Numéro</label>
    <input type="text" class="form-control" required name="numero">
  </div>
  <div class="mb-3">
  <label for="disabledSelect" class="form-label">Type</label>
  <select class="form-control" required name="types">
    <option></option>
    <option>Payant</option>
  </select>
</div>
  <div class="mb-3 px-3">
    <label for="exampleInputtext" class="form-label">Multi_dépôt_caisse</label>
    <input type="text" class="form-control" required name="multi_depot_caisse">
  </div>
    </div>
  <div class="d-flex justify-content-center ">
  <button type="submit" class="btn btn-success mr-4">Enregistrer</button>
  <a  href="{{route('clients')}}" class="btn btn-danger">Retour</a>
  </div>
</form>
</div>
  
  @endsection
