<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/stylehomme.css')}} ">
        <link rel="stylesheet" href="{{asset('css/styleproduct.css')}} ">
    <title>Projet Ecommerce | L'AfpaFouille</title>
</head>

<body>
    <nav class="navbar ">
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{asset('img/afpa_logo.png')}} " width="250" height="60" class="d-inline-block align-top" alt="">
        </a>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="modal" data-target="#exampleModalCenter">LOGIN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">PANIER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
            </li>
        </ul>
    </nav>

    <!-- Début Modal -->

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><strong>Authentification</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                placeholder="Entrer votre email">
                            <small id="emailHelp" class="form-text text-muted"><i>Cet email est l'identifiant pour
                                    accéder à votre compte</i></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mot de passe</label>
                            <input type="password" class="form-control" id="mdp" placeholder="Entrer votre mot de passe">
                            <a href="#"><small id="pertemdp" class="form-text text-muted"><i>Mot de passe oublié ?</i></small></a>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="souv">
                            <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" onclick="ouvins()">Première connexion ?</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary" id="modal">Envoyer</button>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    {{-- ---------------------------------SOURCE JS FIN BODY FIN HTML --}}


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
<script rel="stylesheet" link="{{asset('js/main.js')}}></script>
</body>

</html>
