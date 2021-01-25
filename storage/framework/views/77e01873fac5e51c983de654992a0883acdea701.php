<?php $__env->startSection('content'); ?>

  <div class="form-title">
    <h1>Gallery Laravel</h1>
  </div>

  <div class="container-forms">
    <form action="/register" method="POST"  enctype="multipart/form-data" class="forms">
    <?php echo csrf_field(); ?>
      <div class="forms__box">
        <label for="email">Email:</label>
        <input type="email" name="email" required placeholder="email@email.com">
      </div>
      <div class="forms__box">
          <label for="password">Password:</label>
          <input type="password" name="password" required placeholder="Password">
      </div>
    
      <div class="forms__btn">
        <input type="submit" class="button button--register" name="register" value="Register">
      </div>
    </form>
  </div>
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/david/Escritorio/gallery-laravel/resources/views/register.blade.php ENDPATH**/ ?>