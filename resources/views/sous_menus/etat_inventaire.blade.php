@extends('welcome')
@section('content')
<div class=" border rounded-1 shadow" style="width: 1400px;margin-top: 0px;margin-left: 120px;">
<div class="card ">
<div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
<h5>Inventaire Produits/Matières premières/Marchandises</h5>
</div>
     <div class="card-body ">
      <div class="row " style="margin-left: 0px;width: 1380px;">
        <div class=" mr-2  card rounded shadow-sm mb-4" style="margin-left: -10px;width: 460px;">
                <div class=" card-body" style="height: 200px;width: 448px;" > 
                <form class="" style="height: 30px; margin-top: 4px;margin-left: 18px;width: 348px;" method="post" action="{{route('fact_en_cours_four')}}">
                 @csrf
                <div class=" form-group row" style="margin-bottom: 0px" >
                <label for="util" class="col-sm-4 form-label" >dépôt: </label>
                <div class=" col-sm-12">
                <select class="form-control" style="margin-left: 65px;margin-top: -40px;">
                <option value=""></option>
                @foreach($depots as $depot)
                    <option value="{{$depot->code_matiere}}">{{$depot->libelle}}</option>
                @endforeach
                </select>
                 </div>
                 </div>
                 <div class=" form-group row" style="margin-top: 5px" >
                 <label for="util" class="col-sm-8 form-label" style="margin-top: 10px;" >Date: </label>
                <div class=" col-sm-4">
                <input type="text" id="datepicker" style="font-size: 20px;margin-bottom: 0px;margin-left: -90px;margin-top: 10px;width: 250px;" readonly="readonly" class="form-control" value="{{date('d-F-Y')}} " name="date_debut">
                </div>
                </div>

                 <div class=" form-group row" style="margin-top: 15px" >
                <label for="util" class="col-sm-8 form-label" >Valorisation: </label>
                <div class=" col-sm-12">
                <select class="form-control" style="font-size: 20px;margin-left: 160px;margin-top: -40px;width: 250px;">
                <option value=""></option>
                <option value="">Coût standard</option>
                <option value="">CMUP</option>
                <option value="">Prix d'achat</option>
                <option value="">Dernier Prix d'achat</option>
                <option value="">Prix de vente</option>
                
                </select>
                 </div>
                 </div>
                
                </div>  
                <div style="margin-left: 0px;margin-top: 10px;margin-bottom: 10px;">
                <label class="form-label" style="width: 87.6px;font-size: 20px;margin-left: 35px;">Type:</label>
                <select class="form-control" style="margin-top: -40px;font-size: 20px;width: 350px;margin-left: 100px;height: 40px;">
                  <option value="">
                  </option><option value="">Matière première</option>
                  <option value="">Produit</option>
                  <option value="">Marchandise</option>
                  <option value="">Tous les stocks</option>
                  </select>
                  <div>

                <button class="btn btn-secondary" type="button" style="width: 440px;height: 40px; margin-top: 5px;margin-bottom: 5px;margin-left: 10px;">Afficher</button>
                </form>
                </div>
                </div>
                </div>

            <div class=" col-12 card bg-body rounded shadow-sm " style="width:1380px;margin-left: -15px;">
                <div class=" card-body" style="width:1380px;margin-left: -15px;"> 
                <table class="table table-bordered ">
      <thead class=" bg-light">
        <tr>
          <th scope="col">....</th>
          <th scope="col" class="text-center">Référence</th>
          <th scope="col" class="text-center">Désignation</th>
          <th scope="col" class="text-center">Stock à date</th>
          <th scope="col" class="text-center">Stock magasin</th>
          <th scope="col" class="text-center">Unité de stockage</th>
          <th scope="col" class="text-center">Coût unitaire</th>
          <th scope="col" class="text-center">Montant</th>
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
          <td></td>
        </tr>
      </tbody>
    </table>

    <div class=" form-group row col-sm-8 mt-4" >
    <label for="util" class="col-sm-4 form-label" style="font-size:20px;margin-right:-140px;">Valeur Totale: </label>
    <div class=" col-sm-4">
    <input class="form-control" readonly >
    </div>
    <button class="btn btn-primary " type="button" style="background-color: #19aa53;margin-right:10px;">Imprimer</button>
    <a class="btn btn-danger" href="{{route('welcome')}}" type="button" style=";background-color: rgb(255,15,0);">Fermer</a>
    </div>
    </div>
       

        
      
    </div>
    </div>
    </div>

 @endsection
