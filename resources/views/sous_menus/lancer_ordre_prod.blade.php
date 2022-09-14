@extends('welcome')
@section('content')
<div class=" border rounded-0 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
<div class=" border rounded-0 shadow" style="width: 1380px;margin-top: 0px;">
    <div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
    <h5>Lancer un ordre de production</h5>
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
                      <label for="util" class="col-sm-4 form-label" style="margin-left:0px" >Equipe: </label>
                      <div class=" col-sm-6">
                      <select class="form-control" style="margin-left: -50px;width:300px;">
                      <option value=""></option>
                      @foreach($equipes as $equipe)
                          <option value="{{$equipe->code_equipe}}">{{$equipe->libelle}}</option>
                      @endforeach
                      </select>
                      </div>
                    </div>
                    <div class=" form-group row mt-2"  >
                      <label for="util" class="col-sm-4 form-label" style="margin-left:0px" >Standard: </label>
                      <div class=" col-sm-6">
                      <select class="form-control" style="margin-left: -50px;width:300px;">
                      <option value=""></option>
                      </select>
                      </div>
                    </div>
                  
                    <button class="btn btn-secondary mb-2" type="button" style="width: 400px;height: 50px; margin-top: 0px;margin-left:0px;">Calculer</button>
                </div>
            </div> 
            
             
            </div> 
            <div class="row  bg-body rounded shadow-sm " style="width: 1380px;margin-left: 0px;">
            <table class="table table-bordered " style="width: 1350px;margin-left: 0px;" >
                <thead class=" bg-light">
                <tr>
                  <th scope="col">....</th>
                  <th scope="col" class="text-center">Référence</th>
                  <th scope="col" class="text-center">Désignation</th>
                  <th scope="col" class="text-center">Quanité</th>
                  <th scope="col" class="text-center">Prix de contrôle</th>
                  <th scope="col" class="text-center">Montant</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td style=""><button class="btn btn-warning" type="button" style="width: 10px;height: 22px;color: var(--bs-red);background: var(--bs-gray-800);margin-left: -3px;"></button></td>
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
            <div class="mt-4  mb-4 form-group row" >
                <label for="util" class="form-label" style="margin-left:20px;">Totale commande: </label>
                <div class="col col-sm-4">
                <input class="form-control" readonly style="width:250px;">
                </div>
                <button class="mr-3 btn btn-primary " type="button" style="background-color: #19aa53;">Enregistrer</button>
                <a class="btn btn-danger mr-3 " href="{{route('welcome')}}" type="button" style="background-color: rgb(255,15,0);">Fermer</a></div>
            </div>
         </form>
      </div>
   </div>
   

 @endsection
