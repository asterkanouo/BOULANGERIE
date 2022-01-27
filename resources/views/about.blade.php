@extends('template')
@section('content')
@section('titre','A_propos | ' . env('APP_NAME'))
<img src="images/logob.jpg" alt="LOGO APPLI">
<h1>HELLO FROM QUEBEC</h1>
<p>Ceci est un test d'apprentissage voilà pour vous <span class = "text-pink-500">&hearts;</span></p>
<p><a href="{{ route('test') }}">revenir à la page d'accueil</a></p>
@endsection