@extends('welcome')
@section('content')
<div class=" border rounded-1 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
<div class="card ">
<div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
<h5>Statistiques sur les transferts des stocks</h5>
</div>
     <div class="card-body ">
      <div class="row " style="margin-left: 0px;width: 1050px;">
        <div class=" mr-2  card rounded shadow-sm mb-4" style="margin-left: -10px;width: 460px;">
                <div class=" card-body" style="height: 200px;width: 548px;" > 
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


                 <div class=" form-group row" style="margin-top: 15px" >
                <label for="util" class="col-sm-4 form-label" >Transfert: </label>
                <div class=" col-sm-12">
                <select class="form-control" style="font-size: 20px;margin-left: 160px;margin-top: -40px;width: 250px;">
                <option value=""></option>
                <option value="">Entrant</option>
                <option value="">Sortant</option>
                </select>
                 </div>
                 </div>
                 
                 <!-- <div class="bg-dark col-sm-12  form-group row" style="height: 90px;" >
                    <label for="util" class="col-sm-8" style="margin-top: 20px;;margin-left: -35px;" >Tranfert:</label>
                    <div class=" col-sm-12">
                    <input type="text" style="margin-left: 90px;margin-top: 0px;width: 300px;" >
                </div>
                </div> -->


                 <div class="bg-dark form-group row" style="height: 0px;margin-left: -20px">
                <label for="util" class="col-sm-8 form-label" >Date de début: </label>
                <div class=" col-sm-4">
                <input type="text" id="datepicker" style="font-size: 20px;margin-bottom: 15px;margin-left: -110px;margin-top: 0px;width: 270px;" readonly="readonly" class="form-control" value="{{date('d F Y')}} " name="date_debut">
                </div>
                <label for="util" class="col-sm-8 form-label" >Date de fin: </label>
                <div class=" col-sm-4">
                <input type="text" id="datepicker2" style="font-size: 20px;margin-left: -110px;margin-top: 0px;width: 270px;" readonly="readonly" class="form-control" value="{{date('d F Y')}} " name="date_debut">     
                 </div>
                </div> 
            </div>  
            <div style="margin-left: 0px;margin-top: 70px;margin-bottom: 10px;">
            <label class="form-label" style="width: 87.6px;font-size: 20px;margin-left: 35px;">Type:</label>
            <select class="form-control" style="margin-top: -40px;font-size: 20px;width: 350px;margin-left: 100px;height: 40px;">
              <option value="">
              </option><option value="">Matière première</option>
              <option value="">Produit</option>
              <option value="">Marchandise</option>
              </select>
              <div>

            <button class="btn btn-secondary" type="button" style="width: 440px;height: 50px; margin-top: 5px;margin-bottom: 5px;margin-left: 10px;">Afficher</button>
            </form>
            </div>
            </div>
            </div>

           
<div class="row">
        <div class=" card bg-body rounded shadow-sm " style="width:1370px;margin-left: 0px;">
            <div class=" card-body" style="width:1380px;margin-left: -15px;"> 
            <table class="table table-bordered ">
  <thead class=" bg-light">
    <tr>
      <th scope="col">....</th>
      <th scope="col" class="text-center">Référence</th>
      <th scope="col" class="text-center">Désignation</th>
      <th scope="col" class="text-center">Quantité</th>
      <th scope="col" class="text-center">prix</th>
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
    </tr>
  </tbody>
</table>
</div>
</div>
</div>



            <div class=" form-group row col-sm-12 mt-4" >
                <label for="util" class="col-sm-4 form-label" style="font-size:20px;">Total mouvement: </label>
                <div class=" col-sm-4">
                <input class="form-control" readonly style="margin-top: 0px;font-size: 20px;width: 250px;margin-left: -150px;height: 40px;">
                 </div>
    <button class="btn btn-primary " type="button" style="margin-left:30px;background-color: #19aa53;">Imprimer</button>
    <a class="btn btn-danger" href="{{route('welcome')}}" type="button" style="margin-left:20px;background-color: rgb(255,15,0);">Fermer</a></div>
    </div>
    </div>

   
    </div>

 @endsection
