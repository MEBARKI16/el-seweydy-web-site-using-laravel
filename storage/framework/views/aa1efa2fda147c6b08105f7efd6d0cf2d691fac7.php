
 <!--APropos's section-->
 <?php $__env->startSection('title','Produit - Elsewedy Electric Algérie'); ?>
 <?php $__env->startSection('content'); ?>
  <!--APropos's section-->
  <section id="product">
      <!--style="height:550px; position: relative; top: -100px;"-->
      <img
        src="<?php echo e(asset('public/images/transformateurs_banner.jpg')); ?>"
        alt=""
        style="max-height: 1165px"
      />
      <div class="product container">
        <h2 class="text-white display-6">
          Avec un leader comme<br />partenaires,<br />vous n'aurez pas<br />à
          croiser les doigts !
        </h2>
      </div>
    </section>

    <section id="fil-cables" style="padding-top:0px;padding-bottom: 0px">
      <div
        class="row d-flex align-items-center text-center"
        style="margin-right: 0px !important;margin-top:50px"
      >
        <div class="col-lg-8 col-md-12 col-sm-12">
          <h1 class="display-4">FIL ET CÂBLES</h1>
          <img class="points center" src="<?php echo e(asset('public/images/points.png')); ?>" alt="" />
          <h6 class="texttt">
            Elsewedy Electric est active dans quatre secteurs principaux
          </h6>
        </div>
        <div class="prod_titre col">
          <h3 class="prod_titre_text">Conducteurs<br />aeriens</h3>
        </div>
      </div>
      <?php
      // dd($product->image_path)
      ?>
      
      <div class="row d-flex align-items-center text-center">
        <div class="col-lg-8 col-md-12 col-sm-12 product_description_img">
          <div class="prod_titre_img" style="margin-left: 0px !important;">
            <img
              src="<?php echo e(asset('public/images/cable_basse_tension_complet.jpg')); ?>"
             
            />
          </div>
          <!-- <div class="button_retour">
            <a type="button" class="retour" href="produits.html">Retour</a>
          </div> -->
        </div>
        <div class="col product_description px-5">
          <h5 class="prod_sous_titre">
            <?php echo nl2br($product->nomProd); ?>

          </h5>
          <p class="prod_sous_titre_text">
            <?php echo nl2br($product->description); ?>

          </p>
        </div>
        <div class="button_retour_mobile">
          <a type="button" class="retour" href="<?php echo e(route('produits')); ?>">Retour</a>
        </div>
      </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
 $(document).ready(function(){
  $( window ).resize(function() {
  console.log( $( window ).width() )
});
 });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/whitelineservices.dz/elsewedysite.whitelineservices.dz/resources/views/detail_produit.blade.php ENDPATH**/ ?>