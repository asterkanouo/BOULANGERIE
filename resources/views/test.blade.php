
@extends('template')
@section('content')
@section('titre', env('APP_NAME'))
<img src="{{ asset('images/images.png')}}" alt="IMAGE BOULANGERIE">
<h1>HELLO FROM QUEBEC</h1>
<p>il est maintenant {{ date('H:i s') }}. dans ma région</p>

@endsection