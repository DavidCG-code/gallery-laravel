<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dynamic Gallery Laravel</title>
  <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
</head>
<body>
  <?php echo $__env->make('templates.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main class="container">
      <?php echo $__env->yieldContent('content'); ?>
    </main>
    
  <?php echo $__env->make('templates.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH /home/david/dynamic-gallery/resources/views/templates/app.blade.php ENDPATH**/ ?>