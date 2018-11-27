@extends('layout.layout')



@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('img/slide1.jpg')}} " alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/slide1.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/slide1.jpg')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- ----------------------barre de livraison-------------------------------- -->
    <div class="livraison">

        <h4>FRAIS DE LIVRAISON OFFERT DES 75€ D'ACHAT</h4>

    </div>
    <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-1" style="margin-left:4.16%">

                    </div>
                    <div class="col-md-3 col-sm-3 p-0">
                        <div class="categorie">
                            <a href="{!!url('/homme');!!}">HOMMES</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 p-0">
                        <div class="categorie">
                            <a href="homme.html">FEMMES</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 p-0">
                        <div class="categorie">
                            <a href="homme.html">ENFANTS</a>
                        </div>
                    </div>
                    <div class="banier">
                        <img src="asset/img/solde.jpg" alt="">
                    </div>

                </div>
            </div>
    </div>

<!-- Les Cards Articles -->
<div class="container-fluid">
        <!-- -------------------------------CHNAGEMENT CLASS CONTAINER EN HOMMEBODY -->
       <div class="HommeBody">
         <!-----------------------------------------------------------------------  -->
            <div class="row">
            <!-- Card  Button Homme Femme Enfant - Taille - Couleur -->
                <div class="card  font-weight-bold col-md-3 col-sm-3 m-4">
                    <div class="card-body">
                        <ul class=" list-unstyled border-0 list-inline">
                            <li class="list-inline-item btn btn-secondary btn-md active p-2 m-2">HOMME</li>
                            <li class="list-inline-item btn btn-secondary btn-md p-2 m-2">FEMME</li>
                            <li class="btn btn-secondary btn-md p-2 m-2">ENFANT</li>
                        </ul>
                        <h6 class="p-2 m-2 font-weight-bold">TAILLES</h6>
                        <ul class=" list-unstyled border-0 list-inline">
                            <li class="list-inline-item btn btn-secondary btn-md p-2 m-2">X-SMALL</li>
                            <li class="list-inline-item btn btn-secondary btn-md p-2 m-2">SMALL</li>
                            <li class="btn btn-secondary btn-md p-2 m-2">MEDIUM</li>
                            <li class="list-inline-item btn btn-secondary btn-md p-2 m-2">LARGE</li>
                            <li class="btn btn-secondary btn-md p-2 m-2">X-LARGE</li>
                            <li class="btn btn-secondary btn-md p-2 m-2">XX-LARGE</li>
                        </ul>
                        <h6 class="p-2 m-2 font-weight-bold">COULEURS</h6>
                        <div class="row">
                        <ul class="list-unstyled list-inline p-2 m-2">
                            <li class="list-inline-item couleurrouge"></li>
                            <li class="list-inline-item couleurvert"></li>
                            <li class="list-inline-item couleurjaune"></li>
                            <li class="list-inline-item couleurnoir"></li>
                        </ul>
                        </div>
                        <div class="row">
                         <ul class="list-unstyled list-inline p-2 m-2">
                            <li class="list-inline-item couleurorange"></li>
                            <li class="list-inline-item couleurbleu"></li>
                            <li class="list-inline-item couleurviolet"></li>
                            <li class="list-inline-item couleurblanc"></li>
                        </ul>
                    </div>
                    </div>
                </div>
                <!-- Card Short -->
                @foreach ($products as $product )
                <div class="card  action_card col-md-2 col-sm-2 mr-1">
                    <img class="card-img-top mt-3" src="{{asset('img/short.png')}}" alt="Short Long Surf">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold text-center">{{ $product->nomProduit }}</h5>
                        <p class="card-text"><small>{{ $product->descriptionProduit }}</small></p>
                        <p class="card-text font-weight-bold">{{ $product->prix }} €</p>
                        <a href="#"><button type="button" class="btn_article">Détails</button></a>
                        <div class=" text-center border_titre_tailles">taille
                            <div class="row">
                            <ul class="list-unstyled list-inline border_tailles">
                                <li class="list-inline-item "><button type="button" class="btn-sm">38</button></li>
                                <li class="list-inline-item "><button type="button" class="btn-sm">40</button></li>
                                <li class="list-inline-item "><button type="button" class="btn-sm">42</button></li>
                                <li class="list-inline-item "><button type="button" class="btn-sm">44</button></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
                <!-- Card Tee Shirt -->
                {{-- <div class="card action_card col-md-2 col-sm-2 mr-1" >
                <img class="card-img-top mt-3" src="{{asset('img/tee-shirt.png')}}" alt="tee-shirt Hossegor">
                    <div class="card-body">
                    <h5 class="card-title font-weight-bold text-center">TEE SHIRT HOSSEGOR</h5>
                    <p class="card-text"><small>Le nouveau Tee-shirt Hossegor. La Capitale du Surf.</small></p>
                    <p class="card-text font-weight-bold">25,00€</p>
                    <a href="product.html"><button type="button" class="btn_article">Détails</button></a>
                    <div class=" text-center border_titre_tailles">Tailles
                        <div class="row">
                            <ul class="list-unstyled list-inline border_tailles">
                                <li class="list-inline-item "><button type="button" class="btn-sm">38</button></li>
                                <li class="list-inline-item "><button type="button" class="btn-sm">40</button></li>
                                <li class="list-inline-item "><button type="button" class="btn-sm">42</button></li>
                                <li class="list-inline-item "><button type="button" class="btn-sm">44</button></li>
                            </ul>
                         </div>
                        </div>
                    </div>
                </div>
                <!-- Card Casquette -->
                 <div class="card action_card col-md-2 col-sm-2 mr-1" >
                <img class="card-img-top mt-3" src="{{asset('img/casquette.png')}}" alt="Casquette Surf">
                    <div class="card-body">
                    <h5 class="card-title font-weight-bold text-center">CASQUETTE SURF</h5>
                    <p class="card-text"><small> Casquette AfpaFouille Blanc/ Bleu.</small></p>
                    <p class="card-text font-weight-bold">15,00€</p>
                    <a href="#"><button type="button" class="btn_article">Détails</button></a>
                    <div class=" text-center border_titre_tailles">Tailles
                        <div class="row">
                            <ul class="list-unstyled list-inline border_tailles">
                                <li class="list-inline-item "><button type="button" class="btn-sm">38</button></li>
                                <li class="list-inline-item "><button type="button" class="btn-sm">40</button></li>
                                <li class="list-inline-item "><button type="button" class="btn-sm">42</button></li>
                                <li class="list-inline-item "><button type="button" class="btn-sm">44</button></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- Card Veste -->
                 <div class="card action_card col-md-2 col-sm-2 mr-1" >
                <img class="card-img-top mt-3" src="{{asset('img//veste.png')}}" alt="Veste Surf">
                    <div class="card-body">
                    <h5 class="card-title font-weight-bold text-center">VESTE SURF</h5>
                    <p class="card-text"><small>La nouvelle Veste Surf AfpaFouile respirante, imperméable et extrêmement résistante.</small></p>
                    <p class="card-text font-weight-bold">75,00€</p>
                    <a href="#"><button type="button" class="btn_article">Détails</button></a>
                    <div class=" text-center border_titre_tailles">Tailles
                        <div class="row">
                            <ul class="list-unstyled list-inline border_tailles">
                                <li class="list-inline-item "><button type="button" class="btn-sm">38</button></li>
                                <li class="list-inline-item "><button type="button" class="btn-sm">40</button></li>
                                <li class="list-inline-item "><button type="button" class="btn-sm">42</button></li>
                                <li class="list-inline-item "><button type="button" class="btn-sm">44</button></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

@endsection
