
<!--APropos's section-->
<?php $__env->startSection('title','CARRIERE'); ?>
<?php $__env->startSection('content'); ?>
<!--APropos's section-->

    
    <div id="offredemploi_img" class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!--style="height:550px; position: relative; top: -100px;"-->
            <img id="background-img" src="<?php echo e(asset('public/images/offredemploi/Banner_Offre emploi.png')); ?>" alt="" style="position: relative;"> 
                <div class="product container">
                <h2 class="text-white text-left display-4" style="font-weight: 700px; font-size: 4rem;">Offre d'emploi</h2>
                </div>
        </div>
    </div>

    <!-- Our Activities -->
    <div class="container">
        <div class="row">
            <div id="employchoix" class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
               <img src="<?php echo e(asset('public/images/4.Transformateurs.png')); ?>" alt="" class="rounded float-left pt-0" >  <!-- style="max-width: 10rem; max-height: 10rem; position: relative" -->
            </div>
            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <div class="text-left">
                    <h1 class="text-uppercase" style="color: rgb(0, 0, 0); font-weight: 700; text-align: left">Employeur de choix</h1>
                </div>
                <div class="text-left">
                    <p class="text-capitalize" style="font-weight: 400; line-height: 1.4">
                          et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Finished our Activities -->
    
    <!-- Job offer table -->

    <div id="offretable" class="content">
    
      <div class="container-fluid">
        
  
        <div class="table-responsive custom-table-responsive">
  
          <table class="table custom-table">
            <thead>
              <tr>  
  
                <th scope="col">
                  
                </th>
                
                <th scope="col">DATE</th>
                <th scope="col">POSTE</th>
                <th scope="col">LIEU</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td> 2022-04-12 <span class="badge badge-secondary">New</span> </td>
                <td>James Yates </td>
                <td> Web Designer Far far away, behind the word mountains  Web Designer Far far away, behind the word mountains Web Designer Far far away, behind the word mountains</td>
                <td> <a class="btn btn-danger btn-rounded" href="<?php echo e(route('detailoffredemploi')); ?>"  style="color: white; text-transform: uppercase;">VOIR L'OFFRE</a> </td> 
              </tr> 
              <tr>
                <td></td>
                <td> 2022-04-12 <span class="badge badge-secondary">New</span> </td>
                <td>James Yates </td>
                <td> Web Designer Far far away, behind the word mountains  Web Designer Far far away, behind the word mountains Web Designer Far far away, behind the word mountains</td>
                <td> <button class="btn btn-danger btn-rounded"  style="color: white; text-transform: uppercase;">VOIR L'OFFRE</button> </td> 
              </tr> 
              <tr>
                <td></td>
                <td> 2022-04-12 <span class="badge badge-secondary">New</span> </td>
                <td>James Yates </td>
                <td> Web Designer Far far away, behind the word mountains  Web Designer Far far away, behind the word mountains Web Designer Far far away, behind the word mountains</td>
                <td> <button class="btn btn-danger btn-rounded"  style="color: white; text-transform: uppercase;">VOIR L'OFFRE</button> </td> 
              </tr> 

              <tr>
                <td></td>
                <td> 2022-04-12 <span class="badge badge-secondary">New</span> </td>
                <td>James Yates </td>
                <td> Web Designer Far far away, behind the word mountains  Web Designer Far far away, behind the word mountains Web Designer Far far away, behind the word mountains</td>
                <td> <button class="btn btn-danger btn-rounded"  style="color: white; text-transform: uppercase;">VOIR L'OFFRE</button> </td> 
              </tr> 
            </tbody>
          </table>
        </div>
  
  
      </div>
  
    </div>
      
    <!-- Finished job offer table -->
    <div class="container">
      <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xm-2"></div>
        <div id="spontaneotheroffre" class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xm-10">
          <div class="container">
            <div class="row">
              <br>
              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xm-2"></div>
              <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xm-10">
                <h1 class="text-uppercase text-justify">VOUS NE TROUVEZ PAS L'OFFRE D'EMPLOI <br> QUI VOUS CORRESPOND ?</h1>
                <br>
                <h3 class="text-capitalize">Envoyer-nous votre <a href="" style="color: brown">candidature spontanée.</a></h3>
              </div>
              <br>
            </div>
          </div>
        </div>
      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xm-2"></div>
      </div>
    </div>

    <script src="<?php echo e(asset('public/js/offredemploijs/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/offredemploijs/poper.min.js')); ?>"></script>
    <script src=" <?php echo e(asset('public/js/offredemploijs/bootsrap.min.js')); ?> "></script>
    <script src="<?php echo e(asset('public/js/offredemploijs/main.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/whitelineservices.dz/elsewedysite.whitelineservices.dz/elsewedyWebsite/elsewedyWebsite/resources/views/candidaturespontane.blade.php ENDPATH**/ ?>