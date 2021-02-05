<?php $__env->startSection('content'); ?>
   <img src="<?php echo e(asset('./storage/images/'. $image->image)); ?>" alt="">

   <p><?php echo e($image->title); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/david/Escritorio/gallery-laravel/resources/views/test.blade.php ENDPATH**/ ?>