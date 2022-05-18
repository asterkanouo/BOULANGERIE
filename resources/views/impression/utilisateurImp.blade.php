<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
 

  <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
  <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

 
</head>
<body>
<h1 class="d-flex justify-content-center pb-2 mb-2 "><b><u> Listes des utilisateurs</u></b></h1>

<table class="table table-bordered table-hover">
<thead class="  bg-success">
<tr>
<th scope="col">N°</th>
<th scope="col">compte</th>
<th scope="col">Nom</th>
<th scope="col">Prenom</th>
</tr>
</thead>
<tbody>
@foreach($utilisateurs as $utilisateur)
<tr>
<th scope="row">{{$loop->index+1}}</th>
<td>{{$utilisateur->compte}}</td>
<td>{{$utilisateur->nom}}</td>
<td>{{$utilisateur->prenom}}</td>
</tr>
@endforeach
</tbody>

</table>

</body>
</html>