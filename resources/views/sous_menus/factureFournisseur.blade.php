@extends('welcome')
@section('content')
<div class=" border rounded-0 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
<div class="card">
<div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
<h5>Impression des factures fournisseur</h5>
</div>
     <div class="card-body">
    <div class="row">
        <div class=" mr-2 col-8 card bg-body rounded shadow-sm ">
                <div class="card-body"> 
                <form method="post" action="{{route('parametre')}}">
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
                 <button id="tableau" type="button" class="mt-3 col-sm-12 btn btn-success" >Afficher</button>
            </div> 
            </form>
            </div>
             </div>
            
            </div> 
            </div>

        <div class=" col-12 card bg-body rounded shadow-sm " style="width:1370px;margin-left:0px;">
            <div class="card-body"> 
            <table class="table table-bordered table-hover" style="width:1350px;margin-left:-30px;">
  <thead class=" bg-light">
    <tr>
      <th scope="col">Num facture</th>
      <th scope="col">Date</th>
      <th scope="col">Fournisseur</th>
      <th scope="col">Total</th>
      <th scope="col">remise</th>
      <th scope="col">Net à payer</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
                    <div class="mt-3 d-flex justify-content-end" >
                    <button type="submit" class=" mr-4 btn btn-primary">Imprimer la facture</button>
                    <a href="{{route('welcome')}}" class="btn btn-danger">Retour</a>
                    </div>
    </div>
    </div>
            
                
            
    </div>
    </div>
    </div>
 @endsection
