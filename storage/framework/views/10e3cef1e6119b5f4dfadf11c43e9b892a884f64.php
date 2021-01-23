<?php $__env->startSection('content'); ?>

<div>
  <button id="test">Options</button>

  <div id="testing" class="box none">
    <ul>          
      <li>
        <button><a href="<?php echo e(route('edit', Auth::user()->id)); ?>">Editar perfil</a></button>
      </li>
      <li >
        <form action="<?php echo e(route('logout')); ?>" method="POST">
          <?php echo e(csrf_field()); ?>

          
          <button class="bg-danger">Cerrar Sesión</button>
        </form>
      </li>
    </ul>
  </div>

</div>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/david/Escritorio/gallery-laravel/resources/views/profile.blade.php ENDPATH**/ ?>