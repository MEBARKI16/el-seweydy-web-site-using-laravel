
 <!--APropos's section-->
 <?php $__env->startSection('content'); ?>
    <div>
      <!--style="height:550px; position: relative; top: -100px;"-->
      <img src="<?php echo e(asset('public/images/certifications_et_agrements_banner.webp')); ?>" alt="certifications_et_agrements_banner">
        <div>
          <h1 class="page-title-certif">Certifications et agréments</h1>
        </div>
        </div> 
 

    <!--Two blocs section-->
    <div class="parallel-boxs">
        <div class="descreptive-box">
            <div class="box-header">
                <div class="box-title">Qualification et agréments</div>
                <div class="box-icon">
                  <img src="<?php echo e(asset('public/images/quality.png')); ?>" alt="">
                </div>
            </div>
            <div class="box-separator"></div>
            <div class="box-text">
              <p>Pour aller plus loin que la simple gestion d’actions d’amélioration et s’assurer de progresser dans la durée, rien de tel que de s’appuyer sur les meilleures pratiques professionnelles inscrites dans la norme leader dans le monde l’ISO 9001. EElsewedy Electric Algérie adopte la gestion qualité. Ainsi, pour le bien de ses clients et collaborateurs, Elsewedy
               Electric Algérie s’engage à :</p>
               <ul>
                <li>Assurer l’implantation, maintenance et accomplissement exigés, législation et règlements qui lui sont applicables, garantir le maintien d'un niveau d'efficacité de gestion du Système de Qualité.</li>
                <li>Valoriser et inciter la participation de tous les collaborateurs, assurer leur formation continue de façon à améliorer la qualité des produits et services, l’objectif étant la Satisfaction des Clients et Collaborateurs.</li>
                <li>Offrir des services intègres orientés client.</li>
               </ul>
            </div>
            <div class="download-button-box">
            <a href="<?php echo e(asset('public/images/certifications_elsewedy.pdf')); ?>" target="_blank"><img src="<?php echo e(asset('public/images/download.png')); ?>" alt="" href></a>
            </div>
        </div>
        <div class="boxs-separator"></div>
        <div class="descreptive-box">
            <div class="box-header">
                <div class="box-title">Qualité</div>
                <div class="box-icon">
                  <img src="<?php echo e(asset('public/images/star.png')); ?>" alt="">
                </div>
            </div>
            <div class="box-separator"></div>
            <div class="box-text">
              <p>Avec le challenge de conquérir de nouvelles parts de marché en Algérie et dans 
                le monde, Elsewedy Electric Algérie veille à fournir des produits répondants
                 aux spécifications techniques clients, exigences réglementaires et normes 
                 internationales en vigueur.
                 <br>
                  Nos produits sont qualifiés par des laboratoires
                  de renommée internationale tels que KEMA (Hollande) et KINECTRICS (Canada)
                   ainsi que par CREDEG (Filiale du Groupe SONELGAZ).
                  </p>
            </div>
            <div style="height: 220px;"></div>
            <div class="download-button-box">
            <a href="<?php echo e(asset('public/images/Elsewedy Cables Algeria SPA - COFRAC ISO 9001 .pdf')); ?>" target="_blank"><img src="<?php echo e(asset('public/images/download.png')); ?>" alt="" ></a>
            </div>
        </div>
    </div>
    <div class="text-icon-fil1" style="background-color: transparent; height: 25px;width: 100%;"></div>

  <!--bottom-navbar's section-->

  <nav class="navbar navbar-expand-lg bg-white">
    <div class="container-footer">

        <form class="p-2">
          <div class="row form-inscription">Inscrivez-vous à notre newsletter et restez à jour !
          </div>
          <div class="row align-items-center">
            <input type="email" class="navbar-mail col-4 form-control px-3" placeholder="Adresse-email" id="exampleInputEmail1" aria-describedby="emailHelp">
            <button type="submit" class="col-2 btn btn-subm px-3" style="margin-right: 100px;">S'inscrire</button>
          </div>
        </form>
        
    
    </div>
  </nav>


  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/whitelineservices.dz/elsewedysite.whitelineservices.dz/elsewedyWebsite/elsewedyWebsite/resources/views/certificationsetagrements.blade.php ENDPATH**/ ?>