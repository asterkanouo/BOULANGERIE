@extends('welcome')
@section('content')
<div class="col-12 my-3 p-3 bg-body rounded shadow-sm">
<h1 class="d-flex justify-content-center pb-2 mb-2 "><b><u> Groupes utilisateurs</u></b></h1>
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
      <a href="{{route('groupe.create')}}" class = "btn btn-success">Ajouter un groupe</a>
      </div>
      <table class="table table-bordered table-hover">
  <thead class=" bg-info">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Libelle</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($groupes as $groupe)
    <tr>
      <!-- <th scope="row">{{$loop->index+1}}</th> -->
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
  @endsection
