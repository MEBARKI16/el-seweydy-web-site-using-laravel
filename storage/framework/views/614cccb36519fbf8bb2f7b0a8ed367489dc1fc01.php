
<!--APropos's section-->
<?php $__env->startSection('title','Actualités'); ?>
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
                <div style="position:relative">
                     <img class="card-img-top" style="width:100%;height:100%" src="<?php echo e(url('public/images/WL_ELSWEDY_Elements_Page_Actualite/3072x1113/1.png')); ?>" alt="Card image cap">
                <h5 class="card-title text-center titre-img" style="background-color:#E12630;color:white;position:absolute;bottom:-30px;left:20px;width:30%;padding:15px;border-radius:30px;padding-left:30px;padding-right:30px">National</h5>
                </div>
               
                <div class="card-body" style="margin-top:20px">
                    <p class="card-text titre-img" style='color:black;font-weight:bold'>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text titre-img" style='color:black;font-weight:normal'>Fev 2023</p>
  
                    <a id="lirelasuite" class="card-text titre-img" style="color:black;font-weight:normal" href="<?php echo e(route('detailevenement')); ?>"><div style="display:flex;justify-content:flex-end;align-items:center"><p class="card-text titre-img" style='color:black;font-weight:normal;padding-top:4px'>Lire La suite</p>  <div style="width:40px;border:1px solid #E12630;margin-left:5px"></div><i class="fa-sharp fa-solid fa-play" style="color:#E12630;font-size:15px"></i></div> </a>
             
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
                    <div style="display:flex;justify-context:flex-end">
                      <a id="lirelasuite" class="card-text" href="<?php echo e(route('detailevenement')); ?>"><p class="text-left">Lire La suite   </p><i class="fa fa-arrow-right" aria-hidden="true" style="color: brown; display: flex; padding-top: 12px; padding-left: 10px"></i></a>
                    </div>
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
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
         <!--     <li >
                <a class="nav-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li> -->
              <li ><a class="nav-link" href="#">1</a></li>
              <li ><a class="nav-link" href="#">2</a></li>
              <li ><a class="nav-link" href="#">3</a></li>
              <li ><a class="nav-link" href="#">4</a></li>
           <!--     <li >
                <a class="nav-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>-->
            </ul>
          </nav>
          <style>
              .pagination .nav-link{
                  text-decoration: none !important;
                  border: none;
                  color: black;
              }
            
          .pagination .nav-link:hover {
              text-decoration: none;
              border: none;
  color: red;
  transition: all 0.3s ease-in-out;
}
.pagination .active {
      color:red !important;
}
.titre-img {
        font-size: 1.5rem;
      }
      @media (max-width: 768px) {
        .titre-img {
          font-size: 1rem;
        }
      }
      @media (max-width: 480px) {
        .titre-img {
          font-size: 0.8rem;
        }
      }

          </style>
          <script>
          // Sélectionnez tous les liens de navigation
const navLinks = document.querySelectorAll('.nav-link');

// Parcourez chaque lien de navigation
navLinks.forEach(function(navLink) {
  // Ajoutez un gestionnaire d'événements au clic
  navLink.addEventListener('click', function(event) {
    // Empêchez le comportement de lien par défaut
    event.preventDefault();
    // Supprimez la classe "active" de tous les liens de navigation
    navLinks.forEach(function(link) {
      link.classList.remove('active');
    });
    // Ajoutez la classe "active" au lien cliqué
    navLink.classList.add('active');
  });
});
          </script>
    </div>


</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\amine\resources\views/actualite.blade.php ENDPATH**/ ?>