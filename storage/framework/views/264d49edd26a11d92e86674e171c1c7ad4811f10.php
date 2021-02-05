<?php $__env->startSection('content'); ?>

<div class="form-title">
  <h1>Gallery Laravel</h1>
</div>

<div class="container-forms">
  <form action="<?php echo e(route('logIn')); ?>" method="POST"  enctype="multipart/form-data" class="forms">
    <?php echo csrf_field(); ?>

    <div class="forms__box">
      <label for="email" class="forms__box--label">Email:</label>
      <input type="email" class="forms__box--input" name="email" required placeholder="email@email.com">
    </div>
    <div class="forms__box">
        <label for="password" class="forms__box--label">Password:</label>
        <input type="password" class="forms__box--input" name="password" required placeholder="Password">
    </div>
  
    <div class="forms__btn">
      <input type="submit" class="button button--login" name="login" value="Login">

      <a href="<?php echo e(route('registerView')); ?>">Not Register? Do it</a>
    </div>
  </form>

  <?php $__errorArgs = ['errors'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <div class="error">
        <p><?php echo e($message); ?></p>
      </div>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/david/Escritorio/gallery-laravel/resources/views/login.blade.php ENDPATH**/ ?>