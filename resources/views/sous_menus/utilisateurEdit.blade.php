@extends('welcome')
@section('content')
<div class=" col-8 card bg-body rounded shadow-sm ">
    <div class=" card-header d-flex bg-primary justify-content-center pb-2 mb-4 ">
    <h1>Modification d'un utilisateur</h1>
    </div>
  <div class="card-body"> 
      <div class=" mt-4">
      @if(session()->has("success"))
      <h3 class=" alert alert-success">
      {{session()->get('success')}}
      </h3>
       @endif 
          @if($errors->any())
           <ul class="alert alert-danger">
             @foreach($errors->all() as $error)
               <li>{{($error)}}</li>
             @endforeach
           </ul>
       @endif
      </div>
    <form method="post" action="utilisateur.editer/{code_user}">
      @csrf
      <div class="row row-cols-1 row-cols-md-2">
        @foreach ($utilisateurs as $utilisateur)
    <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Compte</label>
    <input type="text" class="form-control" required name="compte" value="{{$utilisateur->compte}}">
    </div>
     <div class="mb-3 px-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" value="{{$utilisateur->psw}}" name="password">
    </div>
    <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Nom</label>
    <input type="text" class="form-control" required value="{{$utilisateur->nom}}" name="nom">
    </div>
   <div class="mb-3 px-3">
    <label for="exampleInputtext" class="form-label">Prenom</label>
    <input type="text" class="form-control" required value="{{$utilisateur->prenom}}" name="prenom">
    </div>
    <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Groupe</label>
    <select class="form-control" required value="{{$utilisateur->code_groupe}}" name="groupe">
        
        @foreach($groupes as $groupe)
        <option value="">{{$groupe->libelle}}</option>
            <option value="{{$groupe->code_groupe}}">{{$groupe->libelle}}</option>
        @endforeach
    </select>
    </div>
    <div class="mb-3 px-3 ">
      <label for="disabledSelect" class="form-label">Statut</label>
      <select class="form-control" required  name="statut">
        <option>{{$utilisateur->statut}}</option>
        <option>Actif</option>
        <option>bloqué</option>
      </select>
    </div>
    
    <div class="mb-2">
    <label for="exampleInputtext" class="form-label">Email</label>
    <input type="text" class="form-control" value="{{$utilisateur->email}}" required name="email">
    </div>
    @endforeach
    </div>
    <div class="d-flex justify-content-center ">
    <button type="submit" class="btn btn-success mr-4">Modifier</button>
    <a  href="{{route('utilisateur')}}" class="btn btn-danger">Annuler</a>
    </div>
    </form>
  </div>
</div>
   @endsection
