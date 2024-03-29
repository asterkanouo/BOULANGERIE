@extends('welcome')
@section('content')
<div class=" border rounded-0 shadow" style="width: 1380px;margin-top: 0px;margin-left: 120px;">
    <h3 class="d-flex justify-content-center pb-2 mb-4 ">Ajout d'un groupe</h3>
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
      <form method="post" action="{{route('groupe.ajouter')}}">
      @csrf
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">libelle</label>
    <input type="text" class="form-control" required name="libelle">
  </div>
  <div class="d-flex justify-content-center mt-4">
  <button type="submit" class="btn btn-success">Enregistrer</button>
  <a  href="{{route('groupe')}}" class=" ml-4 btn btn-danger">Retour</a>
  </div>
</form>

  </div>
  @endsection
