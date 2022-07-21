@extends('welcome')
@section('content')
<div class="container">
<div class="card container-fluid">
<div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
<h5>Liste des productions en cours</h5>
</div>
     <div class="card-body ">
    <div class="row">
        <div class=" mr-2 col-8 card bg-body rounded shadow-sm mb-4" style="margin-left: 0px;">
                <div class="card-body" > 
                <form style="height: 30px; margin-top: 4px;margin-left: 0px;width: 348px;" method="post" action="{{route('fact_en_cours_four')}}">
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

                 <button class="btn btn-secondary" type="button" style="height: 40px; margin-top: -45px;margin-left: 450px;">Afficher</button>
            </div>  
            </form>
            </div>
            </div>
           

        <div class=" col-12 card bg-body rounded shadow-sm ">
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

    
    <div class="mb-3 btn-group border-warning" role="group" style="width: 990px;margin-left: 20px;">
    <button class="btn btn-success" type="button" style="width: 148px;">Détail production</button>
    <button class="btn btn-primary" type="button" style="margin-left: 572px;width: 96px;background-color: #19aa53;">OK</button>
    <a class="btn btn-danger" href="{{route('welcome')}}" type="button" style="margin-left: 5px;background-color: rgb(255,15,0);">Fermer</a></div>
    </div>

    </div>
    </div>
    </div>

 @endsection
