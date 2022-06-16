@extends('welcome')
@section('content')
<div class="container">
<div class="card container-fluid">
<div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
<h5>Liste des mouvements des stocks</h5>
</div>
     <div class="card-body ">
      <div class="row " style="margin-left: 0px;width: 760px;">
        <div class=" mr-2  card rounded shadow-sm mb-4" style="margin-left: 190px;width: 460px;">
                <div class=" card-body" style="height: 200px;width: 448px;" > 
                <form class="" style="height: 30px; margin-top: 4px;margin-left: 18px;width: 348px;" method="post" action="{{route('fact_en_cours_four')}}">
                 @csrf
                <div class=" form-group row"  >
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
                 
                 <div class="bg-dark form-group row" style="height: 0px;margin-left: -20px">
                <label for="util" class="col-sm-8 form-label" >Date de début: </label>
                <div class=" col-sm-4">
                <input type="text" id="datepicker" style="font-size: 20px;margin-bottom: 5px;margin-left: -90px;margin-top: 0px;width: 250px" readonly="readonly" class="form-control" value="{{date('Y - M - d')}} " name="date_debut">
                </div>
                <label for="util" class="col-sm-8 form-label" >Date de fin: </label>
                <div class=" col-sm-4">
                <input type="text" id="datepicker2" style="font-size: 20px;margin-left: -90px;margin-top: 0px;width: 250px" readonly="readonly" class="form-control" value="{{date('Y - M - d')}} " name="date_debut">     
                 </div>
                </div> 
            </div>  
            <button class="btn btn-secondary" type="button" style="width: 440px;height: 40px; margin-top: 5px;margin-bottom: 5px;margin-left: 10px;">Afficher</button>
            </form>
            </div>
            </div>
            </div>

        <div class=" col-12 card bg-body rounded shadow-sm ">
            <div class="card-body"> 
            <table class="table table-bordered ">
  <thead class=" bg-light">
    <tr>
      <th scope="col">....</th>
      <th scope="col" class="text-center">Numéro</th>
      <th scope="col" class="text-center">Libellé</th>
      <th scope="col" class="text-center">Date d'opération</th>
      <th scope="col" class="text-center">Type</th>
      <th scope="col" class="text-center">Nature</th>
      <th scope="col" class="text-center">Dépôt</th>
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

    
    <div class="mb-3 btn-group border-warning" role="group" style="width: 990px;margin-left: 20px;">
    <button class="btn btn-success" type="button" style="width: 148px;">Détail Facture</button>
    <button class="btn btn-primary" type="button" style="margin-left: 572px;width: 96px;background-color: #19aa53;">OK</button>
    <a class="btn btn-danger" href="{{route('welcome')}}" type="button" style="margin-left: 5px;background-color: rgb(255,15,0);">Fermer</a></div>
    </div>

    </div>
    </div>
    </div>

 @endsection
