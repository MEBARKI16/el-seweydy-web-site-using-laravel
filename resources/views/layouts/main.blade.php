<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/css/boxicons-2.1.2/css/boxicons.min.css')}}">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}" class="stylesheet">
    <link rel="stylesheet" href="{{asset('public/css/offredemploi.css')}}" class="stylesheet">
    <link rel="stylesheet" href="{{asset('public/css/contact_style.css')}}" class="stylesheet">
    <link rel="stylesheet" href="{{asset('public/css/job_offer_mtv_form.css')}}" class="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/css/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/spontaneotheroffre/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.3/dist/sweetalert2.min.css" />

    <!----- cadidaure spontane ------>
    <link rel="stylesheet" href="{{ asset('public/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/offredemploicss/owl.carousel.min.css') }}">
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('public/css/offredemploicss/style.css') }}">
    <!-- Actualite CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/actualite.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .navbar-nav .nav-item a:hover {
      color: red; /* Change to your desired background color */
   
        }
        .xx4{
background-color:transparent !important;
        }
        .dropdown-menu li a:hover{
background-color:transparent !important;
        }
        .form-control:focus {
  outline: none !important;
}
      </style>
        <style>
            .form-control:focus{
              box-shadow: 0 0 0 0.25rem #B71D32 !important;
            }
            </style>
    <!------------------------------->
  </head>

  <body data-bs-spy="scroll" data-bs-target=".navbar">
    <header style="width:100%" id="tophome">
    <!--Navbar's section-->
    <nav class="navbar navbar-expand-lg bg-white" style="width:100%">
        <div class="container-fluid" style="display:flex;">
            <a class="navbar-brand px-3 mt-1 mb-1" href="{{route('index')}}">
                <img src="{{asset('public/images/Logo.psd.png')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link elsize xp2" href="{{route('index')}}">Accueil</a>
              </li>
              <li class="nav-item dropdown">

                <a class="nav-link  dropdown-toggle elsize xp2" type="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Qui sommes nous</a>
                <ul class="dropdown-menu animate slideIn" aria-labelledby="dropdownMenuLink">
                    <li class="xx3 xx4" style="background-color:blue"><a class="dropdown-item elsize xx4" href="{{route('quisommesnous')}}" >A propos de nous</a></li>
                    <li class="xx3"><a class="dropdown-item elsize"  href="{{route('motdudg')}}" >Mot du P-DG</a></li>
                    <li class="xx3"><a class="dropdown-item elsize" href="{{route('certificationsetagrements')}}" >Certifications et agréments</a></li>
                  </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link xp2  elsize" href="{{route('produits')}}" >Produits</a>
              </li>
              <li class="nav-item">
                <a class="nav-link xp2  elsize" href="{{route('actualite')}}" >Actualités</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link  dropdown-toggle elsize xp2"  type="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" >CARRIERE</a>
                <ul class="dropdown-menu animate slideIn" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item elsize" href="{{route('offredemploi')}}" >Carriere</a></li>
                    <li><a class="dropdown-item elsize" href="{{route('candidaturespontane')}}" >Offre d'emploi</a></li>
                    <li><a class="dropdown-item elsize" href="{{route('candidaturespontane2')}}" >Candidature spontanée</a></li>
                  </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link xp2  elsize" href="{{route('contact')}}">Contact</a>
              </li>
            </ul>
            <div class="container" style="display:flex;justify-content:space-around;align-items:center;width:50%">
              <div class="search-container">
                <form>
                    <div class="md-form my-0">
                      <input id="actSearchInput" class="form-control elsize" type="text" placeholder="Que cherchez vous?" aria-label="Search" style="font-size:10px">
                    </div>
                    <button id="actSearchBtn" href="#!" class="btn btn-outline-white btn-md my-0 ml-sm-2 elsize" type="submit" style="border-radius: 10px;"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
              <div class="" style="display:flex;flex-direction:column;justify-content:center;align-items:center">
               
                <span class="text-center">
                    <a href="" target="black" class="elsize" style="color: black;">AR</a>
                    <a> | </a>
                    <a href="" target="black" class="elsize" style="color: black;">ENG</a>
                  </span>
              </div>
              <button type="button" class="btn elsize" style="color:white;background-color:#b30023;border-radius:50px;width:30%;"> <div style="display:flex;justify-content:center;align-items:center" class="text-user">
                  <i class="bx bxs-user elsize" style="color:white" ></i>
                  <a href="https://quotation.elsewedy.dz/login" style="color:white" class="elsize" target="black" >Espace client</a><br>
                </div> </button>
            </div>
          <style>
          .elsize{
            font-size:15px !important;
          }

@media only screen and (max-width: 1350px) {
  /* styles pour les écrans plus petits */
  .elsize{
            font-size:13px !important;
          }
}
@media only screen and (max-width: 1234px) {
  /* styles pour les écrans plus petits */
  .elsize{
            font-size:10px !important;
          }
}
@media only screen and (max-width: 1072px) {
  /* styles pour les écrans plus petits */
  .elsize{
            font-size:8px !important;
          }
}
@media only screen and (max-width: 991px) {
  /* styles pour les écrans plus petits */
  .elsize{
            font-size:15px !important;
          }
}

li .active{
  color:red;
}
          </style>
          </div>
        </div>
      </nav>
      </header>
     <main>
  
    @yield('content')
  
  </main>

   <!-- Newsletter -->
   <div class="container-fluid pb-4">
    <div class="row" style="float: right; margin-right:0%;">
    <!--  <div id="redirectedurl" class="col-xxl-5 col-xl-5 col-lg-5 col-md-8 col-sm-10 col-xm-11" style="float: right; background-color: black"> -->
          @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <p class="text-center">{{ session()->get('success') }}</p>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          @endif
    
          @if(session()->has('error'))
              <div class="alert alert-info alert-dismissible fade show">
                  {{ session()->get('error') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          @endif
    
          <form method="POST" action="{{ url('newsletterSubscribe') }}" class="" >
            @csrf
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
  <footer class="mt-5" style="background-color: #b30023; text-align: center;" >
      <div class="row " style="height:100%">
          
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xm-3">
            <div id="myFooter" style="background-color: #DADADA; background-position: center; height: 100%; width: 150px; margin:auto;">
             <a href="{{route('index')}}"><img src="{{ asset('public/images/Logo.psd.png') }}"  alt="" style="width: 80%; height: 80%;margin:auto;margin-top:10px"></a>   
              </div>
        </div>

        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xm-6">

          <p class="text-capitalize" style="color: white;margin-top:20px;font-size:18px"> <!-- display: inline-block; -->
            Copyright &copy; <?php
            date_default_timezone_set('America/Chicago');
            $info = getdate();
            $year = $info['year'];
            echo $year
            ?>  ElsewedyElectric.com. Tous les droits sont réservés.
          </p>
        </div>

        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xm-3">
          <ul class="list-inline" style="margin-top:20px"> <!-- style="display: inline-block; margin-left: 10px;" -->
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
            <li  class="list-inline-item" style="margin-left:50px"><button type="button" class="btn" style="background-color:white"><a href="#tophome" style="color:black"><i class="fa-sharp fa-solid fa-arrow-up" style="margin-right:5px"></i>Haut</a></button></li>
          </ul>
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
    <script src="{{ asset('public/js/contactsendmail.js')}}"></script>
    <script src="{{ asset('public/js/search_job.js')}}"></script>
    <script src="{{ asset('public/js/spantaneclient.js')}}"></script>
    <script src="{{ asset('public/js/spantaneclient2.js')}}"></script>
  
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
    $(document).ready(function() {
    $('.btn-prod-menu2').mouseenter(function() {
      $(this).addClass('active');
      $('#' + $(this).data('show')).slideDown(200);
    });
    
    $('.btn-prod-menu2').mouseleave(function() {
      $(this).removeClass('active');
      $('#' + $(this).data('show')).slideUp(200);
    });
    
    $('.menu_items').mouseenter(function() {
      $(this).stop();
    });
    
    $('.menu_items').mouseleave(function() {
      $('.btn-prod-menu2').removeClass('active');
      $(this).slideUp(200);
    });
  });
    </script>
    
    <script> $('.hey').slick({
      infinite: true,
      speed: 300,
      cssEase: 'linear',
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: true,
      nextArrow:$('.nextprod'),
      prevArrow:$('.prevprod'),
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
    $(document).ready(function() {
      var url = window.location.href;
      
      // Set active class and styles for clicked navbar li
      $('.navbar-nav .nav-item a').filter(function() {
        return this.href == url;
      }).addClass('active').css({
       /* Change to your desired background color */
        'color': 'red',
        'background-color': 'transparent', /* Add this line to change the text color to white */
        
      });
      // Set active class and styles for parent li of clicked dropdown menu
      $('.dropdown-menu').find('a').each(function() {
        if (this.href == url) {
    $(this).closest('.nav-item').children("a").addClass('active').css({
        /* Change to your desired background color */
        /* Change the background color */
        'color': 'red' /* Change the text color to white */
    });
}

      });
    });
    </script>
    @yield('js')
  </body>
</html>