@extends('welcome')
@section('content')
<div class=" border rounded-1 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
<div class="card ">
<div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
<h5>Liste des mouvements des stocks</h5>
</div>
     <div class="card-body ">
      <div class="row " style="margin-left: -20px;width: 1400px;">
        <div class=" mr-2  card rounded shadow-sm mb-4" style="margin-left: 2px;width: 560px;">
                <div class=" card-body" style="height: 200px;width: 548px;" > 
                <form class="" style="height: 30px; margin-top: 0px;margin-left: 18px;width: 448px;" method="post" action="{{route('fact_en_cours_four')}}">
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
                <input type="text" id="datepicker" style="font-size: 20px;margin-bottom: 5px;margin-left: -90px;margin-top: 0px;width: 280px" readonly="readonly" class="form-control" value="{{date('Y - F - d')}} " name="date_debut">
                </div>
                <label for="util" class="col-sm-8 form-label" >Date de fin: </label>
                <div class=" col-sm-4">
                <input type="text" id="datepicker2" style="font-size: 20px;margin-left: -90px;margin-top: 0px;width: 280px" readonly="readonly" class="form-control" value="{{date('Y - F - d')}} " name="date_debut">     
                 </div>
                </div> 
            </div>  
            <button class="btn btn-secondary" type="button" style="width: 500px;height: 50px; margin-top: 5px;margin-bottom: 5px;margin-left: 45px;">Afficher</button>
            </form>
            </div>
            </div>
            </div>

        <div class=" col card bg-body rounded shadow-sm "style="width:1370px;margin-left:2px;">
            <div class="card-body"  style="width:1400px;margin-left:-30px;"> 
            <table class="table table-bordered " >
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
    </div>

    <div class=" d-flex justify-content-center" style="margin-top:5px;margin-bottom:3px;">
    <button class="btn btn-success " type="button" >Détail Facture</button>
    <button class="ml-3 btn btn-primary" type="button" style="background-color: #19aa53;">OK</button>
    <a class="btn btn-danger ml-3 " href="{{route('welcome')}}" type="button" style="background-color: rgb(255,15,0);">Fermer</a></div>
    </div>

    </div>
    </div>
    </div>

 @endsection
