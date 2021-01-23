<header class="head">
  <div class="head__title">
    <a href="<?php echo e(route('home')); ?>" class="title">
      <h1>GL</h1>
    </a>
  </div>
</header>

<?php echo $__env->make('templates.partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/david/Escritorio/gallery-laravel/resources/views/templates/partials/header.blade.php ENDPATH**/ ?>