<?php $__env->startSection('content'); ?>

<h1>Bienvenido a Home</h1>

<?php if(Auth::user()): ?>
  <p><?php echo e(Auth::user()->name); ?></p>
  <form action="<?php echo e(route('logout')); ?>" method="POST">
    <?php echo e(csrf_field()); ?>

    <button>Cerrar Sesión</button>
  </form>
<?php endif; ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/david/Escritorio/gallery-laravel/resources/views/dash.blade.php ENDPATH**/ ?>