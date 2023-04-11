
<!--APropos's section-->
<?php $__env->startSection('title','Contact'); ?>
<?php $__env->startSection('content'); ?>
<style>
    @import  url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap");
    
    #contact_form{
        background-color: #dadada;
        font-weight: 400;
        font-size: 17px;    
        font-family: "Source Sans Pro";
        text-align: left;
        padding-left: 9%;
        padding-right: 2%;
    }

    #overfly_div{
        background-color: transparent;
    }
    .contact-form{
        width: 100%;
        background-color: transparent;
        margin-bottom: 5%;
        /*transform: scale(1.5); */
    }

    @media  only screen and (max-width: 760px){
            #contact_form{
                font-weight: 400;
                font-size: 17px;
                font-family: "Source Sans Pro";
                text-align: left;
                width: 100%;
                background-color: #dadada;
                padding-right: 3%;
                padding-left: 3%;
            }
            #overfly_div{
                background-color: transparent;
            }
            .contact-form{
                width: 100%;
                background-color: transparent;
                margin-bottom: 5%;
                padding-left: -5%;
                /*transform: scale(1.5); */
            }
        }
      
        @media  only screen and (max-width: 280px){
           
        }
</style>


    <div class="card text-white">
        <img class="card-img" src="<?php echo e(asset('public/images/WL_ELSEWEDY_Page_Contact_Elements/Artboard_93.png')); ?>" alt="Card image">
        <div class="card-img-overlay h-100 d-flex flex-column justify-content-center">
          <h1 id="contact_h1_title" class="card-title text-white display-1">Contact</h1>
        </div>
    </div>


    <!-- Contact Start -->
    <div class="container py-5">
        <div class="container">
            <div class="row">
                <div class="text-left wow fadeInUp" data-wow-delay="0.1s">
                    <p class="text-justify text-uppercase" style="text-align: justify;"> N'hésitez pas à prendre contact avec nous, ElSewedy Electric Algérie sera très honorées de répondre à vos besoins. </p>
                </div>
            </div>
           
            <div id="overfly_div" class="row p-5">
                <!-- Siege Social -->
                <div id="overlapping_page" class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xm-12">
                   
                    <div class="overlapping-element">
                        <!-- Siege Social -->
                        <h5 style="color: white; padding-left: 5%; padding-bottom: 4%">Siège Social</h5>
                        <div id="text-padding">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0">
                                    <img src="<?php echo e(asset('public/images/WL_ELSEWEDY_Page_Contact_Elements/Map.png')); ?>" style="height: 48px; width: 48px;" alt="">
                                </div>
                                <div class="ms-3">
                                    <h6 class="text-right" style="color: #dadada" >Zone Industrielle AIN DEFLA, Algérie</h6>
                                </div>
                            </div>
    
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0">
                                    <img src="<?php echo e(asset('public/images/WL_ELSEWEDY_Page_Contact_Elements/Tel.png')); ?>" style="height: 48px; width: 48px;" alt="">
                                </div>
                                <div class="ms-3">
                                    <h6 class="text-right" style="color: #dadada" >Tél: (+213) 027 5120 63</h6>
                                    <h6 class="text-right" style="color: #dadada" >Fax: (+213) 027 5120 61</h6>
                                </div>
                            </div>
                        </div>
                        
        

                        <!-- Annexe Commercial -->
                        <h5 style="color: white; padding: 4% 0 4% 5%; ">Annexe Commercial</h5>
                        <div id="text-padding">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0">
                                    <img src="<?php echo e(asset('public/images/WL_ELSEWEDY_Page_Contact_Elements/Map.png')); ?>" style="height: 48px; width: 48px;" alt="">
                                </div>
                                <div class="ms-3">
                                    <h6 class="text-right" style="color: #dadada" >153 rue Ali Khoudja El biar,<br> Alger, Alérie</h6>
                                </div>
                            </div>
    
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0">
                                    <img src="<?php echo e(asset('public/images/WL_ELSEWEDY_Page_Contact_Elements/Tel.png')); ?>" style="height: 48px; width: 48px;" alt="">
                                </div>
                                <div class="ms-3">
                                    <h6 class="text-right" style="color: #dadada" >Tél: (+213) 21 92 40 05/ 07</h6>
                                    <h6 class="text-right" style="color: #dadada" >Mobile: (+213) 770 98 38 54</h6>
                                    <h6 class="text-right" style="color: #dadada" >Fax: (+213) 21 92 39 97</h6>
                                </div>
                            </div>
    
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0">
                                    <img src="<?php echo e(asset('public/images/WL_ELSEWEDY_Page_Contact_Elements/Tel.png')); ?>" style="height: 48px; width: 48px;" alt="">
                                </div>
                                <div class="ms-3">
                                    <h6 class="text-right" style="color: #dadada" >Email: algeria@elsewedy.com</h6>
                                </div>
                            </div>
                        </div>

                       
                    </div>
                     <!-- map -->
                     <div id="getMap">
                        <iframe  class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4519.8932363039885!2d3.015333210845754!3d36.76943614783756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fb221692fff99%3A0xf8be619b3f9f15a3!2sEl%20Sewedy%20cables%20Algeria!5e0!3m2!1sen!2sdz!4v1678027779843!5m2!1sen!2sdz" width="100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
                <!---------------------->

                <!-- Contact form -->
                <div id="contact_form" class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xm-12 pb-5">
                   <!-- <div class="contact-form p-5"> -->
                        <form id="contact_form1" class="contact-form pt-5">
                            <div class="row g-4">
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xm-12">
                                    <div class="form-floating required">
                                        <input id="contact_name" type="text" class="form-control" placeholder="Nom">
                                        <label for="name">Nom</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input id="contact_prenom" type="text" class="form-control" placeholder="Prénom">
                                        <label for="name">Prénom</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input id="contact_email" type="email" class="form-control" id="email" placeholder="Email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input id="contact_subject" type="text" class="form-control" id="subject" placeholder="Sujet">
                                        <label for="subject">Sujet</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea id="contact_message" class="form-control" placeholder="Leave a message here" id="message" style="width: 100; height: 300px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>

                                <div  class="button_savoir_plus justify-content-end">
                                    <a id="contact_form_btn" type="submit" class="savoir_plus" >Envoyer le Message</a>
                                </div>
                            </div>
                         </form>
                <!--  </div> -->
                </div>
                <!--------- Finishe contact form ------------->

            </div>
        </div>
    </div>
    <!-- Contact End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\amine\resources\views/contact.blade.php ENDPATH**/ ?>