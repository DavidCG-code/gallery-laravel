<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('templates.partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="form-title">
      <h1>Gallery Laravel</h1>
    </div>

    <div id="viewAvatar">

    </div>

    <div class="container-forms">
        <form action="/create" method="POST"  enctype="multipart/form-data" class="forms">
         <?php echo csrf_field(); ?>
          <div class="forms__box">
            <label for="avatar" class="button__avatar">Select Image</label>
            <input type="file" id="avatar" name="avatar" class="none">
          </div>
        
          <div class="forms__btn">
            <input type="submit" class="button button--login" name="add" value="Upload">
          </div>
        </form>
      </div>
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/david/Escritorio/gallery-laravel/resources/views/create.blade.php ENDPATH**/ ?>