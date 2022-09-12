@extends('welcome')
@section('content')
<div class=" border rounded-1 shadow" style="width: 1400px;margin-top: 0px;margin-left: 120px;">
    <div class="card ">
        <div class=" card-header d-flex justify-content-center pb-2 ">
            <h5>Contrôle de production</h5>
        </div>
        <div class="card-body">
            <div class=" row " style="">
                <div class="col card  " style="">
                    <div class="form-group row"style="margin-top:10px;margin-left:0px;"> 
                        <label for="util" class="form-label " style="" >Date de début: </label>
                        <div class="col-sm-8" >
                        <input  type="text" id="datepicker" style="font-size:20px;margin-left:0px;" readonly="readonly" class="form-control" value="{{date('d-F-Y')}} " name="date_debut">
                        </div>
                    </div> 

                    <div class="form-group row"style="margin-top:0px;margin-left:0px;"> 
                        <label for="util" class="form-label" style="" >Date de fin: </label>
                        <div class="col-sm-8" >
                        <input type="text" id="datepicker" style="font-size:20px;margin-left:30px;" readonly="readonly" class="form-control" value="{{date('d-F-Y')}} " name="date_debut">
                        </div>
                    </div>   

                    <div class=" form-group row"style="">     
                        <label class="form-label" style="margin-left:10px">Equipe:</label>
                        <div class="col-sm-8"style="margin-left:73px; ">
                        <select class="form-control">
                        @foreach($equipes as $equipe)
                        <option value=""></option>
                            <option value="{{$equipe->code_equipe}}">{{$equipe->libelle}}</option>
                        @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="form-group row"style="margin-top:0px;"> 
                        <label for="util" class="form-label col-sm-4" style="margin-left:0px;" >Numéro de Production: </label>
                        <div class="col-sm-8" style="margin-left:0px; ">
                        <select class="form-control" >
                        <option value=""></option>
                            <option>Prix de gros</option>
                            <option>Prix de détail</option>
                        </select>
                        </div>
                    </div>
                </div>

                <div class=" col " style="">
                    <div class="form-group row"style="margin-top:0px;margin-left:0px;"> 
                        <label for="util" class="form-label " style="" >Moyenne en valeur/sac: </label>
                        <div class="col-sm-4">
                        <input class="form-control" readonly style="margin-top: 0px;font-size: 20px;width: 250px;margin-left: 0px;height: 40px;">
                        </div>
                    </div>  
                <div class="form-group row"style="margin-top:0px;margin-left:0px;"> 
                    <label for="util" class="form-label " style="" >Nombre de sac: </label>
                    <div class="col-sm-4">
                    <input class="form-control" readonly style="margin-top: 0px;font-size: 20px;width: 250px;margin-left: 80px;height: 40px;">
                    </div>
                </div> 
                <div class="form-group row"style="margin-top:0px;margin-left:0px;"> 
                        <label for="util" class="form-label " style="" >Rendement: </label>
                        <div class="col-sm-4">
                        <input class="form-control" readonly style="margin-top: 0px;font-size: 20px;width: 250px;margin-left: 120px;height: 40px;">
                        </div>
                    </div> 
                </div>
                <div class="col" style="">
                        <div class="row" style="margin-left:320px; ">
                            <button class="btn btn-success " type="button" >Afficher</button>
                        </div>
                        <div class="row mt-2" style="margin-left:300px; ">
                            <button class="ml-3 btn btn-primary" type="button" style="background-color: #19aa53;">Imprimer</button>
                        </div>
                        <div class="row mt-2" style="margin-left:300px; ">
                            <a class="btn btn-danger ml-3 " href="{{route('welcome')}}" type="button" style="background-color: rgb(255,15,0);">Fermer</a>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="row">
                <div class="col-sm-6 row"style="margin-top:5px;"> 
                    <label for="util" class="form-label" style="margin-left:20px;" >Consommation de la période</label>
                </div>
                <div class="col-sm-6 row"style="margin-top:5px;"> 
                    <label for="util" class="form-label" style="margin-left:50px;" >Production de la période</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="table-responsive" style="">
                        <table class="table table-hover table-bordered">
                        <thead style="font-size:14px;">
                        <tr>
                        <th></th>
                        <th>Désignation</th>
                        <th>Quantité</th>
                        <th>Prix d'achat</th>
                        <th>Valeur</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td><button class="btn btn-warning" type="button" style="width: 10px;height: 22px;color: var(--bs-red);background: var(--bs-gray-800);margin-left: -4px;"></button></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                        </tbody>
                        </table>    
                    </div>
                </div>
                <div class="col">
                    <div class="table-responsive" style="">
                        <table class="table table-hover table-bordered">
                        <thead style="font-size:14px;">
                            <tr>
                            <th style=""></th>
                            <th style="margin-left: 0px;">Désignation</th>
                            <th>Quantité</th>
                            <th>Prix de contôle</th>
                            <th>Valeur</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <td style=""><button class="btn btn-warning" type="button" style="width: 10px;height: 22px;color: var(--bs-red);background: var(--bs-gray-800);margin-left: -3px;"></button></td>
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
            <p><hr size="4"></p>
            <div class="row">
                <div class="col-sm-4 row">
                    <label for="util" class="form-label " style="margin-left:40px;" >Valeur production: </label>
                    <div class="col">
                    <input class="form-control" readonly style="margin-top: 0px;font-size: 20px;width: 200px;margin-left: 55px;height: 40px;">
                    </div>
                    </div>
                <div class="col-sm-4 row">
                    <label for="util" class="form-label " style="margin-left:90px;" >Coût des matières: </label>
                    <div class="col">
                    <input class="form-control" readonly style="margin-top: 0px;font-size: 20px;width: 200px;margin-left: 0px;height: 40px;">
                    </div>
                    </div>
                <div class="col-sm-4 row">
                    <label for="util" class="form-label " style="margin-left:80px;" >MB/matière: </label>
                    <div class="col-sm-4">
                    <input class="form-control" readonly style="margin-top: 0px;font-size: 20px;width: 200px;margin-left: 28px;height: 40px;">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-4 row">
                    <label for="util" class="form-label " style="margin-left:40px;" >Charges salariales: </label>
                    <div class="col">
                    <input class="form-control" readonly style="margin-top: 0px;font-size: 20px;width: 200px;margin-left: 50px;height: 40px;">
                    </div>
                    </div>
                <div class="col-sm-4 row">
                    <label for="util" class="form-label " style="margin-left:90px;" >MB/salaire: </label>
                    <div class="col">
                    <input class="form-control" readonly style="margin-top: 0px;font-size: 20px;width: 200px;margin-left: 70px;height: 40px;">
                    </div>
                    </div>
                <div class="col-sm-4 row">
                    <label for="util" class="form-label " style="margin-left:80px;" >Autres charges:</label>
                    <div class="col-sm-4">
                    <input class="form-control" readonly style="margin-top: 0px;font-size: 20px;width: 200px;margin-left: 0px;height: 40px;">
                    </div>
                </div>
            </div>
            <div class="row mt-2 mb-4">
                <div class="col-sm-4 row">
                    <label for="util" class="form-label " style="margin-left:40px;" >Résultats d'exploitation: </label>
                    <div class="col">
                    <input class="form-control" readonly style="margin-top: 0px;font-size: 20px;width: 200px;margin-left: 0px;height: 40px;">
                    </div>
                    </div>
                </div>
            </div>
       


                        
                        

    
    </div>
</div>


 @endsection
