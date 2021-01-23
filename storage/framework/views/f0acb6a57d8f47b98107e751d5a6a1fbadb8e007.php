<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('edit',Auth::user()->id)); ?>" method="POST"  enctype="multipart/form-data" class="forms">
  <?php echo e(csrf_field()); ?>

  <?php echo method_field('PUT'); ?>

    <input type="text" name="name" value="<?php echo e(Auth::user()->name); ?>">
    <input type="text" name="email" value="<?php echo e(Auth::user()->email); ?>">


    <input type="submit" name="update" value="Editar">
</form>

   
<?php $__env->stopSection(); ?>


<?php echo $__env->make('templates.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/david/Escritorio/gallery-laravel/resources/views/edit.blade.php ENDPATH**/ ?>