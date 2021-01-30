<?php $__env->startSection('content'); ?>
<?php echo $__env->make('templates.partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  
  <div class="profile">
    <div>
      <h2><?php echo e(Auth::user()->name); ?></h2>
    </div>

    <div id="test" class="profile__options">
      <img src="<?php echo e(asset('./images/options.svg')); ?>" alt="">


      <div id="testing" class="none">
      
        <ul class="profile__list radius-lf-t radius-lf-b">  
          <li class=" profile__list__items profile__list__items--color">
            <a href="<?php echo e(route('logout')); ?>" class="profile__list__items--txt-danger" >Logout</a>
          </li>
          <li class=" profile__list__items profile__list__items--danger radius-lf-b">
            <p>Delete Account</p>
          </li>
        </ul>
      </div>
      
    </div>

  </div>

  
  <div class="container-forms">
    <form action="<?php echo e(route('update',Auth::user()->id)); ?>" method="POST"  enctype="multipart/form-data" class="forms">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>

      <div class="forms__box">
        <?php if(Auth::user()->avatar === null): ?>
          <figure class="profile__avatar">
            <p><?php echo e(\substr(Auth::user()->name, 0,1)); ?></p>
          </figure>
        <?php else: ?>
          <figure class="profile__avatar">
            <img src="<?php echo e(asset('./storage/images/'. Auth::user()->avatar)); ?>" alt="Avatar Image">
          </figure>
        <?php endif; ?>
        <label for="avatar" class="button__avatar">Editar</label>
        <input type="file" id="avatar" name="avatar" class="none">
      </div>

      <div class="forms__box">
        <label for="name">Username:</label>
        <input type="text" name="name" value="<?php echo e(Auth::user()->name); ?>">
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
        <input type="submit" class="button button--update" name="update" value="Guardar">
      </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/david/Escritorio/gallery-laravel/resources/views/profile.blade.php ENDPATH**/ ?>