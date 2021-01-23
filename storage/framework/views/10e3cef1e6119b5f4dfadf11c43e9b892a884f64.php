<?php $__env->startSection('content'); ?>

<div class="profile">
  <div id="test" class="profile__options">
    <img src="<?php echo e(asset('./images/options.svg')); ?>" alt="">
  </div>

  <div id="testing" class="">
   
    <ul class="profile__list">  
  
      <li class=" profile__list__items profile__list__items--color">
        <a href="<?php echo e(route('edit', Auth::user()->id)); ?>">Editar perfil</a>
      </li>
      <li class=" profile__list__items profile__list__items--danger">
        <a href="<?php echo e(route('logout')); ?>" >Cerrar</a>
      </li>
    </ul>
  </div>

</div>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/david/Escritorio/gallery-laravel/resources/views/profile.blade.php ENDPATH**/ ?>