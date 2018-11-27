@extends('layout.layout');

@section('content')
<div class="container"> 
<h1>ajouter un article</h1>

<form action="{{ url('/ajouter') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label for="exampleInputEmail1">Titre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="titre" placeholder="Titre du produit">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">prix</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="prix" placeholder="Prix du produit">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nomProduit" placeholder="Nom du produit">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="descriptionProduit" placeholder="Description">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Reférence</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="reference" placeholder="reference">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Selectionner une image</label>
    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
  </div>
  <label for="taille">Taille</label>
  <select class="form-control form-control-sm" name="taille">
    <option>XS</option>
  </select>
  <label for="couleur">couleur</label>
  <select class="form-control form-control-sm" name="couleur" >
    <option>XS</option>
  </select>
  <button class="btn btn-success m-5" type="submit">Ajouter</button>
</form>

</div> 

@endsection