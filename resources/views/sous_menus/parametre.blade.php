@extends('welcome')
@section('content')
<div class=" border rounded-0 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">

<div class="card  " >
    <div class="card-header"  >
        <h4 style="margin-left:550px;">Gestion des paramètres</h4>
        </div>
    <div class="card-body">
    <div class="row" style="margin-left:20px;">
        <div class=" mr-2 col-6 card bg-body rounded shadow-sm ">
            <div class=" card-header d-flex bg-primary justify-content-center pb-2 mb-4 ">
            <h5>Parametre de l'entreprise</h5>
            </div>
            <div class="card-body"> 
                <form method="post" action="{{route('parametre')}}">
                @csrf
                @foreach ($parametres as $parametre)
                <div class=" form-group row">
                <label for="util" class="col-sm-4 form-label" >Raison sociale: </label>
                <div class=" col-sm-8">
                <input type="text" id="util" class="form-control input-sm" required name="raison_sociale" value="{{$parametre->raison_sociale}}"/>
                </div>
                </div>
                <div class="form-group row">
                <label  class="form-label col-sm-4">Activité:</label>
                <div class = "col-sm-8">
                <input type="text"  class="form-control"  value="{{$parametre->activite}}" name="activite">
                </div>
                </div>
                <div class="form-group row">
                <label for="exampleInputtext" class="form-label col-sm-4">Contact:</label>
                <div class = "col-sm-8">
                <input type="text" class="form-control" required value="{{$parametre->contact}}" name="contact">
                </div>
                </div>
                <div class="form-group row">
                <label for="exampleInputtext" class=" col-sm-4 form-label">Ville:</label>
                <div class = "col-sm-8">
                <input type="text" class="form-control" required value="{{$parametre->ville}}" name="ville">
                </div>
                </div>
                <div class="form-group row">
                <label for="exampleInputtext" class="col-sm-4 form-label">NIU/Régime fiscal:</label>
                <div class = "col-sm-8">
                <input type="text" class="form-control" value="{{$parametre->niu}}" required name="niu">
                </div>
                </div>
                @endforeach
                </form>
            </div>
        </div>


        <div class="card bg-body rounded shadow-sm ">
            <div class=" card-header d-flex bg-primary justify-content-center pb-2 mb-4 ">
            <h5>Gestion des clients</h5>
            </div>
            <div class="card-body"> 
                <form method="post" action="{{route('parametre')}}">
                @csrf
                <div class="form-group row">
                <label  class="form-label col-sm-4">Solde maximal:</label>
                <div class = "col-sm-8">
                <input type="text"  class="form-control"  value="{{$parametre->solde_max_client}}" name="solde_max_client">
                </div>
                </div>
                <div class="form-group row">
                <label for="exampleInputtext" class="form-label col-sm-4">nombre de factures autorisées:</label>
                <div class = "col-sm-8">
                <input type="text" class="form-control" required value="{{$parametre->nb_facture_client}}" name="nb_facture_client">
                </div>
                </div>
                <div class="form-group row">
                <label for="exampleInputtext" class=" col-sm-4 form-label">Délai de règlement:</label>
                <div class = "col-sm-8">
                <select class="form-control" required name="delai_reglement">
                    <option value=""></option>
                    <option>Comptant</option>
                    <option>1jour</option>
                    <option>2jour</option>
                    <option>3jour</option>
                    <option>4jour</option>
                    <option>5jour</option>
                </select>
                </div>
                </div>
                </form>
            </div>
        </div>
    </div>




    <div class="row" style="margin-left:20px;">
        <div class="mr-2 mt-4 col-6 card bg-body rounded shadow-sm ">
            <div class=" card-header d-flex bg-primary justify-content-center pb-2 mb-4 ">
            <h5>Paramètre</h5>
            </div>
            <div class="card-body"> 
                <form method="post" action="{{route('parametre')}}">
                @csrf
                <div class=" form-group row">
                <label for="util" class="col-sm-4 form-label" >matière première: </label>
                <div class=" col-sm-8">
                <select class="form-control" required name="code_matiere_p">
                
                <option value=""></option>
                @foreach($matiere_ps as $matiere_p)
                    <option value="{{$matiere_p->code_matiere}}">{{$matiere_p->element}}</option>
                    @endforeach
                </select>
                 </div>
                </div>
                <div class="form-group row">
                <label  class="form-label col-sm-4">Standard de production:</label>
                <div class = "col-sm-8">
                <input type="text"  class="form-control"  value="{{$parametre->standard_production}}" name="standard_production">
                </div>
                </div>
                <div class="form-group row">
                <label for="exampleInputtext" class="form-label col-sm-4">Valeur:</label>
                <div class = "col-sm-8">
                <input type="text" class="form-control" required value="0">
                </div>
                </div>
                </form>
            </div>
        </div>
    



   
        <div class="mt-4  card bg-body rounded shadow-sm ">
            <div class=" card-header d-flex bg-primary justify-content-center pb-2 mb-4 ">
            <h5>Gestion des fournisseurs</h5>
            </div>
            <div class="card-body"> 
                <form method="post" action="{{route('parametre')}}">
                @csrf
                <div class="form-group row">
                <label  class="form-label col-sm-4">Solde maximal:</label>
                <div class = "col-sm-8">
                <input type="text"  class="form-control"  value="{{$parametre->solde_max_fournisseur}}" name="solde_max_fournisseur">
                </div>
                </div>
                <div class="form-group row">
                <label for="exampleInputtext" class="form-label col-sm-4">nombre de factures autorisées:</label>
                <div class = "col-sm-8">
                <input type="text" class="form-control" required value="{{$parametre->nb_facture_fournisseur}}" name="nb_facture_fournisseur">
                </div>
                </div>
                </form>
            </div>
        </div>
    </div>
<div class=" m-4 d-flex justify-content-center ">
  <button type="submit" class="btn btn-success mr-4">Enregistrer</button>
  <a  href="{{route('welcome')}}" class="btn btn-danger">Retour</a>
  </div>
</div>

 @endsection
