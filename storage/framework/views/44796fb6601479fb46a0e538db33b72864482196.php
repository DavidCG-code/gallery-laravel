<?php $__env->startSection('content'); ?>
   <?php echo $__env->make('templates.partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <div class="v-center">
      <div class="container__show">

         <div class="container__show__card">
            <div>
               <figure class="show__box">
                  <img src="<?php echo e(asset('./storage/images/'. $image->image)); ?>" class="show__box--image" >
               </figure>
            </div>
   
            <div class="container__show__card--text">
               <h1><?php echo e($image->title); ?></h1>
               <p><?php echo e($image->description); ?></p>
            </div>
   
            <div class="container__show__card__author">
               <div>
                  <p>Uploaded by:</p>
               </div>
               <div class="container__show__card__author--avatar">
                  <figure>
                     <img src="<?php echo e(asset('./storage/images/'. $author->avatar)); ?>" alt="Avatar User">
                  </figure>
               </div>
      
               <div class="container__show__author--name">
                  <p><?php echo e($author->name); ?></p>
               </div>
            </div>
         </div>
      </div>
   </div>

   

  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/david/Escritorio/gallery-laravel/resources/views/show.blade.php ENDPATH**/ ?>