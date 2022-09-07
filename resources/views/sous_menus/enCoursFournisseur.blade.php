@extends('welcome')
@section('content')
<div class=" border rounded-0 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
<div class=" border rounded-0 shadow" style="width: 1380px;margin-top: 0px;">
<div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
<h5>Liste des factures fournisseur</h5>
</div>
     <div class="card-body ">
        <div class="mr-2 col-8 card bg-body rounded shadow-sm mb-4" style="margin-left: 0px;width: 500px;height:100px">
               
                <form class=""  style="   height: 30px; margin-top: 14px;margin-left: 18px;width: 300px;" method="post" action="{{route('fact_en_cours_four')}}">
                 @csrf
                <div class=" form-group row"  >
                <label for="util" class="col-sm-4 form-label" style="margin-left: 0px" >dépôt: </label>
                <div class=" col-sm-12">
                <select class="form-control" style="margin-left: 100px;margin-top: -40px;">
                <option value=""></option>
                @foreach($depots as $depot)
                    <option value="{{$depot->code_matiere}}">{{$depot->libelle}}</option>
                @endforeach
                </select>
                <button class="btn btn-secondary" type="button" style="width: 300px;height: 50px; margin-top: 10px;margin-left:100px;">Afficher</button>
                 </div>
                 
            </div>  
            </form>
            </div>
          
           
           
        <div class="col-12  bg-body rounded shadow-sm " style="width: 1400px;margin-left: 0px;">
           
            <table class="table table-bordered " style="width: 1350px;margin-left: -15px;" >
  <thead class=" bg-light">
    <tr>
      <th scope="col">....</th>
      <th scope="col" class="text-center">Référence</th>
      <th scope="col" class="text-center">Désignation</th>
      <th scope="col" class="text-center">Stock réel</th>
      <th scope="col" class="text-center">Quantité</th>
      <th scope="col" class="text-center">prix unitaire</th>
      <th scope="col" class="text-center">Montant total</th>
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

    
    <div class=" d-flex justify-content-center" >
    <button class="mr-3  btn btn-success" type="button" >Détail Facture</button>
    <button class="mr-3 btn btn-primary" type="button" style="background-color: #19aa53;">OK</button>
    <a class="btn btn-danger mr-3 " href="{{route('welcome')}}" type="button" style="background-color: rgb(255,15,0);">Fermer</a></div>
    </div>
    </div>
    </div>
    </div>
   

 @endsection
