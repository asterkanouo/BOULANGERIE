@extends('welcome')
@section('content')
<div class=" border rounded-0 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
    <div class=" card-header d-flex justify-content-center pb-2 mb-4 ">
    <h1>Ajout d'une caisse</h1>
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
      <form method="post" action="{{route('caisse.ajouter')}}">
      @csrf
      
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Libelle</label>
    <input type="text" class="form-control" required name="libelle">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Dépôt</label>
    <select class="form-control" required name="code_depot">
        <option value=""></option>
        @foreach($depots as $depot)
            <option value="{{$depot->code_depot}}">{{$depot->libelle}}</option>
        @endforeach
    </select>
  </div>
  <div class="d-flex justify-content-center ">
  <button type="submit" class="btn btn-success mr-4">Enregistrer</button>
  <a  href="{{route('caisse')}}" class="btn btn-danger">Retour</a>
  </div>
</form>
</div>
  
  @endsection
