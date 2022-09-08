@extends('welcome')
@section('content')
<div class=" border rounded-1 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
<div class="card ">
<div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
<h5>Liste des productions en cours</h5>
</div>
     <div class="card-body" >
        <div class=" mr-2 col-8 card bg-body rounded shadow-sm" style="margin-left: -20px;width:500px;height:200px">
                <div class="card-body"style="width:600px;" > 
                <form style="height: 50px; margin-top: 4px;margin-left: 0px;width: 348px;" method="post" action="{{route('fact_en_cours_four')}}">
                 @csrf
                <div class=" form-group row"  >
                <label for="util" class="col-sm-4 form-label" >dépôt: </label>
                <div class=" col-sm-12">
                <select class="form-control" style="margin-left: 68px;margin-top: -40px;">
                <option value=""></option>
                @foreach($depots as $depot)
                    <option value="{{$depot->code_matiere}}">{{$depot->libelle}}</option>
                @endforeach
                </select>
                 </div>
                 </div>

                 <div class=" form-group row"  >
                <label for="util" class="col-sm-4 form-label" >Equipe: </label>
                <div class=" col-sm-12">
                <select class="form-control" style="margin-left: 68px;margin-top: -40px;">
                <option value=""></option>
                @foreach($equipes as $equipe)
                    <option value="{{$equipe->code_equipe}}">{{$equipe->libelle}}</option>
                @endforeach
                </select>
                 </div>
            </div>  
            <button class="btn btn-success" type="button" style="margin-left:70px;margin-top:2px;width:350px;">Afficher</button>
            </form>
            </div>
            </div>
            </div>
           

        <div class=" card bg-body rounded shadow-sm ">
            <div class="card-body"> 
            <table class="table table-bordered ">
  <thead class=" bg-light">
    <tr>
      <th scope="col">....</th>
      <th scope="col" class="text-center">Numéro</th>
      <th scope="col" class="text-center">Date</th>
      <th scope="col" class="text-center">Equipe</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><button class="btn btn-dark"></button></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
    </div>

    
    <div class="mb-3  border-warning d-flex justify-content-center"  style="">
    <button class="btn btn-success mr-2" type="button" style="">Détail production</button>
    <button class="btn btn-primary" type="button" style="color: #19aa53;">OK</button>
    <a class="btn btn-danger" href="{{route('welcome')}}" type="button" style="margin-left: 5px;background-color: rgb(255,15,0);">Fermer</a></div>
    </div>

    </div>
    </div>
    </div>
 @endsection
