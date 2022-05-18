<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>test impression</title>
  <link rel="stylesheet" href="style.css">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <script type = "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">></script>
  <script type = "text/javascript" src="js/jquery-ui.min.js"></script>
  <script type=  "text/javascript" src="js/jquery.printPage.js"> </script>
  <script type=  "text/javascript" src="js/bootstrap.bundle.min.js"> </script>
</head>
<body>
<!-- As a link -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-link btnprn" href="{{route('impression') }}">Imprimer</a>
</nav>

 <h1>test reussi</h1>
  <script type="text/javascript">
  $(document).ready(function(){
      $('.btnprn').printPage();
    });
  </script>
</body>
</html>
