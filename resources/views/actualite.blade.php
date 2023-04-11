@extends('layouts.main')
<!--APropos's section-->
@section('title','Actualités')
@section('content')
    <div>
<!-- cover photo -->
<div class="card text-white">
    <img class="card-img" src="{{ asset('public/images/WL_ELSWEDY_Elements_Page_Actualite/3072x1164/Banner.png') }}" alt="Card image">
    <div class="card-img-overlay h-100 d-flex flex-column justify-content-center">
      <h1 id="contact_h1_title" class="card-title text-white display-1" style="margin-left:28px;font-weight:bold" >Actualités</h1>
    </div>
</div>
<div class="row" style="width:100%;margin-top:40px">
  <div class="col-xxl-9 col-xl-8 col-md-8 col-sm-7 col-xm-0"></div>
  <div class="col-xxl-3 col-xl-4 col-md-4 col-sm-5 col-xm-12">
      <div class="search-container">
          <form>
              <div class="md-form my-0">
    
                <input id="actSearchInput" class="form-control" type="text" placeholder="Recherche dans actualités" aria-label="Search" style="font-size: 17px">
              </div>
              <button id="actSearchBtn" href="#!" class="btn btn-outline-white btn-md my-0 ml-sm-2" type="submit" style="border-radius: 10px"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
      </div>
  </div>        
</div>
<div class=" pt-4" style="width:100%;margin:auto">
  

    <!-- Carousel with captions -->

    <div class="row pt-4"  >

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
              <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
            </ol>
            <style>
            .ps{
              font-size:40px !important;
            }
            @media screen and (max-width: 1520px) {

    .ps{
      font-size:30px !important;
    }
  }
  @media screen and (max-width: 1328px) {

.ps{
  font-size:20px !important;
}
}
@media screen and (max-width: 1028px) {

.ps{
  font-size:15px !important;
}
}
.ps2{
              font-size:35px !important;
            }
            @media screen and (max-width: 1520px) {

    .ps2{
      font-size:25px !important;
    }
  }
  @media screen and (max-width: 1328px) {

.ps2{
  font-size:15px !important;
}
}
@media screen and (max-width: 1028px) {

.ps2{
  font-size:10px !important;
}
}
.hs{
              font-size:40px !important;
              width: 40%;
            }
            @media screen and (max-width: 1520px) {

    .hs{
      font-size:30px !important;
    }
  }
  @media screen and (max-width: 1328px) {

.hs{
  font-size:20px !important;
}
}
@media screen and (max-width: 1028px) {

.hs{
  font-size:15px !important;
}
}
@media screen and (max-width: 1028px) {

.hs{
  width: 60% !important;
}
}
.hc{
              font-size:25px !important;
            }
            @media screen and (max-width: 1520px) {

    .hc{
      font-size:20px !important;
    }
  }
  @media screen and (max-width: 1328px) {

.hc{
  font-size:15px !important;
}
}
@media screen and (max-width: 400px) {

.hc{
  font-size:10px !important;
}
}
@media screen and (max-width: 1328px) {

.liresuite1{
  width: 20px !important;
}
.liresuite2{
 font-size: 10px !important;
}
}

            </style>
            <!-- Slides -->
            <div class="carousel-inner" style="width:80%;margin:auto">
              <div class="carousel-item active">
                <img src="{{ url('public/images/WL_ELSWEDY_Elements_Page_Actualite/3032x1113/1.png') }}" alt="Slide 1" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block w-100" style="left:5%">
                  <h5 style="margin-bottom:2%" class="card-title hs">Évenement</h5>
                  <p class="card-text ps w-100" style="text-align:left;font-weight:bold;">VISITE DU WALI D'AIN DEFLA AINSI QUE 15 DIPLOMATES</p>
                </div>
              </div>
              <div class="carousel-item">
                  <img src="{{ url('public/images/WL_ELSWEDY_Elements_Page_Actualite/3032x1113/2.png') }}" alt="Slide 2" class="d-block w-100">
                  <div class="carousel-caption d-none d-md-block w-100" style="left:5%">
                    <h5 style="width:40%;margin-bottom:2%" class="card-title hs">Évenement</h5>
                    <p class="card-text ps w-100" style="text-align:left;font-weight:bold;">VISITE DU WALI D'AIN DEFLA AINSI QUE 15 DIPLOMATES</p>
                  </div>
                </div>
                <div class="carousel-item">
                   <img src="{{ url('public/images/WL_ELSWEDY_Elements_Page_Actualite/3032x1113/2.png') }}" alt="Slide 2" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block w-100" style="left:5%">
                      <h5 style="width:40%;margin-bottom:2%" class="card-title hs">Évenement</h5>
                      <p class="card-text ps w-100" style="text-align:left;font-weight:bold;">VISITE DU WALI D'AIN DEFLA AINSI QUE 15 DIPLOMATES</p>
                    </div>
                  </div>
        
            </div>
            
            <!-- Controls -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
              <div style="width:40px;height:40px;border-radius:50%;background-color:#B71D32;display: flex;
              justify-content: center;
              align-items: center;
            ">
                  <i class="fa-solid fa-chevron-left" style="color:white;font-size:25px;line-height: 1;"></i>
              </div>
              
          
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                <div style="width:40px;height:40px;border-radius:50%;background-color:#B71D32;display: flex;
                justify-content: center;
                align-items: center;
              ">
                   <i class="fa-solid fa-chevron-right" style="color:white;font-size:25px;line-height: 1;"></i>
              </div>
           
          
            </a>
          </div>
          

    </div>

    <!-- Evenements (cards) -->

    <div class="row pt-4" style="width:80%;margin:auto">
        <div class="col-xxl-5 col-xl-5 col-md-5 col-sm-12 col-xm-12 sepx" >
            <div class="card" style="border:none;">
                <div style="position:relative;" >
                    <img class="card-img-top" style="width:100%;height:100%" src="{{ url('public/images/WL_ELSWEDY_Elements_Page_Actualite/3072x1113/1.png') }}" alt="Card image cap">
                <h5 class="card-title text-center titre-img hc" style="background-color:#E12630;color:white;position:absolute;bottom:-30px;left:20px;padding:15px;border-radius:30px;padding-left:10%;padding-right:10%">National</h5>
                </div>
               
                <div class="card-body" style="margin-top:20px">
                    <p class="card-text ps2" style='color:black;font-weight:bold'>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text ps2" style='color:black;font-weight:normal'>Fev 2023</p>
  
                    <a id="lirelasuite" class="card-text ps2" style="color:black;font-weight:normal" href="{{ route('detailevenement') }}"><div style="display:flex;justify-content:flex-end;align-items:center"><p class="card-text titre-img" style='color:black;font-weight:normal;padding-top:4px'>Lire La suite</p>  <div class="liresuite1" style="width:40px;border:1px solid #E12630;margin-left:10px"></div><i class="fa-sharp fa-solid fa-play liresuite2" style="color:#E12630;font-size:15px"></i></div> </a>
             
                </div>
            </div>
            <div style="width:96%;margin:auto;margin-bottom:50px;border-top:1px solid black;"></div>
            <div class="card" style="border:none;">
                <div style="position:relative;" >
                    <img class="card-img-top" style="width:100%;height:100%" src="{{ url('public/images/WL_ELSWEDY_Elements_Page_Actualite/3072x1113/1.png') }}" alt="Card image cap">
                <h5 class="card-title text-center titre-img hc" style="background-color:#E12630;color:white;position:absolute;bottom:-30px;left:20px;padding:15px;border-radius:30px;padding-left:10%;padding-right:10%">National</h5>
                </div>
               
                <div class="card-body" style="margin-top:20px">
                    <p class="card-text ps2" style='color:black;font-weight:bold'>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text ps2" style='color:black;font-weight:normal'>Fev 2023</p>
  
                    <a id="lirelasuite" class="card-text ps2" style="color:black;font-weight:normal" href="{{ route('detailevenement') }}"><div style="display:flex;justify-content:flex-end;align-items:center"><p class="card-text titre-img" style='color:black;font-weight:normal;padding-top:4px'>Lire La suite</p>  <div class="liresuite1" style="width:40px;border:1px solid #E12630;margin-left:10px"></div><i class="fa-sharp fa-solid fa-play liresuite2" style="color:#E12630;font-size:15px"></i></div> </a>
             
                </div>
            </div>
          <div style="width:96%;margin:auto;margin-bottom:50px;border-top:1px solid black;"></div>
        </div>
        <div class="col-xxl-2 col-xl-2 col-md-2 sep" style="width:4%">
<div style="height:90%;width:0%;margin:auto;margin-top:40px;border-left:1px solid black;"></div>
        </div>
        <div class="col-xxl-5 col-xl-5 col-md-5 col-sm-12 col-xm-12 sepx">
            <div class="card" style="border:none;">
                <div style="position:relative;" >
                    <img class="card-img-top" style="width:100%;height:100%" src="{{ url('public/images/WL_ELSWEDY_Elements_Page_Actualite/3072x1113/1.png') }}" alt="Card image cap">
                <h5 class="card-title text-center titre-img hc" style="background-color:#E12630;color:white;position:absolute;bottom:-30px;left:20px;padding:15px;border-radius:30px;padding-left:10%;padding-right:10%">National</h5>
                </div>
               
                <div class="card-body" style="margin-top:20px">
                    <p class="card-text ps2" style='color:black;font-weight:bold'>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text ps2" style='color:black;font-weight:normal'>Fev 2023</p>
  
                    <a id="lirelasuite" class="card-text ps2" style="color:black;font-weight:normal" href="{{ route('detailevenement') }}"><div style="display:flex;justify-content:flex-end;align-items:center"><p class="card-text titre-img" style='color:black;font-weight:normal;padding-top:4px'>Lire La suite</p>  <div class="liresuite1" style="width:40px;border:1px solid #E12630;margin-left:10px"></div><i class="fa-sharp fa-solid fa-play liresuite2" style="color:#E12630;font-size:15px"></i></div> </a>
             
                </div>
            </div>
          <div style="width:96%;margin:auto;margin-bottom:50px;border-top:1px solid black;"></div>
          <div class="card" style="border:none;">
              <div style="position:relative;" >
                  <img class="card-img-top" style="width:100%;height:100%" src="{{ url('public/images/WL_ELSWEDY_Elements_Page_Actualite/3072x1113/1.png') }}" alt="Card image cap">
              <h5 class="card-title text-center titre-img hc" style="background-color:#E12630;color:white;position:absolute;bottom:-30px;left:20px;padding:15px;border-radius:30px;padding-left:10%;padding-right:10%">National</h5>
              </div>
             
              <div class="card-body" style="margin-top:20px">
                  <p class="card-text ps2" style='color:black;font-weight:bold'>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text ps2" style='color:black;font-weight:normal'>Fev 2023</p>

                  <a id="lirelasuite" class="card-text ps2" style="color:black;font-weight:normal" href="{{ route('detailevenement') }}"><div style="display:flex;justify-content:flex-end;align-items:center"><p class="card-text titre-img" style='color:black;font-weight:normal;padding-top:4px'>Lire La suite</p>  <div class="liresuite1" style="width:40px;border:1px solid #E12630;margin-left:10px"></div><i class="fa-sharp fa-solid fa-play liresuite2" style="color:#E12630;font-size:15px"></i></div> </a>
           
              </div>
          </div>
        <div style="width:96%;margin:auto;margin-bottom:50px;border-top:1px solid black;"></div>
      </div>
    </div>

    <style>
    @media only screen and (max-width: 720px) {
  .sep {
   display:none;
  }
}
@media only screen and (max-width: 720px) {
  /* styles pour les écrans plus petits */
  .sepx {
    width: auto;
  }
}

@media only screen and (min-width: 769px) {
  /* styles pour les écrans plus grands */
  .sepx {
    width: 48%;
  }
}

    </style>
    
    <!-- Pagination -->
    <div class="row pt-5 pb-5">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
         <!--     <li >
                <a class="nav-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li> -->
              <li ><a class="nav-link xp" href="#">1</a></li>
              <li ><a class="nav-link xp" href="#">2</a></li>
              <li ><a class="nav-link xp" href="#">3</a></li>
              <li ><a class="nav-link xp" href="#">4</a></li>
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


          </style>
          <script>
          // Sélectionnez tous les liens de navigation
const navLinks = document.querySelectorAll('.xp');

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
</div>
@endsection