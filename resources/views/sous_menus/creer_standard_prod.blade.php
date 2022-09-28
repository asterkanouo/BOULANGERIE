@extends('welcome')
@section('content')
<div class=" border rounded-1 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
<div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
<h5>gestion des standards de production</h5>
</div>
<div class="card-body  rounded-1" style="margin-top: 1px;margin-left: 7px;">
      <div class="row rounded-1" style="margin-top: 7px;margin-left: 7px;margin-right: 7px;">
        <div class="table-responsive">
        <table class="table table-hover table-bordered"  >
        <thead>
        <tr>
        <th></th>
        <th></th>
        <th>Libellé</th>
        <th>Dépôt</th>
        <th>Equipe</th>
        <th>Produit</th>
        <th>Qté produit </th>
        <th>Matiere première</th>
        <th>Qté MP</th>
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
        <td></td>
        <td></td>
        </tr><tr>
        </tr>
        </tbody>
        </table>
</div>
</div>

                <div class="row" >
                        <fieldset class="border p-2" style="width: 1370px;margin-left:-10px;">
                        <legend class="w-auto">Enregistrement</legend>
                        <div class="row">
                        <div class=" ml-3 col col-sm-4" >
                                <div class="row form-group">
                                <label for="">Libellé</label>
                                <div class="col">
                                <input type="text" class="form-control" style="margin-left:15px;width:270px;font-size:20px;height:45px;">
                                </div>
                                </div>
                                <div class="row form-group">
                                <label class="" >Dépôt</label>
                                <div class=" col " style="">
                                <select class="form-control" style="margin-left: 16px;margin-top: 0px;width:270px;">
                                <option value=""></option>
                                @foreach($depots as $depot)
                                    <option value="{{$depot->libelle}}">{{$depot->libelle}}</option>
                                @endforeach
                                </select>
                                </div>
                                </div>
                        </div>
                        <div class=" col col-sm-4" style="margin-left: -10px;">
                                 <div class="row form-group">
                                <label class="" >Equipe:</label>
                                <div class=" col " style="">
                                <select class="form-control" style="margin-left: -10px;margin-top: 0px;width:330px;">
                                <option value=""></option>
                                @foreach($equipes as $equipe)
                                    <option value="{{$equipe->libelle}}">{{$equipe->libelle}}</option>
                                @endforeach
                                </select>
                                </div>
                                </div>
                                <div class="row form-group">
                                <label for="">Qpdrt:</label>
                                <div class="col">
                                <input type="text" class="form-control" style="margin-left:0px;width:125px;font-size:20px;height:45px;">
                                </div>
                                <label style="margin-left:-50px;">Qmp:</label>
                                <div class="col">
                                <input type="text" class="form-control" style="margin-left:0px;width:125px;font-size:20px;height:45px;">
                                </div>
                                </div>
                        </div>
                        <div class=" col col-sm-4" style="margin-left: -20px;">
                                 <div class="row form-group">
                                <label class="" >Produit:</label>
                                <div class=" col " style="">
                                <select class="form-control" style="margin-left: 98px;margin-top: 0px;width:270px;">
                                <option value=""></option>
                                @foreach($produits as $produit)
                                    <option value="{{$produit->designation}}">{{$produit->designation}}</option>
                                @endforeach
                                </select>
                                </div>
                                </div>
                                <div class="row form-group">
                                <label for="">Matière première:</label>
                                <select class="form-control" style="margin-left: 16px;margin-top: 0px;width:270px;">
                                <option value=""></option>
                                @foreach($matiere_ps as $matiere_p)
                                    <option value="{{$matiere_p->element}}">{{$matiere_p->element}}</option>
                                @endforeach
                                </select>
                                </div>
                                </div>
                        </div>
                        </div>
                </fieldset>
                </div>


<div class="d-flex justify-content-center mt-4 mb-2"  >
<button class="btn btn-primary border rounded" type="button" style="background: rgb(6,164,89);">Enregistrer</button>
<button class="btn btn-primary border rounded" type="button" style="background: rgb(3,134,15);">Modifier</button>
<button class="btn btn-primary border rounded" type="button" style="background: rgb(1,194,69);">Supprimer</button>
<button class=" btn btn-danger border rounded" type="button" style="background: rgb(253,42,13);">Quitter</button>
</div>
</div>
</div>

 @endsection
