@extends('welcome')
@section('content')
<div class=" border rounded-1 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
<div class=" card ">
    <div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
    <h5>Transfert des stocks</h5>
    </div>
        <div class="card-body " style="margin-left: -15px;margin-top: -35px;width: 1380px;height: 280px;">
            <div class="  " style="margin-left: 0px;width: 720px;height: 200px;">
                <div class="   card bg-body rounded shadow-sm mb-4" > 
                <form class="" style="height: 250px; margin-top: 4px;margin-left: 0px;width: 700px;" method="post" action="{{route('fact_en_cours_four')}}">
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
                <label for="util" class="col-sm-8 form-label" style=" font-size: 20px;margin-top: 0px" >dépôt de départ: </label>
                <div class=" col-sm-12"  >
                <select class="form-control" style="width: 400px; margin-left:300px;margin-top: -55px;">
                <option value=""></option>
                @foreach($depots as $depot)
                    <option value="{{$depot->code_matiere}}">{{$depot->libelle}}</option>
                @endforeach
                </select>
                </div>

                </div>
                <div class=" form-group row "   style="height: 50px;width: 720px;" >
                <label for="util" class="col-sm-8 form-label" style=" font-size: 20px;margin-top: 0px" >dépôt de destination: </label>
                <div class=" col-sm-12"  >
                <select class="form-control" style="width: 400px; margin-left:300px;margin-top: -50px;">
                <option value=""></option>
                @foreach($depots as $depot)
                    <option value="{{$depot->code_matiere}}">{{$depot->libelle}}</option>
                @endforeach
                </select>
                </div>

                <div class=" form-group row "   style="height: 50px;width: 720px;margin-left:0px;" >
                <label for="util" class="col-sm-8 form-label" style=" font-size: 20px;margin-top: 13px" >Date du jour: </label>
                <div class=" col-sm-4">
                <input style="height: 50px; width: 400px;font-size: 24px; margin-left:-180px;margin-top: 10px;" type="text" id="datepicker" readonly="readonly" class="form-control" value="{{date('d - F - y')}} " name="date_du_jour">
                </div>
                </div>

                </div>

<!--                  
                <div class=" form-group row "   style="height: 200px;width: 670px;" >
                <label for="util" class="col-sm-4 form-label" style="font-size: 28px;margin-top: 0px" >dépôt de destination: </label>
                <div class=" col-sm-12"  >
                <select class="form-control" style="width: 400px;; margin-left: 130px;margin-top: -60px;">
                <option value=""></option>
                @foreach($depots as $depot)
                    <option value="{{$depot->code_matiere}}">{{$depot->libelle}}</option>
                @endforeach
                </select>
                </div>  -->
            </form>
            </div>
            </div>
            </div>
            </div>

        
            <div class="card-body "  style="margin-left: -20px;margin-top: -10px;width: 1360px;"> 
                <table class="table table-bordered " style="margin-left: 5px;width: 1360px;">
                    <thead class=" bg-light">
                        <tr>
                            <th scope="col">....</th>
                            <th scope="col" class="text-center">Référence</th>
                            <th scope="col" class="text-center">Désignation</th>
                            <th scope="col" class="text-center">Stock réel</th>
                            <th scope="col" class="text-center">Quantité a transferer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><button class="btn btn-dark"></button></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>        
                <div class="mb-1 d-flex justify-content-center"  >
                    <button class="btn mr-3" type="button" style="background-color: #19aa53;">Transferer</button>
                    <a class="btn btn-danger" href="{{route('welcome')}}" type="button" style="background-color: rgb(255,15,0);">Fermer</a></div>
                </div>
            </div>
    </div>
</div>
    

   


 @endsection
