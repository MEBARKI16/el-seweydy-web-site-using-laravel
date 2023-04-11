<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/boxicons-2.1.2/css/boxicons.min.css')); ?>">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/style.css')); ?>" class="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/offredemploi.css')); ?>" class="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/contact_style.css')); ?>" class="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/job_offer_mtv_form.css')); ?>" class="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/fonts/icomoon/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/spontaneotheroffre/style.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.3/dist/sweetalert2.min.css" />

    <!----- cadidaure spontane ------>
    <link rel="stylesheet" href="<?php echo e(asset('public/fonts/icomoon/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/offredemploicss/owl.carousel.min.css')); ?>">
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/offredemploicss/style.css')); ?>">
    <!-- Actualite CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/actualite.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!------------------------------->
  </head>

  <body data-bs-spy="scroll" data-bs-target=".navbar">
    <header>
    <!--Navbar's section-->
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid">
            <a class="navbar-brand px-3 mt-1 mb-1" href="<?php echo e(route('index')); ?>">
                <img src="<?php echo e(asset('public/images/Logo.psd.png')); ?>" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active px-4" href="<?php echo e(route('index')); ?>">Accueil</a>
              </li>
              <li class="nav-item dropdown">

                <a class="nav-link px-4 dropdown-toggle" type="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Qui sommes nous</a>
                <ul class="dropdown-menu animate slideIn" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="<?php echo e(route('quisommesnous')); ?>">A propos de nous</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('motdudg')); ?>">Mot du P-DG</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('certificationsetagrements')); ?>">Certifications et agréments</a></li>
                  </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link px-4" href="<?php echo e(route('produits')); ?>">Nos Produits</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-4" href="<?php echo e(route('actualite')); ?>">Actualités</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link px-4 dropdown-toggle"  type="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">CARRIERE</a>
                <ul class="dropdown-menu animate slideIn" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="<?php echo e(route('offredemploi')); ?>">Carriere</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('candidaturespontane')); ?>">Offre d'emploi</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('candidaturespontane2')); ?>">Candidature spontanée</a></li>
                  </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link px-4" href="<?php echo e(route('contact')); ?>">Contact</a>
              </li>
            </ul>
              <div class="espace-client">
                <p class="text-user">
                  <i class="bx bxs-user"></i>
                  <a href="https://quotation.elsewedy.dz/login" target="black" style="color: black;">Espace client</a><br>
                  <div class="text-center">
                    <a href="" target="black" style="color: black">AR</a>
                    <a> | </a>
                    <a href="" target="black" style="color: black">ENG</a>
                  </div>
                </p>
              </div>
          </div>
        </div>
      </nav>
      </header>
     <main>
  
    <?php echo $__env->yieldContent('content'); ?>
  </div>
  </main>

   <!-- Newsletter -->
   <div class="container-fluid pb-4">
    <div class="row" style="float: right; margin-right:0%;">
    <!--  <div id="redirectedurl" class="col-xxl-5 col-xl-5 col-lg-5 col-md-8 col-sm-10 col-xm-11" style="float: right; background-color: black"> -->
          <?php if(session()->has('success')): ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <p class="text-center"><?php echo e(session()->get('success')); ?></p>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          <?php endif; ?>
    
          <?php if(session()->has('error')): ?>
              <div class="alert alert-info alert-dismissible fade show">
                  <?php echo e(session()->get('error')); ?>

                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          <?php endif; ?>
    
          <form method="POST" action="<?php echo e(url('newsletterSubscribe')); ?>" class="" >
            <?php echo csrf_field(); ?>
            <div class="row form-inscription" style="text-align: right;">Inscrivez-vous à notre newsletter et restez à jour ! </div>
            <div class="row align-items-center">
              <input type="email" name="email_newsletter" class="navbar-mail col-4 form-control px-3" placeholder="Adresse-email" id="exampleInputEmail1" aria-describedby="emailHelp">
              <button type="submit" class="col-2 btn btn-subm px-3" style="margin-right: 100px;">S'inscrire</button>
            </div>
          </form>
    </div>
  <!--   </div> -->
  </div>

  <!-- New Footer -->
  <!-- Remove the container if you want to extend the Footer to full width. -->
  <footer class="mt-5" style="background-color: #b30023; text-align: center;">
    <div class="container pt-2 pb-2">
      <div class="row pt-2">
          
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xm-3">
          <div style="background-color: #DADADA; background-position: center; height: 100%; width: 50px; margin-top: -16px;">
            <img src="<?php echo e(asset('public/images/Logo.psd.png')); ?>" alt="" style="width: 100%; height: 100%;">
          </div>
        </div>

        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xm-6">
          <p class="text-capitalize" style="color: white;"> <!-- display: inline-block; -->
            Copyright &copy; <?php
            date_default_timezone_set('America/Chicago');
            $info = getdate();
            $year = $info['year'];
            echo $year
            ?>  ElsewedyElectric.com. Tous les droits sont réservés.
          </p>
        </div>

        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xm-3">
          <ul class="list-inline"> <!-- style="display: inline-block; margin-left: 10px;" -->
            <li class="list-inline-item">
              <a href="javascript:void(0);">
                <i class="fab fa-facebook-f fa-lg" style="color: white;"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="javascript:void(0);">
                <i class="fab fa-linkedin fa-lg" style="color: white;"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </footer>
  
<!-- End of .container -->
  <!-- END New footer -->
  
<!-- Finishied newsletter page -->
  <!-- Bottom-red's section-->
 <!-- old footer 
 <footer>
  <div class="text-center bottomm-navbarr">
    <div class="bottomm-navbar row col-12 d-flex align-items-center xs-auto">
      <div class="col xs-auto">
        <div class="row justify-content-center">
          <div class="col-3 logo_gris xs-auto">
            <img src="{asset('public/images/Logo.psd.png')}}" alt="" style="height:40px; width:70px;margin-top: 4px;">
          </div>
        </div>
      </div>
      <div class="col justify-content-center xs-auto">
        <p>Copyright 
           ElsewedyElectric.com. Tous les droits sont réservés</p>
      </div>
      <div class="row col justify-content-center xs-auto red-icons">
        <div class="row justify-content-center xs-auto">
          <div class="col-1 px-2">
            <a class="btnn btnn" href="#!" role="button">
              <i class='bx bxl-facebook icon-buttom-navbar'></i>
            </a>
          </div>
          <div class="col-1 px-2">
            <a class="btnn btnn" href="#!" role="button">
              <i class='bx bxl-twitter icon-buttom-navbar'></i>
            </a>
          </div>
          <div class="col-1 px-2">
            <a class="btnn btnn" href="#!" role="button">
              <i class='bx bxl-youtube icon-buttom-navbar'></i>
            </a>
          </div>
          <div class="col-1 px-2">
            <a class="btnn btnn" href="#!" role="button">
              <i class='bx bxl-linkedin icon-buttom-navbar'></i>
            </a>
          </div>
      </div>
      </div>
    </div>
  </div>
</footer>
  endold footer -->

 <!--   <script src="{asset('public/js/jquery.min.js')}}"></script>  -->
    <!-- Bootstrap JS Bundle with Popper -->
   <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
 <!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.3/dist/sweetalert2.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo e(asset('public/js/contactsendmail.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/search_job.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/spantaneclient.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/spantaneclient2.js')); ?>"></script>

    <script>
      var el = $('#prlbx');

      /** If page resized **/
      $(window).on('resize', function() {
      var width_device = parseInt($(window).width());
      if (width_device <= parseInt(760)) {
        // code to run when screen width is at most 760 pixels
        //alert(width_device);
        el.removeClass('parallel-boxs');
        
      } else {
        // code to run when screen width is greater than 760 pixels
        //alert(width_device);
        el.removeClass('parallel-boxs');
        $('#prlbx').addClass('parallel-boxs');
      }
    });

    /** If page refreshed **/
    $(document).ready(function() {
      // Code to run when the page is loaded or refreshed
      var width_device = parseInt($(window).width());
      if (width_device <= parseInt(760)) {
        // code to run when screen width is at most 760 pixels
        //alert(width_device);
        el.removeClass('parallel-boxs');
        
      } else {
        // code to run when screen width is greater than 760 pixels
        //alert(width_device);
        el.removeClass('parallel-boxs');
        $('#prlbx').addClass('parallel-boxs');
      }
    });
    </script>
    
    <script> $('.hey').slick({
      infinite: true,
      speed: 300,
      cssEase: 'linear',
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: true,
      nextArrow:$('.next'),
      prevArrow:$('.prev'),
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });

    </script>

    <script> $('.act').slick({
      infinite: true,
      speed: 300,
      cssEase: 'linear',
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: true,
      nextArrow:$('.next1'),
      prevArrow:$('.prev1'),
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
          }
        },
        {
          breakpoint: 900,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
    </script>

    <script> $('.partenaire').slick({
      infinite: true,
      speed: 300,
      cssEase: 'linear',
      slidesToShow: 5,
      slidesToScroll: 1,
      arrows: true,
      nextArrow:$('.next2'),
      prevArrow:$('.prev2'),
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
          }
        },
        {
          breakpoint: 700,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
    </script>
    <?php echo $__env->yieldContent('js'); ?>
  </body>
</html><?php /**PATH C:\wamp64\www\amine\resources\views/layouts/main.blade.php ENDPATH**/ ?>