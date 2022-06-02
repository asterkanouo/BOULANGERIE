@extends('welcome')
@section('content')
<div class="container">
<div class="card container-fluid">
<div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
<h5>Nouvelle facture fournisseur</h5>
</div>
     <div class="card-body ">
    <div class="row">
        <div class=" mr-2 col-8 card bg-body rounded shadow-sm mb-4">
                <div class="card-body"> 
                <form method="post" action="{{route('nouvel_fact_four')}}">
                @csrf
                <div class=" form-group row">
                <label for="util" class="col-sm-4 form-label" >dépôt: </label>
                <div class=" col-sm-12">
                <select class="form-control">
                <option value=""></option>
                @foreach($depots as $depot)
                    <option value="{{$depot->code_matiere}}">{{$depot->libelle}}</option>
                @endforeach
                </select>
                 </div>
            </div>    
            <div class=" form-group row">
                <label for="util" class="col-sm-4 form-label" >Fournisseur: </label>
                <div class=" col-sm-12">
                <select class="form-control">
                <option value=""></option>
                @foreach($fournisseurs as $fournisseur)
                    <option value="{{$fournisseur->codefournisseur}}">{{$fournisseur->nom}}</option>
                @endforeach
                </select>
                 </div>
            </div>    
            <div class=" form-group row">
                <label for="util" class="col-sm-2 form-label" >Date de début: </label>
                <div class=" col-sm-4">
                <input type="text" id="datepicker" readonly="readonly" class="form-control" value="" name="date_debut">
                </div>
                <label for="util" class="col-sm-2 form-label" >Date de fin: </label>
                <div class=" col-sm-4">
                <input type="text" id="datepicker2" readonly="readonly" class="form-control" value="" name="date_debut">     
                 </div>
            </div> 
            </form>
            </div>
            </div>
             
            <div class="col">
            <label  class="">Numero de la facture:</label>
                <input type="text" class="col-sm-6 mr-3" value="">    
            <button type="submit" class=" mt-4 mb-3 btn btn-dark">Calculer</button>
             </div> 
           

        <div class=" col-12 card bg-body rounded shadow-sm ">
            <div class="card-body"> 
            <table class="table table-bordered ">
  <thead class=" bg-light">
    <tr>
      <th scope="col">....</th>
      <th scope="col">Référence</th>
      <th scope="col">Désignation</th>
      <th scope="col">Stock réel</th>
      <th scope="col">Quantité</th>
      <th scope="col">prix unitaire</th>
      <th scope="col">Montant total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><button class="btn btn-dark"></button></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
    </div>
    </div>
    <form class="col mt-3">
                <button type="submit" class=" mr-3 btn btn-success">valider</button>
                <label  class="">Total:</label>
                <input type="text" class="mr-2 col-sm-2" value="0">
                <label  class="">Reduction:</label>
                <input type="text" class="mr-2 col-sm-2 " value="0">
                <label  class="">Net:</label>
                <input type="text" class="mr-2 col-sm-2" value="0">
                <div class="mt-3 d-flex justify-content-end" >
                <button type="submit" class="mr-2 btn btn-primary">Enregistrer</button>
                <a href="{{route('welcome')}}" class="mr-4 btn btn-danger">Quitter</a>
                </div>
            </form>
    </div>
    </div>
    </div>

 @endsection
