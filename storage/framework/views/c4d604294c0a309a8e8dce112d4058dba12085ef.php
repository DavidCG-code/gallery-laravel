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

    <form action="<?php echo e(route('edit',Auth::user()->id)); ?>" method="POST"  enctype="multipart/form-data" class="forms">
      <?php echo e(csrf_field()); ?>

      <?php echo $__env->yieldContent('form-content'); ?>
    </form>


<script src=<?php echo e(mix('js/app.js')); ?>></script>
</body>
</html><?php /**PATH /home/david/Escritorio/gallery-laravel/resources/views/templates/forms/form.blade.php ENDPATH**/ ?>