@extends('welcome')
@section('content')
<div class="container-fluid my-3 p-3 bg-body rounded shadow-sm">
<h1 class="d-flex justify-content-center pb-2 mb-2 "><b><u> Récapitulatifs des équipes</u></b></h1>
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

      <div class = "d-flex  justify-content-end mb-2">
      <a href="{{route('equipe.create')}}" class = "btn btn-info">Ajouter une équipe</a>
      </div>
      <table class="table table-bordered table-hover">
  <thead class=" bg-success">
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Libelle</th>
      <th scope="col">Superviseur</th>
      <th scope="col">Nb membres</th>
      <th scope="col">Dépôt</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($equipes as $equipe)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$equipe->libelle}}</td>
      <td>{{$equipe->superviseur}}</td>
      <td>{{$equipe->nb_membre}}</td>
      <td>{{$equipe->code_depot}}</td>
      <td>
      <a href="#" class= "btn btn-info">Editer</a>
      <a href="/equipe.delete/{{$equipe->code_equipe}}"  class= "btn btn-danger"  onclick="return confirm('voulez-vous vraiment supprimer cette equipe' . $equipe->libelle'?')">Supprimer</a>
      
      </td>
    </tr>
    @endforeach
  </tbody>
  
</table>
<div class = "d-flex justify-content-end mb-2">
  {{($equipes->links())}}
</div>
  @endsection
