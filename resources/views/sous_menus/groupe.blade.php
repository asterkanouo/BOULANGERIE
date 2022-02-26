@extends('welcome')
@section('content')
<div class="container-fluid bg-body rounded shadow-sm">
<nav class="navbar bg-dark ">
<ul class="nav">
  <li class="nav-item">
  <a href="{{route('groupe.create')}}" class = "navbar-brand text-white">Ajouter un groupe</a>
  </li>
  <li class="nav-item ml-4">
  <a class="navbar-brand text-white" href="#">Opérations</a>
  </li>
  </ul>
</nav>
<h1 class="d-flex justify-content-center pb-2 mb-4"><b><u> Groupes utilisateurs</u></b></h1>
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
      <table class="table table-bordered table-hover">
  <thead class="  bg-success but1">
    <tr>
      <th scope="col" >N°</th>
      <th scope="col">Libelle</th>
      <th scope="col">Groupe</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($groupes as $groupe)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$groupe->code_groupe}}</td>
      <td>{{$groupe->libelle}}</td>
      <td>
      <a href="#" class= "btn btn-info">Editer</a>
      <a href="/groupe.delete/{{$groupe->code_groupe}}"  onclick="return confirm('voulez-vous vraiment supprimer le groupe $groupe->nom ?')" class= "btn btn-danger"  >Supprimer</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

  @endsection
