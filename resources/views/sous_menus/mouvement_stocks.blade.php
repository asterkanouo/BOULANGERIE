@extends('welcome')
@section('content')
<div class="border rounded-0" style="width: 1040px;height: 600px;margin-left: 200px;margin-top: 20px;">
<h4 class="text-center" style="background: #efe1e1;height: 43px;">Gestion des stocks</h4>
<div class="border rounded-0" style="width: 430px;margin-top: 1px;margin-left: 7px;">
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
<div class="border rounded-0" style="margin-top: 7px;height: 300px;margin-left: 7px;margin-right: 7px;">
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
<label class="form-label">Date du jour:&nbsp;</label>
<input type="date"  style="margin-left: 7px;">
<label class="form-label" style="margin-left: 54px;">Num Approv:</label>
<input type="text" style="margin-left: 7px;font-weight: bold;width: 117px;" value="MS001913">
<label class="form-label" style="margin-left: 50px;">Libellé:</label>
<input type="text" style="margin-left: 15px;width: 210px;">
</div>
<div class="btn-group" role="group" style="margin-left: 740px;">
<button class="btn btn-primary border rounded" type="button" style="width: 140.5px;font-size: 20px;background: rgb(6,164,89);">Enregistrer</button>
<button class="btn btn-danger border rounded" type="button" style="margin-left: 11px;width: 140.5px;font-size: 20px;background: rgb(253,42,13);">Quitter</button>
</div>
</div>
<div>
</div>

<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/script.min.js"></script>

 @endsection
