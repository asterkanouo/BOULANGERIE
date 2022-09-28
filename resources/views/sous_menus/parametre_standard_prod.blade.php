@extends('welcome')
@section('content')
<div class=" border rounded-1 shadow" style="width: 1400px;margin-top: 0px;margin-left: 120px;">
    <div class="card ">
        <div class=" card-header d-flex justify-content-center pb-2 ">
            <h5>Paramètre des standards de production</h5>
        </div>
        <div class="card-body">
            <div class=" row " style="">
                <div class="col " style="margin-left: 10px;width:700px;">
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
                        <div class=" form-group row"style="margin-top:3px;margin-left:0px;">     
                            <label class="form-label" style="">Standard:</label>
                            <div class="col-sm-8"style="margin-left:40px; ">
                            <select class="form-control" >
                            <option value=""></option>
                                <option ></option>
                            </select>
                            </div>
                        </div>
                    </div>               
                </div>                  
            </div>
            <div class="row mt-4">
                <div class="col-sm-6 form-group row"style="margin-top:15px;margin-bottom:-3px;"> 
                    <label for="util" class="form-label" style="margin-left:30px;" >Produit de référence: </label>
                </div> 
                <div class="col-sm-6 form-group row"style="margin-top:15px;margin-bottom:-3px;"> 
                    <label for="util" class="form-label" style="margin-left:30px;" >Matière de référence: </label>
                </div>   
            </div>
            <div class="row">
                <div class="col col-sm-6">
                    <div class="table-responsive" style="">
                        <table class="table table-hover table-bordered">
                        <thead style="font-size:14px;">
                        <tr>
                        <th></th>
                        <th>Référence</th>
                        <th>Désignation</th>
                        <th>Quantité</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td><button class="btn btn-warning" type="button" style="width: 10px;height: 22px;color: var(--bs-red);background: var(--bs-gray-800);margin-left: -4px;"></button></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="col" style="margin-left: -20px;width:700px;">
                    <div class="table-responsive" style="">
                        <table class="table table-hover table-bordered">
                            <thead style="font-size:14px;">
                            <tr>
                            <th style=""></th>
                            <th>Code</th>
                            <th style="margin-left: 0px;">Désignation</th>
                            <th>Quantité</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <td style=""><button class="btn btn-warning" type="button" style="width: 10px;height: 22px;color: var(--bs-red);background: var(--bs-gray-800);margin-left: -3px;"></button></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row mt-4 d-flex justify-content-center" >
                <button class="mr-3 btn btn-primary" type="button" style="background-color: #19aa53;">Enregistrer</button>
                <a class="btn btn-danger mr-3 " href="{{route('welcome')}}" type="button" style="background-color: rgb(255,15,0);">Fermer</a></div>
            </div>
        </div>
    </div>
</div>


 @endsection
