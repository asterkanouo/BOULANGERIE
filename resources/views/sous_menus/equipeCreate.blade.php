@extends('welcome')
@section('content')
<div class="col-8 card bg-body rounded shadow-sm ">
    <div class=" card-header d-flex bg-primary justify-content-center pb-2 mb-4 ">
    <h2>Ajout d'une nouvelle équipe</h2>
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
      <form method="post" action="{{route('equipe.ajouter')}}">
      @csrf
      <div class="row row-cols-1 row-cols-md-2">
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Libelle</label>
    <input type="text" class="form-control" required name="libelle">
  </div>
  <div class="mb-3 px-3">
    <label for="exampleInputPassword1" class="form-label">Salaire moyen</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="salaire_moyen">
  </div>
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Superviseur</label>
    <input type="text" class="form-control" required name="superviseur">
  </div>
  <div class="mb-3  px-3">
    <label for="exampleInputtext" class="form-label">Nombre de membres</label>
    <input type="text" class="form-control" required name="nb_membre">
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
  <div class="mb-3  px-3">
    <label for="exampleInputPassword1" class="form-label">Matière première</label>
    <select class="form-control" required name="mp">
        <option value=""></option>
        @foreach($matiere_ps as $matiere_p)
            <option value="{{$matiere_p->code_matiere}}">{{$matiere_p->element}}</option>
        @endforeach
    </select>
  </div>
  </div>
  
  <div class="row row-cols-1 row-cols-md-2">
  
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">standard de production</label>
    <input type="text" class="form-control" required name="standard_production">
    </div>
    <div class="mb-3  px-3">
    <label for="exampleInputPassword1" class="form-label">Référence produit</label>
    <select class="form-control" required name="produit_ref">
        <option value=""></option>
        @foreach($produits as $produit)
            <option value="{{$produit->id}}">{{$produit->designation}}</option>
        @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Clé de ventillation</label>
    <input type="text" class="form-control" required name="cle_ventillation">
  </div>
  
  
  
    </div>
  <div class="d-flex justify-content-center ">
  <button type="submit" class="btn btn-success mr-4">Enregistrer</button>
  <a  href="{{route('equipe')}}" class="btn btn-danger">Retour</a>
  </div>
</form>
</div>
  
  @endsection
