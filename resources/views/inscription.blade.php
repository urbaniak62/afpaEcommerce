@extends('layout.layout')

@section('content')

<div class="container" id="titreins">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <h3><i>Renseigner vos données personnelles</i></h3>
        </div>
    </div>
</div>
<div class="container" id="FormIns">
    <form method="post" action="{{url('/inscription')}}">
        @csrf
        <div class="row">
            <div class="col-xs-4 col-md-4">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Civilité</label>
                    <select class="form-control" name="civilite" id="civ">
                        <option  >Madame</option>
                        <option >Monsieur</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-4 col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="{{old('nom')}}" placeholder="Entrer votre nom">
                </div>
            </div>
            <div class="col-xs-4 col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" value="{{old('prenom')}}" placeholder="Entrer votre prénom">
                </div>
                @if ($errors->has('prenom'))
                <div class="alert alert-danger" role="alert">
                      {{$errors->first('prenom')}}
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Entrer votre email">
                </div>
                @if ($errors->has('email'))
                <div class="alert alert-danger" role="alert">
                      {{$errors->first('email')}}
                </div>
                @endif
            </div>
            <div class="col-xs-4 col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput">Mot de passe</label>
                    <input type="password" class="form-control" id="mdp" name="password" placeholder="Entrer votre mot de passe">
                </div>
                @if ($errors->has('password'))
                <div class="alert alert-danger" role="alert">
                      {{$errors->first('password')}}
                </div>
                @endif
            </div>
            <div class="col-xs-4 col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput">Confirmation du mot de passe</label>
                    <input type="password" class="form-control" id="mdpconf" name="password_confirmation" placeholder="Confirmation">
                </div>
                @if ($errors->has('password_confirmation'))
                <div class="alert alert-danger" role="alert">
                      {{$errors->first('password_confirmation')}}
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Numéro de rue</label>
                    <input type="text" class="form-control" id="numrue" name="numRue" value="{{old('numRue')}}" placeholder="Numéro de votre rue">
                </div>
                @if ($errors->has('numRue'))
                <div class="alert alert-danger" role="alert">
                      {{$errors->first('numRue')}}
                </div>
                @endif
            </div>
            <div class="col-xs-6 col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nom de rue</label>
                    <input type="text" class="form-control" id="nomrue" name="nomRue" value="{{old('nomRue')}}" placeholder="Nom de votre rue">
                </div>
                @if ($errors->has('nomRue'))
                <div class="alert alert-danger" role="alert">
                      {{$errors->first('nomRue')}}
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Code Postal</label>
                    <input type="text" class="form-control" id="cp" name="cp" value="{{old('cp')}}" placeholder="Votre code postal">
                </div>
                @if ($errors->has('cp'))
                <div class="alert alert-danger" role="alert">
                      {{$errors->first('cp')}}
                </div>
                @endif
            </div>
            <div class="col-xs-6 col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">Ville</label>
                    <input type="text" class="form-control" id="ville" name="ville" value="{{old('ville')}}" placeholder="Nom de votre ville">
                </div>
                @if ($errors->has('ville'))
                <div class="alert alert-danger" role="alert">
                      {{$errors->first('ville')}}
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Tél domicile</label>
                    <input type="text" class="form-control" id="teld" name="telDom" placeholder="Votre téléphone fixe">
                </div>
                @if ($errors->has('telDom'))
                <div class="alert alert-danger" role="alert">
                      {{$errors->first('telDom')}}
                </div>
                @endif
            </div>
            <div class="col-xs-6 col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">Tél portable</label>
                    <input type="text" class="form-control" id="telp" name="telPort" placeholder="Votre téléphone portable">
                </div>
                @if ($errors->has('telPort'))
                <div class="alert alert-danger" role="alert">
                      {{$errors->first('telPort')}}
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-8 col-md-8">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Comment avez vous connu notre marque ?</label>
                    <select class="form-control" id="connu" name="connu">
                        <option>Site Web</option>
                        <option>Un ami</option>
                        <option>Pages Jaunes</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-4 col-md-4">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="envins" onclick="ouvind()">Envoyer</button>
                </div>
            </div>
        </div>
    </form>
</div>



@endsection
