@extends('layouts.main')
 <!--APropos's section-->
 @section('content')


  <!-- Intro settings -->
  <style>
    /* Default height for small devices */
    #intro-example {
      width: 100%;
      margin: auto;
    }
    #accueil_btn{
        color: white;
        font-weight: 400;
        border-radius: 20px;
    }
    #accueil_btn:hover{
      background: #b30023;
      border: transparent;
    }
  
    #produits button{
        color: white;
        font-weight: 400;
        border-radius: 20px;
    }
    #produits button:hover{
      /* background: #b30023; */
      border: transparent;
    }
    #fil-cables{
      margin-top: 0%;
      padding-bottom: 1% !important;
    }
    #acceil_text{
      padding-top: 10% !important;
      padding-bottom: 10% !important;
    }
    #produits{
      padding-top: 2% !important;
    }
    #partenaires{
      padding-top: 0% !important;
      padding-bottom: 0% !important;
    }
    #actualites{
      padding-top: 0% !important;
    }

    /* Set the initial background color and opacity of the carousel images */
    .portfolio-item {
      background-color: #fcfcfc;
      opacity: 0.6;
      transition: background-color 0.5s ease, opacity 0.5s ease;
    }
    /* On hover, remove the background color and opacity */
    .portfolio-item:hover {
      background-color: transparent;
      opacity: 1;
    }

    @media only screen and (max-width: 760px){
      #fil-cables{
        margin-top: 8%;
      }
    }
    /* Height for devices larger than 992px */
    @media (min-width: 992px) {
      #intro-example {
        height: 700px;
      }
    }

    @media (min-width: 1618) {
      #intro-example {
        height: 300px;
      }
    }
    .opac:hover{
opacity: 1 !important;
    }
  </style>

  <!-- Background image -->
  <header id="intro-example" class="p-5 text-center bg-image pb-5 pt-5"
  style="background-image: url('public/images/home_banner.webp'); background-repeat: no-repeat; background-size: cover; background-position: center center">
    <div id="acceil_text" class="mask" style="background-color: rgba(0, 0, 0, 0);">
      <div class="d-flex justify-content-center align-items-center h-100" style="float: left;">
        <div class="text-white" style="text-align: left;">
          <h1 class="mt-5 mb-5" style="font-size: 200%; font-weight: 900">Construire<br>un avenir concret</h1>
          <h5 class="mt-4 mb-4" style="font-size: 100%">
            Leader depuis plus de 80 ans
          </h5>
          <a href=""><button id="accueil_btn" type="button" class="btn btn-decouvrir-plus" href="#!">Voir les projets</button></a>
          <a href="{{ route('contact') }}"><button id="accueil_btn" type="button" class="btn btn-decouvrir-plus">Nous contacter</button></a>
        </div>
      </div>
    </div>
  </header>
  <!-- Background image -->


<!--

 <section id="apropos">
      style="height:550px; position: relative; top: -100px;"
      <img src={asset('public/images/home_banner.webp')}}" alt=""  >
        <div class="apropos container">
          <h1 class="text-white display-4">Construire<br>un avenir concret</h1>
          <h3 class="text-white">Leader depuis plus de 80 ans</h3>
          <div class="Bouttons_aprpos">
            <a href="#" class="btn btn-outline-dark">Voir les projets</a>
            <a href="{ route('contact') }}" class="btn btn-outline-dark">Nous contacter</a>
          </div>
        </div>
    </section>  -->

    <!--fil_cable's section-->
    <section id="fil-cables" >
      <!--<h1 class="display-4">FIL ET CÂBLES</h1>-->
      <h1 class="display-4">ELSEWEDY ELECTRIC</h1>
      <img class="points center" src="{{asset('public/images/points.png')}}" alt="">
      <div class="text-icon-fil1" style="background-color: transparent; height: 25px;width: 100%;"></div>
      <h6 class="textt" >
        Leadeur en matière de solution énergétique et fabricant de câbles depuis plus de 80 ans, 
        Elsewedy Electric a entamé son parcours en Égypte avec une vision claire, celle de se positionner en tant que leadeur 
        du marché.
        <div class="text-icon-fil1" style="background-color: transparent; height: 25px;width: 100%;"></div>
        Depuis sa création, Elsewedy Electric s’est transformée en une société mondiale diversifiée pour devenir, 
        aujourd’hui, l’une des meilleures organisations offrant de solutions énergétiques au Moyen-Orient, 
        en Afrique et dans certains pays européens et asiatiques.
      </h6>
      <div class="text-icon-fil1" style="background-color: transparent; height: 25px;width: 100%;"></div>
      <div class="button_a_propos">
      <a href="{{route('quisommesnous')}}"><button type="button" class="a_propos"> à propos</button></a>
      </div>
      <div class="text-icon-fil1" style="background-color: transparent; height: 120px;width: 100%;"></div>
      <div class="hline"></div>
      <div class="text-center">
        <div class="row d-flex align-items-center bckg-red align-self-center">
          <div class="ligne_fil1 col" id="ligne_fil">
            <img src="{{asset('public/images/line1.png')}}" alt="" class="ligne">
          </div>
          <div class="col-10 align-self-center text-center justify-content-center mx-auto">
            <div class="chiffres-div">
              <div class="chiffres-sousdiv">
                CHIFFRES clés
              </div>  
            </div>
            <div class="infos-chiffres container row gy-2 d-flex  col-12 text-center">
              <div class="col">
                <img src="{{asset('public/images/fill.png')}}" alt="" style="height: 60px; width: 60px;">
                <div class="text-icon-fil"></div>
                <h6>+30 000<br>Tonnes de câbles / an</h6>
              </div>
              <div class="col">
                <img src="{{asset('public/images/fill2.png')}}" alt="" style="height: 60px; width: 60px;">
                <div class="text-icon-fil"></div>
                <h6>+3 000<br>Transformateurs / An</h6>
              </div>
              <div class="col">
                <img src="{{asset('public/images/fill3.png')}}" alt="" style="height: 60px; width: 60px;">
                <div class="text-icon-fil"></div>
                <h6>+3 000<br>Pièces d’accessoires de câbles / An</h6>
              </div>
            </div>
          </div>
          <div class="ligne_fil2 col" id="ligne_fil" style="margin-right: 0px !important;">
            <img src="{{asset('public/images/line2.png')}}" alt="" class="ligne" id="ligne_filcable">
          </div>
        </div>
        <div class="text-icon-fil3" style="height: 30px;"></div>
        <h6 class="textt">L’usine étant opérationnelle depuis 2008, 
          a atteint une capacité de production de 30 000 Tonnes/an de câbles en cuivre et en aluminium.
        </h6>
      </div>
    </section>

  <!--produits's section -->
  <section id="produits">
      <h1 class="display-4">Nos produits</h1>
      <img class="points center" src="{{asset('public/images/points.png')}}" alt="">
      <div style="background-color: #fff;height:30px;width: 100%;"></div>
          <div class="text-center">
            <div class="row">
              <div class="prevprod col-2 d-flex" style="justify-content:center;align-items:center">
                  <div class="opac" style="width:40px;height:40px;border-radius:50%;background-color:#B71D32;display: flex;
                  justify-content: center;
                  align-items: center;opacity:0.5;
                ">
                      <i class="fa-solid fa-chevron-left" style="color:white;font-size:25px;line-height: 1;"></i>
                  </div>
              </div>
              <div class="container hey col-8">
                <div class="col p-2">
                  <div class="portfolio-item">
                    <img src="{{asset('public/images/cables.jpg')}}" alt="">
                    <div class="portfolio-overlay">
                        <div>
                            <h4>cÂbles</h4>
                            <button type="button" class="btn btn-decouvrir-plus" href="#!">Découvrir plus</button>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col p-2">
                  <div class="portfolio-item">
                    <img src="{{asset('public/images/accessoires.jpg')}}" alt="">
                    <div class="portfolio-overlay">
                        <div>
                          <h4>accessoires</h4>
                          <button type="button" class="btn btn-decouvrir-plus" href="#!">Découvrir plus</button>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col p-2">
                  <div class="portfolio-item">
                    <img src="{{asset('public/images/transfor.jpg')}}" alt="">
                    <div class="portfolio-overlay">
                        <div>
                          <h4>Transformateurs</h4>
                          <button type="button" class="btn btn-decouvrir-plus" href="#!">Découvrir plus</button>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col p-2">
                  <div class="portfolio-item">
                    <img src="{{asset('public/images/trans_dis.jpg')}}" alt="">
                    <div class="portfolio-overlay">
                        <div>
                          <h4>TRANSMISSION<br>& distribution</h4>
                          <button type="button" class="btn btn-decouvrir-plus" href="#!">Découvrir plus</button>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col p-2">
                  <div class="portfolio-item">
                    <img src="{{asset('public/images/Group24.jpg')}}" alt="">
                      <div class="portfolio-overlay">
                          <div>
                            <h4>cÂbles haute<br>TENSION</h4>
                            <button type="button" class="btn btn-decouvrir-plus" href="#!">Découvrir plus</button>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
            <div class="nextprod col-2 d-flex" style="justify-content:center !important;align-items:center !important">
                <div class="opac" style="width:40px;height:40px;border-radius:50%;background-color:#B71D32;display: flex;
                justify-content: center;
                align-items: center;opacity:0.5
              ">
                   <i class="fa-solid fa-chevron-right" style="color:white;font-size:25px;line-height: 1;"></i>
              </div>
            </div>
          </div>
        </div>
  </section> 

  <!--actualités's section -->
  <section id="actualites" >
    <h1 class="display-4">actualités</h1>
    <img class="points center" src="{{asset('public/images/points.png')}}" alt="">
    <div style="background-color: #fff;height:30px;width: 100%;"></div>
    <div class="text-center">
      <div class="row actual d-flex align-items-center back-act">
        <div class="prev1 col-2 d-flex" style="justify-content:center;align-items:center">
            <div class="opac" style="width:40px;height:40px;border-radius:50%;background-color:white;display: flex;
            justify-content: center;
            align-items: center;opacity:0.5
          ">
                <i class="fa-solid fa-chevron-left" style="color:#B71D32;font-size:25px;line-height: 1;"></i>
            </div>
        </div>
        <div class="container act col-8">
          <div class="col px-5">
            <div class="act-item">
              <img src="{{asset('public/images/act1.png')}}" alt="">
              <div class="act-overlay">
                  <div>
                      <h6>La division solutions environnementales d'Elsewedy lance deux projets</h6>
                      <a href="#" class="act-suite position-absolute bottom-0 end-0">LA SUITE
                        <i class="bx bxs-right-arrow" style="color: #fff;"></i>
                      </a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col px-5">
            <div class="act-item">
              <img src="{{asset('public/images/act2.png')}}" alt="">
              <div class="act-overlay">
                  <div>
                    <h6>Elsewedy Electric renforce sa position en Asie avec deux acquisitions</h6>
                    <a href="#" class="act-suite position-absolute bottom-0 end-0">LA SUITE
                      <i class="bx bxs-right-arrow" style="color: #fff;"></i></a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col px-5">
            <div class="act-item">
              <img src="{{asset('public/images/act1.png')}}" alt="">
              <div class="act-overlay">
                  <div>
                    <h6>La division solutions environnementales d'Elsewedy lance deux projets</h6>
                    <a href="#" class="act-suite position-absolute bottom-0 end-0">LA SUITE
                      <i class="bx bxs-right-arrow" style="color: #fff;"></i></a>
                  </div>
              </div>
            </div>
          </div>
      </div>
      <div class="next1 col-2 d-flex" style="justify-content:center !important;align-items:center !important">
          <div class="opac" style="width:40px;height:40px;border-radius:50%;background-color:white;display: flex;
          justify-content: center;
          align-items: center;opacity:0.5
        ">
             <i class="fa-solid fa-chevron-right" style="color:#B71D32;font-size:25px;line-height: 1;"></i>
        </div>
      </div>
    </div>
  </div>
  </section>

  <!--partenaires's section-->
  <section id="partenaires">
      <h1 class="display-4">nos partenaires</h1>
      <img class="points center" src="{{asset('public/images/points.png')}}" alt="">
      <div style="background-color: #fff;height:30px; width: 100%;"></div>
    <div class="text-center">
      <div style="background-color: #b30023;height:8px; "></div>
      <div class="row d-flex align-items-center" style="background-color: #DADADA;margin-right: 0px !important;margin-left: 0px !important;">
        <div class="prev2 col-2 d-flex" style="justify-content:center;align-items:center">
            <div class="opac" style="width:40px;height:40px;border-radius:50%;background-color:#B71D32;display: flex;
            justify-content: center;
            align-items: center;opacity:0.5
          ">
                <i class="fa-solid fa-chevron-left" style="color:white;font-size:25px;line-height: 1;"></i>
            </div>
        </div>
        <div class="container partenaire  col-8">
          <div class="col px-4" style="border-right-style:dashed;border-right-width:2px; border-color: transparent;"> <!--  border-color: #b30023 -->
            <img src="{{asset('public/Logos/1x/CosiderPNG.png')}}" alt="">
          </div>
          <div class="col px-4" style="border-right-style:dashed;border-right-width:2px; border-color:transparent;">
            <img src="{{asset('public/Logos/1x/DjezzyPNG.png')}}" alt="">
          </div>
          <div class="col px-4" style="border-right-style:dashed;border-right-width:2px; border-color:transparent;">
            <img src="{{asset('public/Logos/1x/SonatrachPNG.png')}}" alt="">
          </div>
          <div class="col px-4" style="border-right-style:dashed;border-right-width:2px; border-color:transparent;">
            <img src="{{asset('public/Logos/1x/SonelgazPNG.png')}}" alt="">
          </div>
          <div class="col px-4" style="border-right-style:dashed;border-right-width:2px; border-color:transparent;">
            <!--position: relative;margin-top: 0px !important;margin-bottom: 0px !important;padding:55px;"-->
            <img src="{{asset('public/Logos/1x/AlstomPNG.png')}}" alt="">
          </div>
          <div class="col px-4" style="border-right-style:dashed;border-right-width:2px; border-color:transparent;">
            <img src="{{asset('public/Logos/1x/SonatrachPNG.png')}}" alt="">
          </div>
        </div>
        <div class="next2 col-2 d-flex" style="justify-content:center !important;align-items:center !important">
            <div class="opac" style="width:40px;height:40px;border-radius:50%;background-color:#B71D32;display: flex;
            justify-content: center;
            align-items: center;opacity:0.5
          ">
               <i class="fa-solid fa-chevron-right" style="color:white;font-size:25px;line-height: 1;"></i>
          </div>
        </div>
    </div>
    <div style="background-color: #b30023;height:8px;width: 100%;">
  </div>
  </section>
  <div class="text-icon-fil1" style="background-color: transparent; height: 25px;width: 100%;"></div>
  @endsection