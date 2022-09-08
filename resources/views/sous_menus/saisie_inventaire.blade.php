@extends('welcome')
@section('content')
<div class=" border rounded-1 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
<div class="card ">
    <div class=" card-header d-flex justify-content-center pb-2">
    <h5>Saisie inventaire</h5>
    </div>
     <div class=" card-body " style="margin-top: -15px;" >
        <div class="row mb-2 " style="margin-left: -15px;width: 900px;height: 200px;">
           
                <div class="  col-8 card bg-body rounded shadow-sm" > 
                <form class=" " style="height: 200px; margin-top: 4px;margin-left: 0px;width: 700px;" method="post" action="{{route('fact_en_cours_four')}}">
                 @csrf
                 <div class="form-check form-check-inline" >
                <input class="form-check-input"  style="width: 20px;height: 60px;" type="radio" name="inlineRadioOptions" value="option1" checked>
                <label class="form-check-label" for="inlineRadio1" style="font-size: 20px;">produit</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input"  style="width: 20px;height: 60px;"   type="radio" name="inlineRadioOptions" value="option2">
                <label class="form-check-label" for="inlineRadio2"  style="font-size: 20px;">matiere première</label>
                </div>
                <div class="form-check form-check-inline" style="margin-left: 0px;">
                <input class="form-check-input"  style="width: 20px;height: 60px;"   type="radio" name="inlineRadioOptions"  value="option3">
                <label class="form-check-label" for="inlineRadio3" style="font-size: 20px;">marchandise</label>
                </div>

                <div class=" form-group row "   style="height: 50px;width: 720px;" >
                <label for="util" class="col-sm-8 form-label" style=" font-size: 20px;margin-right: 0px" >dépôt: </label>
                <div class=" col-sm-12"  >
                <select class="form-control" style="width: 400px; margin-left:172px;margin-top: -55px;font-size: 20px;">
                <option value=""></option>
                @foreach($depots as $depot)
                    <option value="{{$depot->code_matiere}}">{{$depot->libelle}}</option>
                @endforeach
                </select>
                </div>
                </div>


                <div class=" form-group row "   style="height: 50px;width: 720px;margin-left:0px;" >
                <label for="util" class="col-sm-8 form-label" style="margin-left:-20px; font-size: 20px;margin-top: 13px" >Date du jour: </label>
                <div class=" col-sm-4">
                <input style="height: 50px; width: 400px;font-size: 24px; margin-left:-300px;margin-top: 10px;" type="text" id="datepicker" readonly="readonly" class="form-control" value="{{date('d-F-Y')}} " name="date_du_jour">
                </div>
                </div>

                </div>
            </form>
            </div>
            </div>
           
        <div class=" row card bg-body rounded shadow-sm " style="margin-left: 5px;width: 1370px;">
            <div class="card-body"  style="margin-left: -15px;width: 1380px;"> 
                <table class="table table-bordered " >
                    <thead class=" bg-light">
                        <tr>
                            <th scope="col">....</th>
                            <th scope="col" class="text-center">Référence</th>
                            <th scope="col" class="text-center">Désignation</th>
                            <th scope="col" class="text-center">CMUP</th>
                            <th scope="col" class="text-center">Quantité réelle</th>
                            <th scope="col" class="text-center">Quantité réajustée</th>
                            <th scope="col" class="text-center">Différence inventaire</th>
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
                            <td></td>
                        </tr>
                        </tbody>
                </table>
            </div>
            </div>

            <div class="d-flex mb-2 justify-content-center btn-group border-warning" role="group" style="width: 790px;margin-top: 10px;">
                <button class="btn btn-info" type="button" style="font-size: 20px;margin-left: 562px;margin-right: 5px;">Afficher</button>
                <button class="btn btn-secondary" type="button" style="font-size: 20px;margin-left: 0px;margin-right: 5px;">Valider</button>
                <button class="btn " type="button" style="font-size: 20px;margin-left: 0px;background-color: #19aa53;">Enregistrer</button>
                <a class="btn btn-danger" href="{{route('welcome')}}" type="button" style="font-size: 20px;margin-left: 5px;background-color: rgb(255,15,0);">Fermer</a></div>
            </div>
        </div>
    </div>
</div>

   


 @endsection
