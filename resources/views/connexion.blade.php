<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Connexion</title>
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <script src="script.js"></script>
</head>
<body>
<div  class = "d-flex h-100 justify-content-center ">
<div class="mt-4 mx-4 card  col-6 bg-body rounded shadow-sm ">
            <div class=" card-header d-flex bg-primary justify-content-center pb-2 mb-4 ">
            <h5>Connexion</h5>
            </div>
            <div class="card-body">             
                <form method="post" action="{{route('connexion')}}">
                    @csrf
                    <div class="form-group row">
                    <label  class="form-label col-sm-2">Compte:</label>
                    <div class = "col-sm-6">
                    <input type="text" name="compte" class="form-control" value="{{old('compte')}}" >
                    @if($errors->has('compte'))
                    <p class="text-danger" >{{$errors->first('compte')}}</p>
                    @endif
                    </div>
                    </div>
                    <div class="py-3 form-group row">
                    <label for="exampleInputtext" class="form-label col-sm-2">password:</label>
                    <div class = "col-sm-6">
                    <input type="password" class="form-control"  name="password">
                    @if($errors->has('password'))
                    <p class="text-danger">{{$errors->first('password')}}</p>
                    @endif
                    </div>
                    </div>
                    <div  class = " d-flex justify-content-center"> 
                    <button class="btn btn-success" type="submit" >Se Connecter</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    </div>
</body>
</html>