
 <!--APropos's section-->
 <?php $__env->startSection('title','CARRIERE'); ?>
 <?php $__env->startSection('content'); ?>

 <style>

@import  url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap");
 
 #carriere_id{
    font-weight: 700px;
    font-size: 4rem;    
    font-family: "Source Sans Pro";
 }
 
 #div_carriere_desc_text{
    text-align: center;
}
#carriere_desc_text{
    font-size: 24px;
    font-weight: 400;
    color: black;
    text-align: justify;
    line-height: 27px; 
    font-family: "Source Sans Pro";
}
/*#background-img {
  width: 100%;
  height: 100vh;
  object-fit: cover;
  object-position: center;
} */
    #background-img{
        background: url('public/images/offredemploi/Carriere.png')no-repeat center center;
        background-size: cover;
        width: 100%;
        height: 100%;
        padding-bottom: 30%;
        margin-bottom: 5%;
    }
    #offredmpdetail{
        font-weight: 700px; 
        font-size: 4rem;
        font-family: "Source Sans Pro";
        text-align: left;
        padding-top: 20%;
    }
    body{
            overflow-x: hidden;
            text-align: justify;
        }
    @media  only screen and (max-width: 760px){
        body{
            overflow-x: hidden;
            text-align: justify;
            
        }
        #background-img{
                background: url('public/images/offredemploi/Carriere.png')no-repeat center center;
                background-size: cover;
                width: 100%;
                height: 100%;
                padding-bottom: 30%;
                margin-bottom: 16%;
            }
            #offredmpdetail{
                font-weight: 500px;
                font-size: 1.8rem;    
                font-family: "Source Sans Pro";
                padding-top: 10%;
                text-align: left;
                margin-top: 10%;
            }
        #carriere_id{
            font-weight: 400px;
            font-size: 2.3rem;
            text-align: left;
            margin-top: 12%;
        }
        #carriere_els{
            margin-top: -20%;
        }
        #carriere_desc_text{
            color: black;
            text-transform: capitalize;
            text-align: justify;
            font-size: 17px;
            font-weight: 500;
        }
    }
  
    @media  only screen and (max-width: 280px){
       
    }
    
   </style>


<header id="background-img" class="text-left text-white masthead" style="">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 id="offredmpdetail" class="text-white text-left display-4">Carrière</h2>
            </div>
        </div>
    </div>
</header>

    <!--APropos's section-->
    
      <!--  <div id="offredemploi_img" class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--style="height:550px; position: relative; top: -100px;"-->
            <!--    <img id="background-img" src="{asset('public/images/offredemploi/Carriere.png')}}" alt=""> 
                    <div class="product container">
                    <h2 id="carriere_id" class="text-white text-left display-4">Carrière</h2>
                    </div>
            </div>
        </div>  -->
    
        
        <div class="container pt-3">
            <div id="carriere_els">
                <div class="row">
                    <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="text-center">
                            <h1 class="text-uppercase pb-4 pt-2" style="color: brown; font-weight: 700; text-align: center">Employeur de choix</h1>
                        </div>
                        <div id="div_carriere_desc_text" class="text-left">
                            <p id="carriere_desc_text" class="text-capitalize" >
                                Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
                                "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        
            
        <div class="row">
            <section id="fil-cables_offred" style="margin-top: 0px">
        
                <div class="text-center">
          
                  <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-cables" role="tabpanel" aria-labelledby="pills-cables-tab">
                      <div class="row d-flex align-items-center text-center justify-content-center sub_product px-5">
          
                      <div class="col-lg-3 col-md-5 col-sm-12 m-5 p-4">
                      <div class="portfolio-item">
                          
                          <img src="<?php echo e(asset('public/images/offredemploi/Offre demploi.png')); ?>" alt="">
                          <div class="portfolio-overlay3">
                          <div class="button_savoir_plus">
                              <a type="button" class="savoir_plus" href="<?php echo e(route('candidaturespontane')); ?>" data-show="cable_garde_fibre_optiques" style="text-transform: uppercase; font-size: 10px; font-weight: 800">voir nos offres</a>
                          </div>
                          </div>
                          
                          
                          <div class="portfolio-overlay2" style="">
                          <ul id="nav">
                          <li>
                          <a  href="javascript:void(0)" class="btn-prod-menu2"  data-show="cable_garde_fibre_optiques" style="text-transform: capitalize">rejoignez-nous</a>
                              <ul class="menu_items" style="width:100%" id="cable_garde_fibre_optiques">
                              <div>
                              
          
                              </div>
          
                              </ul>
                          </li>
                          </ul></div>
          
                      </div>
                      </div>
          
                      <div class="col-lg-3 col-md-5 col-sm-12 p-4">
                      <div class="portfolio-item">
                          
                          <img src="<?php echo e(asset('public/images/offredemploi/Condidature spontanee.png')); ?>" alt="">
                          <div class="portfolio-overlay3">
                          <div class="button_savoir_plus">
                              <a type="button" class="savoir_plus" href="<?php echo e(route('candidaturespontane2')); ?>" data-show="cable_photovoltaique" style="text-transform: uppercase; font-size: 7px; font-weight: 800">déposer votre candidature</a>
                          </div>
          
                          </div>
                          
                          
                          <div class="portfolio-overlay2"style="">
                          <ul id="nav">
                          <li>
                          <a  href="javascript:void(0)" class="btn-prod-menu2"  data-show="cable_photovoltaique" style="font-size: 17px;">cadidature spontanée</a>
                              <ul class="menu_items" style="width:100%;" id="cable_photovoltaique">  
                              <div>
                              
                              </div>
                              </ul>
                          </li>
                          </ul>
                      </div>
          
                      </div>
                      </div>
          
                  </div>
                  </div>
                  <div class="tab-pane fade" id="pills-accessoires" role="tabpanel" aria-labelledby="pills-accessoires-tab">
                      <div class="row d-flex align-items-center text-center justify-content-center sub_product px-5">
                      <div class="col-lg-3 col-md-5 col-sm-12 p-4">
                          <div class="portfolio-item">
                          
                          <img src="<?php echo e(asset('public/images/accessoires_cable.jpg')); ?>" alt="">
                          <div class="portfolio-overlay3">
                              <div class="button_savoir_plus">
                              <a type="button" class="savoir_plus" href="#nav" data-show="cable_photovoltaique">En savoir plus</a>
                              </div>
          
                          </div>
                          
                          
                          <div class="portfolio-overlay2"style="">
                              <ul id="nav">
                              <li>
                              <a href="javascript:void(0)"  class="btn-prod-menu2">Accessoires de câbles</a>
                              <ul class="menu_items" style="width:100%">  
                                  <div>
                                  
                                  </div>
          
                              </ul>
                              </li>
                          </ul></div>
          
                          </div>
                      </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="pills-transformateurs" role="tabpanel" aria-labelledby="pills-transformateurs-tab">
                      <div class="row d-flex align-items-center text-center justify-content-center sub_product px-5">
                      <div class="col-lg-3 col-md-5 col-sm-12 p-4">
                          <div class="portfolio-item">
                          
                          <img src="<?php echo e(asset('public/images/transformateur_secs.jpg')); ?>" alt="">
                          <div class="portfolio-overlay3">
                              <div class="button_savoir_plus">
                              <a type="button" class="savoir_plus" href="#nav" data-show="transformateurs_secs">En savoir plus</a>
                              </div>
          
                          </div>
                          
                          
                          <div class="portfolio-overlay2"style="">
                              <ul id="nav">
                              <li>
                              <a href="javascript:void(0)" data-show="transformateurs_secs" class="btn-prod-menu2">Transformateurs Secs</a>
                              <ul class="menu_items" style="width:100%" id="transformateurs_secs">  
                              <div>
                                  <li><a href="prod_transformateur.html">Transformateurs Secs</a></li>
                              </div>
          
                              </ul>
                              </li>
                          </ul></div>
          
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-5 col-sm-12 p-4">
                          <div class="portfolio-item">
                          
                          <img src="<?php echo e(asset('public/images/transformateur_spec.jpg')); ?>" alt="">
                          <div class="portfolio-overlay3">
                              <div class="button_savoir_plus">
                              <a type="button" class="savoir_plus" href="#nav" data-show="cable_photovoltaique">En savoir plus</a>
                              </div>
          
                          </div>
                          
                          
                          <div class="portfolio-overlay2"style="">
                              <ul id="nav">
                              <li>
                              <a href="javascript:void(0)"  class="btn-prod-menu2">Transformateurs spécifiques</a>
                              <ul class="menu_items" style="width:100%">  
                                  <div>
                                  
                                  </div>
          
                              </ul>
                              </li>
                          </ul></div>
          
                          </div>
                      </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="pills-transmission" role="tabpanel" aria-labelledby="pills-transmission-tab">
                      <div class="row d-flex align-items-center text-center justify-content-center sub_product px-5">
                      <div class="col-lg-3 col-md-5 col-sm-12 p-4">
                          <div class="portfolio-item">
                          
                          <img src="<?php echo e(asset('public/images/transmission_distribution.jpg')); ?>" alt="">
                          <div class="portfolio-overlay3">
                              <div class="button_savoir_plus">
                              <a type="button" class="savoir_plus" href="#nav" data-show="cable_photovoltaique">En savoir plus</a>
                              </div>
          
                          </div>
                          
                          
                          <div class="portfolio-overlay2"style="">
                              <ul id="nav">
                              <li>
                              <a href="javascript:void(0)"  class="btn-prod-menu2">Transmission & distribution</a>
                              <ul class="menu_items" style="width:100%">  
                                  <div>
                                  
                                  </div>
          
                              </ul>
                              </li>
                          </ul></div>
          
                          </div>
                      </div>
                      </div>
                  </div>
                  </div>      
                      
                </div>
              </section>
        </div>
    </div>
      



  <!--bottom-navbar's section-->
  <!--<nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="bottom-link px-3" href="#apropos">À Propos de nous</a>
          </li>
          <li class="nav-item">
            <a class="bottom-link px-3" href="#">Lignes directives</a>
          </li>
          <li class="nav-item">
            <a class="bottom-link px-3" href="#">Durabilité</a>
          </li>
          <li class="nav-item">
            <a class="bottom-link px-3" href="#">Présence globale</a>
          </li>
        </ul>
        <form class="p-2">
          <div class="row form-inscription">Inscrivez-vous à notre newsletter et restez à jour !
          </div>
          <div class="row align-items-center">
            <input type="email" class="navbar-mail col-4 form-control px-3" placeholder="Adresse-email" id="exampleInputEmail1" aria-describedby="emailHelp">
            <button type="submit" class="col-2 btn btn-subm px-3" style="margin-right: 100px;">S'inscrire</button>
          </div>
        </form>
        
      </div>
    </div>
  </nav>-->

 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
      $(document).ready(function (){
   /* $('#nav > li').each(function(){
        var t = null;
        var li = $(this);
        li.hover(function(){
            t = setTimeout(function(){
                li.find("ul").slideDown(300);
                t = null;
            }, 100);
        }, function(){
            if (t){
                clearTimeout(t);
                t = null;
            }
            else
                li.find("ul").slideUp(200);
        });
    });*/
    $(".savoir_plus,.btn-prod-menu2").click(function(){

      let targeted=$(this).data('show');
      if($(`#${targeted}`).is(":hidden")){
        $(`#${targeted}`).slideDown(300);
      }
      else $(`#${targeted}`).slideUp(300);
      
    })
});
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\elseweydy-amine\resources\views/offredemploi.blade.php ENDPATH**/ ?>