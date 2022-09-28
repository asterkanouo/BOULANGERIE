@extends('welcome')
@section('content')
<div class=" border rounded-0 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
<div class=" border rounded-0 shadow" style="width: 1380px;margin-top: 0px;">
    <div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
    <h5>Liste des ordres de production </h5>
    </div>
    <div class="card-body ">
        <form class=""  style=" " method="post" action="{{route('fact_en_cours_four')}}">
        @csrf
          <div class="row">
            <div class="col  col-sm-6">
                <div class="mr-2 card  rounded shadow-sm mb-4" style="width:420px;">
                    <div class=" form-group row mt-2"  >
                      <label for="util" class="col-sm-4 form-label" style="margin-left:0px" >dépôt: </label>
                      <div class=" col-sm-6">
                      <select class="form-control" style="margin-left: -50px;width:300px;">
                      <option value=""></option>
                      @foreach($depots as $depot)
                          <option value="{{$depot->code_matiere}}">{{$depot->libelle}}</option>
                      @endforeach
                      </select>
                      </div>
                   
                      <button class="btn btn-secondary mb-2 mt-2" type="button" style="width: 300px;height: 50px; margin-top: 0px;margin-left:112px;">Afficher</button>
                </div>
            </div> 
            
             
            </div> 
            <div class="row  bg-body rounded shadow-sm " style="width: 1380px;margin-left: 0px;">
            <table class="table table-bordered " style="width: 1350px;margin-left: 0px;" >
                <thead class=" bg-light">
                <tr>
                  <th scope="col">....</th>
                  <th scope="col" class="text-center">Date</th>
                  <th scope="col" class="text-center">Nméro</th>
                  <th scope="col" class="text-center">Equipe</th>
                  <th scope="col" class="text-center">Standard</th>
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


           

            <div class="mt-4  mb-4 form-group row d-flex justify-content-center" >
                <button class="mr-3 btn btn-primary " type="button" style="background-color: #19aa53;">Afficher</button>
                <a class="btn btn-danger mr-3 " href="{{route('welcome')}}" type="button" style="background-color: rgb(255,15,0);">Fermer</a></div>
            </div>
         </form>
      </div>
      
   </div>
</div>
 
 @endsection
