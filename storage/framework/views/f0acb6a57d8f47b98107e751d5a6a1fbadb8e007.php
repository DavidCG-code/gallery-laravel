<?php $__env->startSection('content'); ?>

<div class="form-title">
  <h1>Gallery Laravel</h1>
</div>

<div class="profile-avatar">
  <?php if(Auth::user()->avatar === null): ?>
    <div class="menu__icons__avatar">
      <p><?php echo e(\substr(Auth::user()->name, 0,1)); ?></p>
    </div>
  <?php else: ?>
    <figure class="menu__icons__avatar">
      <img src="<?php echo e(asset('./storage/images/'. Auth::user()->avatar)); ?>" alt="Avatar Image">
    </figure>
  <?php endif; ?>
</div>

<div class="container-forms">
  <form action="<?php echo e(route('edit',Auth::user()->id)); ?>" method="POST"  enctype="multipart/form-data" class="forms">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="forms__box">
      <label for="name">Username:</label>
      <input type="text" name="name" value="<?php echo e(Auth::user()->name); ?>">
    </div>
    <div class="forms__box">
      <label for="avatar">Avatar:</label>
      <input type="file" name="avatar">
    </div>
    <div class="forms__box">
        <label for="password">Password:</label>
        <input type="password" name="password" value="">
    </div>
    <div class="forms__box">
      <label for="email">Email:</label>
      <input type="email" name="email" value="<?php echo e(Auth::user()->email); ?>">
    </div>
    <div class="forms__btn">
      <input type="submit" class="button button--update" name="update" value="Editar">
    </div>
  </form>
</div>



   
<?php $__env->stopSection(); ?>


<?php echo $__env->make('templates.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/david/Escritorio/gallery-laravel/resources/views/edit.blade.php ENDPATH**/ ?>