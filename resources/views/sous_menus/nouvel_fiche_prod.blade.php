@extends('welcome')
@section('content')
<body style="width: 1500px;margin-left: 20px;">
<div class=" border rounded-0 shadow" style="width: 1500px;margin-top: 0px;">
<h3 class="text-center bg-light" style="height: 50px;background: var(--bs-gray-100);margin-bottom: 26px;">Gestion des fiches de production</h3>
<div class=" row " style="width: 1500px;margin-left: 0px;">
<div class="col" style="margin-left: 0px;">
<div class="border rounded" style="width: 740px;margin-left: 0px;">
<div style="height: 33px;margin-top: 16px;">
<label class="form-label" style="margin-left: 2px;margin-top: 0px;">Dépôt:</label>
<select style="width: 530px;margin-left: 30px;margin-bottom: 10px;font-size: 30px;">
<optgroup label="This is a group">
<option value="12" selected="">
</option></optgroup>
</select>
</div>
<div>
<div class=" row" style="width: 700px;margin-top: 10px">
<div class="col" style="width: 350px;margin-top: 16px;">
<label class="form-label" style="margin-left: 2px;">Equipe:</label>
<select style="width: 188px;margin-left: 25px;margin-top: -10px;font-size: 30px;">
<optgroup label="This is a group"><option value="12" selected=""></option></optgroup>
</select>
</div>
<div class="col" style="width: 290px;">
<label for="util" class="col-sm-8 form-label" style="margin-left: -30px;" >Date de début: </label>
<div class=" col-sm-4">
<input type="text" id="datepicker" style="font-size:16px;margin-bottom: 15px;margin-left: 120px;margin-top: -35px;width: 200px;" readonly="readonly" class="form-control" value="{{date('Y - M - d')}} " name="date_debut">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col" style="width: 542px;">
<div style="width: 545px;margin-top: 8px;">
<label class="form-label">Num de production:</label>
<input type="text" style="margin-left: 14px;">
</div>
</div>
</div>
<div>
<label class="form-label" style="font-weight: bold;font-size: 18px;margin-top: 10px;width: 201px;margin-left: 5px;">Production du jour</label>
<button class="btn btn-primary" type="button" style="width: 42.5px;height: 22px;color: var(--bs-red);background: var(--bs-pink);margin-left: 500px;"></button>
<label class="form-label" style="font-weight: bold;font-size: 18px;margin-top: 10px;width: 301px;margin-left: 10px;">Consommation du jour</label>
<button class="btn btn-primary" type="button" style="background: var(--bs-gray-400);color: rgb(23,18,18);margin-left: 235px;margin-top: -15px;">Calculer</button>
<button class="btn btn-primary" type="button" style="width: 42.5px;height: 22px;color: var(--bs-red);background: var(--bs-pink);margin-left: 19px;margin-right: 0px;"></button>
</div>
<div class="container" style="margin-top: 0px;margin-bottom: 11px;">
<div class="row">
<div class="col-md-6">
<div class="table-responsive" style="margin-left: -190px;width: 750px">
<table class="table table-hover table-bordered">
<thead style="font-size:14px;">
<tr>
<th></th>
<th>Réference</th><th>Désignation</th>
<th>Stock réel</th>
<th>Quantité</th>
<th>Prix contrôle</th><th>Montant</th>
</tr>
</thead>
<tbody>
<tr>
<td><button class="btn btn-primary" type="button" style="width: 10px;height: 22px;color: var(--bs-red);background: var(--bs-gray-800);margin-left: -4px;"></button></td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>
</div>
</div>
<div class=" col-md-6" >
<div style="margin-left: 0px;width: 720px;" class=" table-responsive" >
<table class="table table-hover table-bordered"  style="width: 700px">
<thead>
<tr>
<th style="width: 20px;height: 58px;"></th>
<th>Réference</th>
<th style="margin-left: 0px;">Désignation</th>
<th>Stock réel</th>
<th>Quantité</th>
<th>Prix d'achat</th>
<th>Montant</th>
</tr>
</thead>
<tbody>
<tr>
<td style="width: 20px;"><button class="btn btn-primary" type="button" style="width: 10px;height: 22px;color: var(--bs-red);background: var(--bs-gray-800);margin-left: -3px;"></button></td>
<td></td>
<td style="margin-left: 0px;">
</td><td>&nbsp;</td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script></body></html>

 @endsection
