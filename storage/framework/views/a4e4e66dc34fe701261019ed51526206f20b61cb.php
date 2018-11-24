<?php $__env->startSection('content'); ?>
<!-- -------------------CARROUSSEL-------------------------------------- -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo e(asset('img/slide1.jpg')); ?> " alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo e(asset('img/slide1.jpg')); ?>" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo e(asset('img/slide1.jpg')); ?>" alt="Third slide">
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
<!-- ---------------------BARRE SOUS MENUE HOMMES FEMMES .....---------- -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-1" style="margin-left:4.16%">

            </div>
            <div class="col-md-3 col-sm-3 p-0">
                <div class="categorie">
                    <a href="<?php echo url('/homme');; ?>">HOMMES</a>
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
                <img src="<?php echo e(asset('img/solde.jpg')); ?>" alt="">
            </div>

        </div>

        <div class="row">
            <div class="col-md-6 col-sm12 p-0 mt-1" class="col-vitrine" style="background:white;">
                <img class="card-img-top mt-3 pr-2 pl-2" src="<?php echo e(asset('img/images.jpg')); ?>" alt="Card image cap"> .
                <!-- <img src="asset/img/images.jpg" class="vitrine"alt=""> -->
            </div>
            <div class="col-md-3 col-sm-6 mt-1 ml-1" style="background:white;">
                <img class="card-img-top mt-3" src="<?php echo e(asset('img/casquette.png')); ?>" alt="Card image cap">
                <div class="price">
                    <span>
                        <h3>100€</h3>
                    </span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mt-1 ml-1" style="background:white;">
                <img class="card-img-top mt-3" src="<?php echo e(asset('img/casquette.png')); ?>" alt="Card image cap">
                <div class="price">
                    <span>
                        <h3>100€</h3>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>