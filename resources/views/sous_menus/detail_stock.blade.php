@extends('welcome')
@section('content')
<div class=" border rounded-0 shadow" style="width: 1400px;margin-top: 0px;margin-left: 120px;">
<div class="card ">
<div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
<h5>Détail des stocks</h5>
</div>
     <div class="card-body ">
        <div class="row " style="">
             <div class=" mr-2 col rounded shadow-sm mb-4" style="margin-left: 0px;">
                <form style=" height: 255px; margin-top: 4px;margin-left: 0px;" method="post" action="{{route('fact_en_cours_four')}}">
                 @csrf
                <div class="form-group row "   style="height: 200px;width: 670px;" >
                <div class="card">
                <div class="bg-body card-body" style="height: 245px;width: 800px;" >
                <div class="form-check form-check-inline"> 
                <input class="form-check-input"  style="margin-left:80px; width: 20px;height: 60px;" type="radio" name="inlineRadioOptions" value="option1" checked>
                <label class="form-check-label" for="inlineRadio1" style="font-size: 20px;">produit</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input"  style="width: 20px;height: 60px;"   type="radio" name="inlineRadioOptions" value="option2">
                <label class="form-check-label" for="inlineRadio2"  style="font-size: 20px;">matiere première</label>
                </div>
                <div class="form-check form-check-inline" style="margin-left: 0px;">
                <input class="form-check-input"  style="width: 20px;height: 60px;"   type="radio" name="inlineRadioOptions"  value="option3">
                <label class="form-check-label" for="inlineRadio3" style="font-size: 20px;">marchandise</label>
                </div>

                <div class="option1 col-sm-12" style="width: 400px; margin-left: 0px;margin-top: -40px;">
                <select class="form-control" style="width: 400px; margin-left: 130px;margin-top: 20px;">
                <option value=""></option>
                @foreach($produits as $produit)
                    <option value="{{$produit->id}}">{{$produit->designation}}</option>
                @endforeach
                </select>
                 </div>
                <label for="util" class="col-sm-4 form-label" style="font-size: 28px;margin-top: 0px" >dépôt: </label>
                <div class=" col-sm-12"  >
                <select class="form-control" style="width: 400px; margin-left: 130px;margin-top: -40px;">
                <option value=""></option>
                @foreach($depots as $depot)
                    <option value="{{$depot->code_matiere}}">{{$depot->libelle}}</option>
                @endforeach
                </select>
                </div>
                 <button id="tableau" type="button" class="mt-2 col-sm-10 btn btn-success" >Afficher</button>

                 <!-- <div class="option2 col-sm-12" style="width: 400px; margin-left: 0px;margin-top: -40px;">
                <select class="form-control" style="width: 400px; margin-left: 130px;margin-top: 40px;">
                <option value=""></option>
                @foreach($marchandises as $marchandise)
                    <option value="{{$marchandise->id_mar}}">{{$marchandise->reference}}</option>
                @endforeach
                </select>
                 </div>

                 <div class="option3 col-sm-12" style="width: 400px; margin-left: 0px;margin-top: -40px;">
                <select class="form-control" style="width: 400px; margin-left: 130px;margin-top: 40px;">
                <option value=""></option>
                @foreach($matiere_ps as $matiere_p)
                    <option value="{{$matiere_p->code_matiere}}">{{$matiere_p->element}}</option>
                @endforeach
                </select>
                 </div>  -->
                 </div>  
                 </div>  
                 </div>
            </form>
            </div>

        <div class=" col-12 card bg-body rounded shadow-sm " style="width:1400px;margin-left:0px;">
            
            <table class="table table-bordered" style="width:1380px;margin-left:-10px;">
  <thead class=" bg-light">
    <tr>
      <th scope="col">....</th>
      <th scope="col" class="text-center">Référence</th>
      <th scope="col" class="text-center">Date d'opération</th>
      <th scope="col" class="text-center">Quantité</th>
      <th scope="col" class="text-center">TYpe de mouvement</th>
      <th scope="col" class="text-center">Unité de Stockage</th>
      <th scope="col" class="text-center">Stock progressif</th>
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

   <div class="mt-3 d-flex justify-content-center" >
    <button class="mr-3 btn btn-primary" type="button" style="background-color: #19aa53;">Imprmer</button>
    <a class="btn btn-danger mr-3 " href="{{route('welcome')}}" type="button" style="background-color: rgb(255,15,0);">Fermer</a></div>
    </div>
    </div>

   


 @endsection
