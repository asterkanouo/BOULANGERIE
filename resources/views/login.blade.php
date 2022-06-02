<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel="stylesheet" href="assetslogin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assetslogin/fonts/font-awesome.min.css">
</head>

<body>
    <h1 class="text-primary" style="margin-left: 500px;margin-top: 11px;">Boulangerie Sigma</h1>
    <img class="rounded-circle" src="assets/img/logob.jpg" style="width: 320px;margin-left: 500px;margin-bottom: 3px;">
    <div class="border rounded border-primary" style="width: 402px;margin-left: 462px;margin-bottom: 10px;">
        <form style="margin-left: 5px;width: 390px;margin-bottom: -1px;" method="post" action="{{route('connexion')}}">
        @csrf
                
            <div class="border rounded input-group mb-3" style="font-size: 18px;margin-top: 3px;">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user" style="font-size: 24px;"></i></span></div>
                <input class="shadow-none form-control" name="compte" value="{{old('compte')}}" type="text" style="font-size: 22px;width: 36px;margin-top: 0px;" placeholder="Votre compte">
               
            </div>
             @if($errors->has('compte'))
                    <p class="text-danger" >{{$errors->first('compte')}}</p>
                    @endif
            <div
                class="border rounded input-group mb-3" style="font-size: 18px;">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-lock" style="font-size: 26px;"></i></span></div>
                <input class="border rounded-0 shadow-none form-control" name="password" type="password" style="height: 47px;margin-left: 0px;width: 332px;" placeholder="Mot de passe" >
                @if($errors->has('password'))
                    <p class="text-danger">{{$errors->first('password')}}</p>
                    @endif
            </div>
                <button class="btn btn-primary active" type="submit" style="width: 389px;height: 46px;margin-bottom: 4px;background-color: rgb(25,170,83);">Se Connecter</button>
        </form>
    </div>
    
        <a href="#" style="margin-left: 580px;font-size: 19px;margin-top: 5px;">Mot de passe oublié?</a>
   
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>