<?php $__env->startSection('content'); ?>
<?php echo $__env->make('templates.partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  
  <div class="profile">
    <div>
      <h2><?php echo e(Auth::user()->name); ?></h2>
    </div>

    <div id="options" class="profile__options">
      <img src="<?php echo e(asset('./images/options.svg')); ?>" alt="">


      <div id="optionsMenu" class="none">
      
        <ul class="profile__list radius">  
          <li class=" profile__list__items profile__list__items--color ">
            <a href="<?php echo e(route('logout')); ?>" class="profile__list__items--txt-danger" >Logout</a>
          </li>
          <li class=" profile__list__items profile__list__items--danger ">
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
        <?php if(Auth::user()->avatar == null): ?>
          <figure class="forms__box--avatar">
            <img src="<?php echo e(asset('./images/avatar.svg')); ?>" id="preview"  alt="pepe">
          </figure>
        <?php else: ?>
          <figure class="forms__box--avatar">
            <img src="<?php echo e(asset('./storage/images/'. Auth::user()->avatar)); ?>" id="preview"  alt="pepe">
          </figure>
        <?php endif; ?>


        
        <label for="avatar" class="forms__box--button__avatar">New Image</label>
        <input type="file" id="avatar"  name="avatar" class="none">
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
        <input type="submit" class="button button--update" name="update" value="Save">
      </div>
    </form>

  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/david/Escritorio/gallery-laravel/resources/views/profile.blade.php ENDPATH**/ ?>