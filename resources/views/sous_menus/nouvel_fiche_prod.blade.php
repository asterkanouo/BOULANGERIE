@extends('welcome')
@section('content')
<div class=" border rounded-1 shadow" style="width: 1400px;margin-top: 0px;margin-left: 120px;">
    <div class="card ">
        <div class=" card-header d-flex justify-content-center pb-2 ">
            <h5>Gestion des fiches de production</h5>
        </div>
        <div class="card-body">
            <div class=" row " style="">
                <div class="col " style="margin-left: -10px;width:700px;">
                    <div class="card" style="">
                        <div class="card-body">
                            <div class="bg-body card" style="width:400px;margin-top: -13px;margin-left:-20px;">
                                <div class="form-group row"style="margin-top:3px;margin-left:0px;"> 
                                    <label class="form-label" style="">Dépôt:</label>
                                    <div class="col-sm-8 " style="margin-left:68px;">
                                    <select class="form-control" >
                                    <option value=""></option>
                                    @foreach($depots as $depot)
                                        <option value="{{$depot->code_matiere}}">{{$depot->libelle}}</option>
                                    @endforeach
                                    </select>
                                    </div>
                                </div>
                                <div class=" form-group row"style="margin-top:3px;margin-left:0px;">     
                                    <label class="form-label" style="">Equipe:</label>
                                    <div class="col-sm-8"style="margin-left:60px; ">
                                    <select class="form-control" >
                                    @foreach($equipes as $equipe)
                                    <option value=""></option>
                                        <option value="{{$equipe->code_equipe}}">{{$equipe->libelle}}</option>
                                    @endforeach
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row"style="margin-top:3px;margin-left:0px;"> 
                                    <label for="util" class="form-label" style="margin-right:3px;" >Date du jour: </label>
                                    <div class="col-sm-8">
                                    <input type="text" id="datepicker" style="font-size:20px;" readonly="readonly" class="form-control" value="{{date('d-F-Y')}} " name="date_debut">
                                    </div>
                                </div>                              
                            </div>

                            <div class="col-sm-12 form-group row"style="margin-top:5px;"> 
                                    <label for="util" class="form-label" style="margin-left:-15px;" >Production du jour: </label>
                                    <div class="d-flex justify-content-end" style="margin-left:600px;margin-top:-25px;">
                                    <button class="btn btn-danger" type="submit"></button>
                                    </div>
                            </div>  
                                <div class="row">
                                        <div class="table-responsive" style="">
                                            <table class="table table-hover table-bordered">
                                            <thead style="font-size:14px;">
                                            <tr>
                                            <th></th>
                                            <th>Réf</th>
                                            <th>Désignation</th>
                                            <th>Stock réel</th>
                                            <th>Qté</th>
                                            <th>Prix contrôle</th>
                                            <th>Montant</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                            <td><button class="btn btn-warning" type="button" style="width: 10px;height: 22px;color: var(--bs-red);background: var(--bs-gray-800);margin-left: -4px;"></button></td>
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


                        </div>
                    </div>
                </div>
                
                <div class="col" style="margin-left: -20px;width:700px;">
                    <div class="card">
                        <div class="card-body">
                            <div class="row" style="margin-bottom:155px;">
                                <label class="form-label ">Num de production:</label>
                                <input class="rounded" type="text" style="margin-left: 14px;">
                            </div>
                            <div class="col-sm-12 form-group row"style="margin-top:5px;"> 
                                    <label for="util" class="form-label" style="margin-left:-15px;" >Consommation du jour: </label>
                                    <div class="d-flex justify-content-end" style="margin-left:460px;margin-top:-45px;">
                                    <button class="btn btn-dark mr-3" type="submit">Calculer</button>
                                    <button class="btn btn-danger" type="submit" style="height:27px;margin-top:18px;"></button>
                                    </div>
                            </div>  
                            <div class="row">
                            <div class="table-responsive" style="">
                                <table class="table table-hover table-bordered">
                                <thead style="font-size:14px;">
                                    <tr>
                                    <th style=""></th>
                                    <th>Réf</th>
                                    <th style="margin-left: 0px;">Désignation</th>
                                    <th>Stock réel</th>
                                    <th>Qté</th>
                                    <th>Prix d'achat</th>
                                    <th>Montant</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <td style=""><button class="btn btn-warning" type="button" style="width: 10px;height: 22px;color: var(--bs-red);background: var(--bs-gray-800);margin-left: -3px;"></button></td>
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
                <div class="mt-4 d-flex justify-content-center" >
                    <button class="mr-3  btn btn-success" type="button" >Détail</button>
                    <button class="mr-3 btn btn-primary" type="button" style="background-color: #19aa53;">Enregistrer</button>
                    <a class="btn btn-danger mr-3 " href="{{route('welcome')}}" type="button" style="background-color: rgb(255,15,0);">Fermer</a></div>
                </div>
            </div>
        </div>
    </div>
</div>


 @endsection
