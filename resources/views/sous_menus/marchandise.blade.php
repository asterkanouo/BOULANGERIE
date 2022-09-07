@extends('welcome')
@section('content')

<div class=" border rounded-0 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
<nav class="navbar bg-dark ">
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
  <a href="{{route('marchandise.create')}}" class = "navbar-brand text-white">Ajouter une marchandise</a>
  </li>
  <li class="nav-item ml-4">
  <a class="navbar-brand text-white" href="#">Opérations</a>
  </li>
  </ul>
</nav>
<h1 class="d-flex justify-content-center pb-2 mb-2 "><b><u> Liste des marchandises</u></b></h1>
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
  <thead class=" bg-success">
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Reférence</th>
      <th scope="col">Désignation</th>
      <th scope="col">prix achat</th>
      <th scope="col">prix gros</th>
      <th scope="col">prix détail</th>
      <th scope="col">CMUP</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($marchandises as $marchandise)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$marchandise->reference}}</td>
      <td>{{$marchandise->designation}}</td>
      <td>{{$marchandise->prix_achat}}</td>
      <td>{{$marchandise->prix_gros}}</td>
      <td>{{$marchandise->prix_detail}}</td>
      <td>{{$marchandise->cmup}}</td>
      <td>
      <a href="#" class= "btn btn-info">Editer</a>
      <a href="/marchandise.delete/{{$marchandise->id_mar}}"  class= "btn btn-danger"  onclick="return confirm('voulez-vous vraiment supprimer cette marchandise?');">Supprimer</a>
      
      </td>
    </tr>
    @endforeach
  </tbody>
  
</table>
<div class = "d-flex justify-content-end mb-2">
  {{($marchandises->links())}}
</div>
</div>
  @endsection
