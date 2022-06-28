@extends('welcome')
@section('content')
<div class="container">
<div class="card container-fluid mb-4">
<div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
<h5>Inventaire Produits/Matières premières/Marchandises</h5>
</div>
     <div class="card-body ">
      <div class="row " style="margin-left: 0px;width: 1050px;">
        <div class=" mr-2  card rounded shadow-sm mb-4" style="margin-left: 90px;width: 460px;">
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
                <input type="text" id="datepicker" style="font-size: 20px;margin-bottom: 0px;margin-left: -90px;margin-top: 10px;width: 250px;" readonly="readonly" class="form-control" value="{{date('Y - M - d')}} " name="date_debut">
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

                <div class="row" >
                <div class=" form-group row" style="margin-top: -100px;font-size: 20px;width: 350px;margin-left: 600px;height: 40px;" >
                    <label for="util" class="col-sm-12 form-label" style="margin-left: 70px;">Valeur totale: </label>
                    <div class=" col-sm-12">
                    <input class="form-control" readonly style="margin-top: 0px;font-size: 20px;width: 350px;margin-left: 0px;height: 40px;">
                    </div>
                </div>

            <div class=" col-12 card bg-body rounded shadow-sm " style="width:1050px;margin-left: 0px;">
                <div class=" card-body" style="width:1030px;margin-left: 0px;"> 
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
    <div class="mb-3 btn-group border-warning" role="group" style="margin-left: 0px;">
        <button class="btn btn-primary" type="button" style="margin-left: 372px;background-color: #19aa53;">Imprimer</button>
        <a class="btn btn-danger" href="{{route('welcome')}}" type="button" style="margin-left: 5px;background-color: rgb(255,15,0);">Fermer</a></div>
        </div>

        </div>

        
      
    </div>
    </div>
    </div>

 @endsection
