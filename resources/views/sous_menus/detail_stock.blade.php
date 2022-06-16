@extends('welcome')
@section('content')
<div class="container">
<div class="card container-fluid">
<div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
<h5>Détail des stocks</h5>
</div>
     <div class="card-body ">
    <div class="row">
        <div class=" mr-2 col-8 card bg-body rounded shadow-sm mb-4" style="margin-left: 140px;">
                <div class="card-body" > 
                <form style="height: 200px; margin-top: 4px;margin-left: 0px;width: 548px;" method="post" action="{{route('fact_en_cours_four')}}">
                 @csrf
                <div class=" form-group row "   style="height: 200px;width: 670px;" >
                <label for="util" class="col-sm-4 form-label" style="font-size: 28px;margin-top: 0px" >dépôt: </label>
                <div class=" col-sm-12"  >
                <select class="form-control" style="width: 400px;; margin-left: 130px;margin-top: -60px;">
                <option value=""></option>
                @foreach($depots as $depot)
                    <option value="{{$depot->code_matiere}}">{{$depot->libelle}}</option>
                @endforeach
                </select>
                </div>
                 <div class="form-check form-check-inline" >
                <input class="form-check-input"  style="width: 20px;height: 60px;" type="radio" name="inlineRadioOptions" value="option1" checked>
                <label class="form-check-label" for="inlineRadio1" style="font-size: 28px;">produit</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input"  style="width: 20px;height: 60px;"   type="radio" name="inlineRadioOptions" value="option2">
                <label class="form-check-label" for="inlineRadio2"  style="font-size: 28px;">matiere première</label>
                </div>
                <div class="form-check form-check-inline" style="margin-left: 0px;">
                <input class="form-check-input"  style="width: 20px;height: 60px;"   type="radio" name="inlineRadioOptions"  value="option3">
                <label class="form-check-label" for="inlineRadio3" style="font-size: 28px;">marchandise</label>
                </div>



                <div class="option1 col-sm-12" style="width: 400px; margin-left: 0px;margin-top: -40px;">
                <select class="form-control" style="width: 400px; margin-left: 130px;margin-top: 40px;">
                <option value=""></option>
                @foreach($produits as $produit)
                    <option value="{{$produit->id}}">{{$produit->designation}}</option>
                @endforeach
                </select>
                 </div>

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
            </form>
            </div>
            </div>
           

        <div class=" col-12 card bg-body rounded shadow-sm ">
            <div class="card-body"> 
            <table class="table table-bordered ">
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

    
    <div class="mb-3 btn-group border-warning" role="group" style="width: 990px;margin-left: 20px;">
    <button class="btn btn-success" type="button" style="width: 148px;">Afficher</button>
    <button class="btn btn-primary" type="button" style="margin-left: 572px;width: 96px;background-color: #19aa53;">imprimer</button>
    <a class="btn btn-danger" href="{{route('welcome')}}" type="button" style="margin-left: 5px;background-color: rgb(255,15,0);">Fermer</a></div>
    </div>

    </div>
    </div>
    </div>

   


 @endsection
