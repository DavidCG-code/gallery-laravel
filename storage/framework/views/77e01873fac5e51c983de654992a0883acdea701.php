<?php $__env->startSection('content'); ?>

  <div class="form-title">
    <h1>Gallery Laravel</h1>
  </div>

  <div class="container-forms">
    <form action="<?php echo e(route('register')); ?>" method="POST"  enctype="multipart/form-data" class="forms">
      <?php echo csrf_field(); ?>

      <div class="forms__box">

        <label for="avatar" class="button__avatar">Añadir</label>
        <input type="file" id="avatar" name="avatar" class="none">
      </div>

      <div class="forms__box">
        <label for="name">Username:</label>
        <input type="text" name="name" placeholder="Username">
      </div>

      <div class="forms__box">
          <label for="password">Password:</label>
          <input type="password" name="password" placeholder="password">
      </div>
      <div class="forms__box">
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="email@email.com">
      </div>
      <div class="forms__btn">
        <input type="submit" class="button button--update" name="update" value="Guardar">
      </div>
    </form>
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/david/Escritorio/gallery-laravel/resources/views/register.blade.php ENDPATH**/ ?>