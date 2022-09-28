@extends('welcome')
@section('content')
<div class=" border rounded-1 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
   <div class="card ">
      <div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
      <h5>Liste des productions</h5>
      </div>
      <div class="card-body ">
        <div class="row " style="margin-left: 0px;width: 1050px;">
          <div class=" mr-2  card rounded shadow-sm mb-4" style="margin-left: -10px;width: 460px;">
              <div class=" card-body" style="height: 200px;width: 548px;" > 
                  <form class="" style="height: 30px; margin-top: 4px;margin-left: 18px;width: 348px;" method="post" action="{{route('fact_en_cours_four')}}">
                  @csrf
                    <div class=" form-group row" style="margin-bottom: 0px" >
                      <label for="util" class="col-sm-4 form-label" >dépôt: </label>
                      <div class=" col" style="">
                      <select class="form-control" style="margin-left: 16px;margin-top: 0px;width:270px;">
                      <option value=""></option>
                      @foreach($depots as $depot)
                          <option value="{{$depot->libelle}}">{{$depot->libelle}}</option>
                      @endforeach
                      </select>
                      </div>
                    </div>
                    <div class="bg-dark form-group row" style="height: 0px;margin-left: -20px;margin-top: 10px;">
                      <label for="util" class="col-sm-8 form-label" >Date de début: </label>
                      <div class=" col-sm-4">
                      <input type="text" id="datepicker" style="font-size: 20px;margin-top: 0px;margin-left: -110px;margin-top: 0px;width: 270px;" readonly="readonly" class="form-control" value="{{date('d F Y')}} " name="date_debut">
                      </div>
                    </div>
                    <div class="bg-dark form-group row" style="height: 0px;margin-left: -20px;margin-top:65px;">
                      <label for="util" class="col-sm-8 form-label" >Date de fin: </label>
                      <div class=" col-sm-4">
                      <input type="text" id="datepicker2" style="font-size: 20px;margin-left: -110px;margin-top: 0px;width: 270px;" readonly="readonly" class="form-control" value="{{date('d F Y')}} " name="date_debut">     
                      </div>
                      </div> 
                    </div> 
                    <button class="btn btn-secondary" type="button" style="width: 440px;height: 50px; margin-top: 5px;margin-bottom: 5px;margin-left: 10px;">Afficher</button>
                  </form>
              </div>
          </div>
        </div>
        <div class="row">
            <div class=" card bg-body rounded shadow-sm " style="width:1370px;margin-left: 15px;">
              <div class=" card-body" style="width:1380px;margin-left: 0px;"> 
                <table class="table table-bordered ">
                  <thead class=" bg-light">
                    <tr>
                      <th scope="col">....</th>
                      <th scope="col" class="text-center"style="width:370px;">Numéro de production</th>
                      <th scope="col" class="text-center">Date</th>
                      <th scope="col" class="text-center">Equipe</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
        <div class="row mt-4 mb-4 d-flex justify-content-center">
          <button class="btn btn-success mr-2" type="button" style="margin-left:0px;background-color: #19aa53;">Détail</button>
          <button class="btn btn-primary mr-2" type="button" style="margin-left:0px;background-color: #19aa53;">Imprimer la production</button>
          <a class="btn btn-danger" href="{{route('welcome')}}" type="button" style="margin-left:0px;background-color: rgb(255,15,0);">Fermer</a>
        </div>
      </div>
   </div>
</div>

 @endsection
