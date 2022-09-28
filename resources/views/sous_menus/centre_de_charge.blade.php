@extends('welcome')
@section('content')
<div class=" border rounded-1 shadow" style="width: 1400px;margin-top: 0px;margin-left: 120px;">

<div class=" card-header d-flex justify-content-center ">
<h5>Gestion des charges directes et indirectes</h5>
</div>
<div class="card-body  rounded-1" style="margin-top: 0px;margin-left: 0px;">
        <div class=" row mb-4" style="margin-top: -20px;">
        <a href="{{('centre_de_charge')}} " class="btn btn-dark mr-2">Charges directes</a>
        <a href="" class="btn btn-dark mr-2">Charges indirectes</a>
        <a href="" class="btn btn-dark">Imputation des charges indirectes</a>
        </div>
      <div class="row rounded-1" style="width:1380px; margin-top: 7px;margin-left: -10px;margin-right: 7px;">
        <div class="table-responsive">
        <table class="table table-hover table-bordered"  >
        <thead>
        <tr>
        <th></th>
        <th></th>
        <th>Nature de la charge</th>
        <th>Unité de consommation</th>
        <th>Valeur unitaire</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td></td>
        <td><button class="btn btn-primary" type="button" style="width: 49px;height: 23px;"></button></td>
        <td></td>
        <td></td>
        <td></td>
        </tr><tr>
        </tr>
        </tbody>
        </table>
</div>
</div>
                <div class="row">
                <label style="margin-left:0px;">Nombre:</label>
                    <div class="col">
                    <input type="text" class="form-control" readonly style="margin-left:0px;width:125px;font-size:20px;height:45px;">
                    </div>
                </div>
                <div class="row" >
                        <fieldset class="border p-2" style="width: 1370px;margin-left:10px;">
                        <legend class="w-auto">Enregistrement</legend>
                        <div class="row">
                        <div class=" ml-3 col col-sm-4" >
                                <div class="row form-group">
                                <label for="">Nature de la charge</label>
                                <div class="col">
                                <input type="text" class="form-control" style="margin-left:0px;width:270px;font-size:20px;height:45px;">
                                </div>
                                </div>
                        </div>
                        <div class=" col col-sm-6" style="margin-left: 40px;">
                                <div class="row form-group ">
                                <label style="margin-left:0px;" for="">Unité de consommation:</label>
                                <div class="col">
                                <input type="text" class="form-control" style="margin-left:0px;width:200px;font-size:20px;height:45px;">
                                </div>
                                <label style="margin-left:210px;">Valeur unitaire:</label>
                                <div class="col">
                                <input type="text" class="form-control" style="margin-left:0px;width:125px;font-size:20px;height:45px;">
                                </div>
                                </div>
                        </div>
                        </div>
                </fieldset>
                </div>


<div class="d-flex justify-content-center mt-4 mb-2"  >
<button class="btn btn-primary border rounded" type="button" style="background: rgb(6,164,89);">Enregistrer</button>
<button class="btn btn-primary border rounded" type="button" style="background: rgb(6,164,89);">Imprimer</button>
<button class="btn btn-primary border rounded" type="button" style="background: rgb(3,134,15);">Modifier</button>
<button class="btn btn-primary border rounded" type="button" style="background: rgb(1,194,69);">Supprimer</button>
<button class=" btn btn-danger border rounded" type="button" style="background: rgb(253,42,13);">Quitter</button>
</div>
</div>
</div>

 @endsection
