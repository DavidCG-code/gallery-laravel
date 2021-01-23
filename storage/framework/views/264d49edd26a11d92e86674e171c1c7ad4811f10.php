<?php $__env->startSection('content'); ?>
<form action="/login" method="POST"  enctype="multipart/form-data" class="forms">
  <?php echo e(csrf_field()); ?>

  <div class="forms__box">
    <label for="">Email:</label>
    <input type="email" name="email" required>
  </div>
  <div class="forms__box">
      <label for="">Password:</label>
      <input type="password" name="password" required>
  </div>

  <div class="forms__btn">
    <input type="submit" class="button" name="add" value="login">
  </div>
</form>

<span>NO estas registrado? Registrate</span>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/david/Escritorio/gallery-laravel/resources/views/login.blade.php ENDPATH**/ ?>