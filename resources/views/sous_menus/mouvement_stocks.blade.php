@extends('welcome')
@section('content')
<div class=" border rounded-1 shadow" style="width: 1400px;margin-top: 0px;margin-left: 120px;">
<div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
<h5>Liste des factures fournisseur</h5>
</div>
<div class="card  rounded-1" style="width: 430px;margin-top: 1px;margin-left: 7px;">
<div class="mb-3"  >
<label class="form-label" style="width: 87.6px;font-size: 20px;">Dépôt:&nbsp;</label>
<select style="width: 300px;height: 40px; font-size: 20px;margin-top: 10px;"></select>
</div>
<div>
<label class="form-label" style="width: 87.6px;font-size: 20px;">Type:&nbsp;</label>
<select style="width: 300px;height: 40px; font-size: 20px;"><option value="">
</option><option value="">Matière première</option>
<option value="">Produit</option>
<option value="">Marchandise</option>
</select>
<div>





</div
></div>
</div>
<div class="card rounded-1" style="margin-top: 7px;margin-left: 7px;margin-right: 7px;">
<div class="table-responsive">
<table class="table table-hover table-bordered"  >
        <thead>
        <tr>
        <th></th>
        <th></th>
        <th>Code</th>
        <th>Désignation</th>
        <th>Stock réel</th>
        <th>Approvisionnement</th>
        <th>Sortie diverse</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td></td>
        <td><button class="btn btn-primary" type="button" style="width: 49px;height: 23px;"></button></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr><tr>
        </tr>
        </tbody>
</table>
</div>
</div>
<div style="margin-top: 11px;">


<!-- <div class="bg-dark form-group row "   style="height: 50px;width: 350px;margin-left:0px;" >
                <label for="util" class="col-sm-8 form-label" style=" font-size: 18px;margin-top: 13px" >Date du jour: </label>
                <div class=" col-sm-4">
                <input style="height: 30px; width: 200px;font-size: 20px; margin-left:-100px;margin-top: 10px;" type="text" id="datepicker" readonly="readonly" class="form-control" value="{{date('d - m - y')}} " name="date_du_jour">
                </div>
                </div> -->

 <div class=" form-group row"  >
<label for="util" class=" form-label" style="margin-left:20px;" >Date du jour: </label>
<div class=" col-sm-4">
<input style="margin-left: 0px;font-weight: bold;width: 250px;" type="text" id="datepicker2" readonly="readonly" value="{{date('d-F-y')}}" name="date_debut">     
</div>
</div>

<div class=" form-group row" style="margin-top: -60px;margin-left:500px"  >
<label class="form-label" style="margin-left: 10px;">Num Approv:</label>
<div class=" col-sm-4">
<input type="text"  value="MS001913">
</div>
</div>
<div class=" form-group row" style="margin-top: -60px;margin-left:900px"  >
<label class="form-label" style="margin-left: 50px;">Libellé:</label>
<div class=" col-sm-4">
<input type="text">
</div>
</div>
<div class="d-flex justify-content-center mt-4 mb-1" s >
<button class="btn btn-primary border rounded" type="button" style="background: rgb(6,164,89);">Enregistrer</button>
<button class="ml-4 btn btn-danger border rounded" type="button" style="background: rgb(253,42,13);">Quitter</button>
</div>
</div>
<div>

 @endsection
