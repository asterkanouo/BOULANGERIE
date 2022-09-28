@extends('welcome')
@section('content')
<div class=" border rounded-1 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
<div class="card ">
    <div class=" card-header d-flex justify-content-center pb-2">
    <h5>Modifier un standard</h5>
    </div>
     <div class=" card-body " style="margin-top: -15px;" >
        <div class="row mb-2 ">
                <div class="ml-2 rounded shadow-sm"style="height:130px;" > 
                <form class=""  style="width:370px;" action="">
                 @csrf
                <div class=" form-group row mt-4"   style="" >
                <label for="util" class="col-sm-8 form-label" style=" font-size: 20px;margin-right: 0px" >dépôt: </label>
                <div class=" col-sm-6"  >
                <select class="form-control" style="width: 270px; margin-left:72px;margin-top: -55px;font-size: 20px;">
                <option value=""></option>
                @foreach($depots as $depot)
                    <option value="{{$depot->code_matiere}}">{{$depot->libelle}}</option>
                @endforeach
                </select>
                </div>
                </div>
                <div class="btn btn-primary d-flex justify-content-center">Afficher</div>
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
                            <th scope="col" class="text-center">Equipe</th>
                            <th scope="col" class="text-center">Standard</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><button class="btn btn-dark"></button></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                </table>
            </div>
            </div>

            <div class="d-flex mb-2 mt-2 justify-content-center  border-warning" role="group" >
            <button class="btn " type="button" style="font-size: 20px;margin-left: 0px;background-color: #19aa53;">Détail parametre</button>
                <button class="btn btn-info" type="button" style="font-size: 20px;margin-left:2px;margin-right: 5px;">Ok</button>
                <a class="btn btn-danger" href="{{route('welcome')}}" type="button" style="font-size: 20px;margin-left: 5px;background-color: rgb(255,15,0);">Fermer</a></div>
            </div>
        </div>
    </div>
</div>

   


 @endsection
