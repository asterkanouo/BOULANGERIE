@extends('welcome')
@section('content')
<div class="col-8 card bg-body rounded shadow-sm ">
    <div class=" card-header d-flex bg-primary justify-content-center pb-2 mb-4 ">
    <h2>Ajout d'un personnel</h2>
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
      <form method="post" action="{{route('personnel.ajouter')}}">
      @csrf
      <div class="row row-cols-1 row-cols-md-2">
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Nom</label>
    <input type="text" class="form-control" required name="libelle">
  </div>
  <div class="mb-3 px-3">
    <label for="exampleInputPassword1" class="form-label">prenom</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="salaire_moyen">
  </div>
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Telephone</label>
    <input type="text" class="form-control" required name="superviseur">
  </div>
  <div class="mb-3  px-3">
    <label for="exampleInputtext" class="form-label">CNI</label>
    <input type="text" class="form-control" required name="nb_membre">
  </div>
  <div class="mb-3  ">
    <label for="exampleInputtext" class="form-label">poste</label>
    <input type="text" class="form-control" required name="nb_membre">
  </div>
  <div class="mb-3 px-3">
    <label for="exampleInputtext" class="form-label">Date d'embauche</label>
    <input type="text" id="datepicker" readonly="readonly" class="form-control" required name="cle_ventillation">
  </div>
  
  
  
  <div class="mb-3">
  <label for="disabledSelect" class="form-label">Sexe</label>
  <select class="form-control" required name="type_client">
    <option></option>
    <option>Masculin</option>
    <option>Feminin</option>
  </select>
</div>
  <div class="mb-3 px-3">
    <label for="exampleInputtext" class="form-label">Email</label>
    <input type="text" class="form-control" required name="standard_production">
    </div>
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Matricule interne</label>
    <input type="text" class="form-control" required name="standard_production">
    </div>
  <div class="mb-3 px-3">
    <label for="exampleInputtext" class="form-label">Matricule CNPS</label>
    <input type="text" class="form-control" name="standard_production">
    </div>
    <div class="mb-3">
  <label for="disabledSelect" class="form-label">Statut</label>
  <select class="form-control" required name="type_client">
    <option></option>
    <option>Actif</option>
    <option>Bloqué</option>
  </select>
</div>
<div class="mb-3 px-3">
    <label for="exampleInputPassword1" class="form-label">Dépôt</label>
    <select class="form-control" required name="code_depot">
        <option value=""></option>
        @foreach($depots as $depot)
            <option value="{{$depot->code_depot}}">{{$depot->libelle}}</option>
        @endforeach
    </select>
  </div>
  <div class="mb-3">
  <label for="disabledSelect" class="form-label">Type contrat</label>
  <select class="form-control" required name="type_client">
    <option></option>
    <option>CDI</option>
    <option>CDD</option>
  </select>
</div>

    </div>
  <div class="d-flex justify-content-center ">
  <button type="submit" class="btn btn-success mr-4">Enregistrer</button>
  <a  href="{{route('personnel')}}" class="btn btn-danger">Retour</a>
  </div>
</form>
<script type = "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">></script>
 <script type = "text/javascript" src="js/jquery-ui.min.js">></script>
 <script type = "text/javascript" src="js/main.js">></script>
</div>
  
  @endsection
