
<!--APropos's section-->
<?php $__env->startSection('title','CARRIERE'); ?>
<?php $__env->startSection('content'); ?>
    
<!-- cover photo -->
<div class="card text-white">
    <img class="card-img" src="<?php echo e(asset('public/images/WL_ELSWEDY_Elements_Page_Actualite/3072x1164/Banner.png')); ?>" alt="Card image">
    <div class="card-img-overlay h-100 d-flex flex-column justify-content-center">
      <h1 id="contact_h1_title" class="card-title text-white display-1">Actualité</h1>
    </div>
</div>

<div class="container pt-4">
    <!-- Search button -->
    <div class="row">
        <div class="col-xxl-8 col-xl-8 col-md-8 col-sm-7 col-xm-0"></div>
        <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-5 col-xm-12">
            <div class="search-container">
                <form>
                    <div class="md-form my-0">
                      <input id="actSearchInput" class="form-control" type="text" placeholder="Recherche dans actualité" aria-label="Search" style="font-size: 17px">
                    </div>
                    <button id="actSearchBtn" href="#!" class="btn btn-outline-white btn-md my-0 ml-sm-2" type="submit" style="border-radius: 10px"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>        
    </div>

    <!-- Carousel with captions -->

    <div class="row pt-4">

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
              <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
            </ol>
            
            <!-- Slides -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo e(url('public/images/WL_ELSWEDY_Elements_Page_Actualite/3032x1113/1.png')); ?>" alt="Slide 1" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Caption Title 1</h5>
                  <p>Caption Description 1</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="<?php echo e(url('public/images/WL_ELSWEDY_Elements_Page_Actualite/3032x1113/2.png')); ?>" alt="Slide 2" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Caption Title 2</h5>
                  <p>Caption Description 2</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="<?php echo e(url('public/images/WL_ELSWEDY_Elements_Page_Actualite/3032x1113/3.png')); ?>" alt="Slide 3" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Caption Title 3</h5>
                  <p>Caption Description 3</p>
                </div>
              </div>
            </div>
            
            <!-- Controls -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
          

    </div>

    <!-- Evenements (cards) -->
    
    <div class="row pt-4">
        <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-xm-12">
            <div class="card">
                <img class="card-img-top" src="<?php echo e(url('public/images/WL_ELSWEDY_Elements_Page_Actualite/3072x1113/1.png')); ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title btn btn-danger">National</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <a id="lirelasuite" class="card-text" href="<?php echo e(route('detailevenement')); ?>"><p class="text-left">Lire La suite   </p><i class="fa fa-arrow-right" aria-hidden="true" style="color: brown; display: flex; padding-top: 12px; padding-left: 10px"></i></a>
                </div>
            </div>
        </div>

        <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-xm-12">
            <div class="card">
                <img class="card-img-top" src="<?php echo e(url('public/images/WL_ELSWEDY_Elements_Page_Actualite/3072x1113/2.png')); ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title btn btn-danger">National</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <a id="lirelasuite" class="card-text" href="<?php echo e(route('detailevenement')); ?>"><p class="text-left">Lire La suite   </p><i class="fa fa-arrow-right" aria-hidden="true" style="color: brown; display: flex; padding-top: 12px; padding-left: 10px"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-4">

        <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-xm-12">
          <div class="card">
              <img class="card-img-top" src="<?php echo e(url('public/images/WL_ELSWEDY_Elements_Page_Actualite/3072x1113/3.png')); ?>" alt="Card image cap">
              <div class="card-body">
                  <h5 class="card-title btn btn-danger">National</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  <a id="lirelasuite" class="card-text" href="<?php echo e(route('detailevenement')); ?>"><p class="text-left">Lire La suite   </p><i class="fa fa-arrow-right" aria-hidden="true" style="color: brown; display: flex; padding-top: 12px; padding-left: 10px"></i></a>
              </div>
          </div>
      </div>

        <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-xm-12">
            <div class="card">
                <img class="card-img-top" src="<?php echo e(url('public/images/WL_ELSWEDY_Elements_Page_Actualite/3072x1113/4.png')); ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title btn btn-danger">National</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <a id="lirelasuite" class="card-text" href="<?php echo e(route('detailevenement')); ?>"><p class="text-left">Lire La suite   </p><i class="fa fa-arrow-right" aria-hidden="true" style="color: brown; display: flex; padding-top: 12px; padding-left: 10px"></i></a>
                </div>
            </div>
        </div>
    </div>

    
    
    <!-- Pagination -->
    <div class="row pt-5 pb-5">
        <nav aria-label="Card pagination" style="background-color: white;">
            <ul class="pagination justify-content-center" >
              <li class="page-item">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa-arrow-left" aria-hidden="true" style=""></i></a>
              </li>
              <li class="page-item active"><a class="page-link" href="#"><p>1</p></a></li>
              <li class="page-item"><a class="page-link" href="#"><p>2</p></a></li>
              <li class="page-item"><a class="page-link" href="#"><p>3</p></a></li>
              <li class="page-item">
                <a class="page-link" href="#"><i class="fa fa-arrow-right" aria-hidden="true" style=""></i></a>
              </li>
            </ul>
          </nav>
    </div>


</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/whitelineservices.dz/elsewedysite.whitelineservices.dz/resources/views/actualite.blade.php ENDPATH**/ ?>