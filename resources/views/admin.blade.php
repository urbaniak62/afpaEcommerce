@extends('layout.layout')

@section('content')

    <h1>ESPACE ADMINISTRATION</h1>
    <table class="table table-hover table-dark">
        <h3>LES MEMBRES</h3>
        <thead>
            <tr>

                <th scope="col">civilité</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Email</th>
                <th scope="col">adresse</th>

                <th scope="col">tel domicile</th>
                <th scope="col">tel portable</th>
                <th scope="col">connu ou</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($utilisateurs as $user)
            <form action="/admin" method="">
                @csrf
            <tr>
                <td>{{$user->civilite}}</td>
                <td>{{$user->nom}}</td>
                <td>{{$user->prenom}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->numRue ." ".$user->nomRue ." ". $user->cp . " " . $user->ville}}</td>
                <td>{{$user->telDom}}</td>
                <td>{{$user->telPort}}</td>
                <td>{{$user->connu}}</td>

                <td><button class="btn btn-danger" type="submit">suprimer</button></td>
            </tr>
        </form>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('ajouter') }}"><button class="btn btn-success m-5" type="button">Ajouter un article</button></a>

@endsection
