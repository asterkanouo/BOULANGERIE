@extends('welcome')
@section('content')
<div class=" border rounded-0 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
<div class=" border rounded-0 shadow" style="width: 1380px;margin-top: 0px;">
    <div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
    <h5>Palmarès de production par produit</h5>
    </div>
    <div class="card-body ">
        <form class=""  style=" " method="post" action="{{route('fact_en_cours_four')}}">
        @csrf
       
          <div class="row">
            <div class="col  col-sm-6">
                <div class="mr-2 card  rounded shadow-sm mb-4" style="width:420px;">
                    <div class=" form-group row mt-2"  >
                      <label for="util" class="col-sm-4 form-label" style="margin-left:0px" >dépôt: </label>
                      <div class=" col-sm-6">
                      <select class="form-control" style="margin-left: -50px;width:300px;">
                      <option value=""></option>
                      @foreach($depots as $depot)
                          <option value="{{$depot->code_matiere}}">{{$depot->libelle}}</option>
                      @endforeach
                      </select>
                      </div>
                    </div>
                    <div class=" form-group row mt-2"  >
                      <label for="util" class="col-sm-4 form-label" style="margin-left:0px" >Produit: </label>
                      <div class=" col-sm-6">
                      <select class="form-control" style="margin-left: -50px;width:300px;">
                      <option value=""></option>
                      @foreach($produits as $produit)
                          <option value="{{$produit->code_matiere}}">{{$produit->libelle}}</option>
                      @endforeach
                      </select>
                      </div>
                    </div>
                    <div class="bg-dark form-group row" style="height: 0px;margin-left: -10px;margin-top: 10px;">
                      <label for="util" class="col-sm-4 form-label" >Date de début: </label>
                      <div class=" col-sm-4">
                      <input type="text" id="datepicker" style="font-size: 20px;margin-top: 0px;margin-left:-22px;margin-top: 0px;width: 270px;" readonly="readonly" class="form-control" value="{{date('d F Y')}} " name="date_debut">
                      </div>
                    </div>
                    <div class="bg-dark form-group row" style="height: 0px;margin-left: -10px;margin-top:65px;">
                      <label for="util" class="col-sm-4 form-label" >Date de fin: </label>
                      <div class=" col-sm-4">
                      <input type="text" id="datepicker2" style="font-size: 20px;margin-left:-22px;margin-top: 0px;width: 270px;" readonly="readonly" class="form-control" value="{{date('d F Y')}} " name="date_debut">     
                      </div>
                      </div> 
                    <button class="btn btn-secondary mb-4" type="button" style="width: 400px;height: 50px; margin-top: 50px;margin-left:0px;">Afficher</button>
                </div>
            </div> 
            <div class="col col-sm-6 ">
              <div class=" form-group row col-sm-6 mt-4" >
                <label for="util" class="col-sm-8 form-label" style="font-size:20px;">Valeur: </label>
                <div class=" col-sm-4">
                <input class="form-control" readonly style="margin-top: 0px;font-size: 20px;width: 250px;margin-left: -50px;height: 40px;">
                </div>
              </div>
              <div class=" form-group row col-sm-6 mt-2" >
                <label for="util" class="col-sm-8 form-label" style="font-size:20px;">Quantité: </label>
                <div class=" col-sm-4">
                <input class="form-control" readonly style="margin-top: 0px;font-size: 20px;width: 250px;margin-left: -50px;height: 40px;">
                </div>
              </div>
            </div> 
            <div class="row  bg-body rounded shadow-sm " style="width: 1380px;margin-left: 0px;">
            <table class="table table-bordered " style="width: 1350px;margin-left: 0px;" >
                <thead class=" bg-light">
                <tr>
                  <th scope="col">....</th>
                  <th scope="col" class="text-center">Référence</th>
                  <th scope="col" class="text-center">Date</th>
                  <th scope="col" class="text-center">Désignation</th>
                  <th scope="col" class="text-center">Quantité</th>
                  <th scope="col" class="text-center">Prix de contrôle</th>
                  <th scope="col" class="text-center">Valeur</th>
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
            <div class="mt-4 d-flex justify-content-center" >
                <button class="mr-3 btn btn-primary" type="button" style="background-color: #19aa53;">Imprimer</button>
                <a class="btn btn-danger mr-3 " href="{{route('welcome')}}" type="button" style="background-color: rgb(255,15,0);">Fermer</a></div>
            </div>
         </form>
      </div>
   </div>
</div>
   

 @endsection
