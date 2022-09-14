@extends('welcome')
@section('content')
<div class=" border rounded-0 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
<div class="card">
<div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
<h5>Impression des factures fournisseur</h5>
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
                <select class="form-control" style="margin-left: 140px;margin-top: -40px;width:270px;">
                <option value=""></option>
                @foreach($depots as $depot)
                    <option value="{{$depot->code_matiere}}">{{$depot->libelle}}</option>
                @endforeach
                </select>
                 </div>
            </div>

            <div class=" form-group row mt-4" >
                <label for="util" class="col-sm-6 form-label" >Fournisseur: </label>
                <div class=" col">
                <select class="form-control" style="margin-left:-50px;width:270px;">
                <option value=""></option>
                @foreach($fournisseurs as $fournisseur)
                    <option value="{{$fournisseur->codefournisseur}}">{{$fournisseur->nom}}</option>
                @endforeach
                </select>
                 </div>
            </div>    



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
           

            <button class="btn btn-secondary" type="button" style="width: 440px;height: 50px; margin-top: 80px;margin-bottom: 5px;margin-left: 10px;">Afficher</button>
            </form>
            </div>
             </div>
            
            </div> 
            </div>

        <div class=" col-12 card bg-body rounded shadow-sm " style="width:1370px;margin-left:0px;">
            <div class="card-body"> 
            <table class="table table-bordered table-hover" style="width:1350px;margin-left:-30px;">
  <thead class=" bg-light">
    <tr>
      <th scope="col">Num facture</th>
      <th scope="col">Date</th>
      <th scope="col">Fournisseur</th>
      <th scope="col">Total</th>
      <th scope="col">remise</th>
      <th scope="col">Net à payer</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
                    <div class="mt-3 d-flex justify-content-end" >
                    <button type="submit" class=" mr-4 btn btn-primary">Imprimer la facture</button>
                    <a href="{{route('welcome')}}" class="btn btn-danger">Retour</a>
                    </div>
    </div>
    </div>
            
                
            
    </div>
    </div>
    </div>
 @endsection
