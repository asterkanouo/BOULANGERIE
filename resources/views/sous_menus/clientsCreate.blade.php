@extends('welcome')
@section('content')
<div class=" border rounded-0 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
    <div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
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
      
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Nom</label>
    <input type="text" class="form-control" required name="nom">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="prenom">
  </div>
  <div class="mb-3">
  <label for="disabledSelect" class="form-label">Catégorie</label>
  <select class="form-control" required name="type_client">
    <option></option>
    <option>prix de gros</option>
    <option>Prix de détail</option>
  </select>
</div>
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Téléphone</label>
    <input type="text" class="form-control" required name="telephone">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Dépôt</label>
    <select class="form-control" required name="code_depot">
        <option value=""></option>
        @foreach($depots as $depot)
            <option value="{{$depot->code_depot}}">{{$depot->libelle}}</option>
        @endforeach
    </select>
  </div>
  <div class="mb-3">
  <label for="disabledSelect" class="form-label">Type</label>
  <select class="form-control" required name="types">
    <option></option>
    <option>Payant</option>
    <option>Gratuit</option>
    <option>Multi_dépôt</option>
  </select>
</div>
  <div class="d-flex justify-content-center ">
  <button type="submit" class="btn btn-success mr-4">Enregistrer</button>
  <a  href="{{route('clients')}}" class="btn btn-danger">Retour</a>
  </div>
</form>
</div>
  
  @endsection
