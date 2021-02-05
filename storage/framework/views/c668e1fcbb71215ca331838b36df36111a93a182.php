<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('templates.partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="form-title">
      <h1>Gallery Laravel</h1>
    </div>

 

    <div class="container-forms">
      <form action="<?php echo e(route('create',Auth::user()->id)); ?>" method="POST"  enctype="multipart/form-data" class="forms">
        <?php echo csrf_field(); ?>
        <div class="forms__box">
          <figure>
            <img  id="newImage" >
          </figure>

          <label for="imageFile" class="forms__box--button__avatar">Add Image</label>
          <input type="file" id="imageFile"  name="image" class="none">
        </div>

        <div class="forms__box">
          <label for="title" class="forms__box--label">Title:</label>
          <input type="text" class="forms__box--input" name="title"/>
        </div>

        <div class="forms__box">
          <label for="description" class="forms__box--label">Description:</label>
          <input type="text" class="forms__box--input" name="description"/>
        </div>

  
        <div class="forms__btn">
          <input type="submit" class="button button--update" name="create" value="Upload">
        </div>
      </form>
    </div>

    <div id="app"></div>
      

<?php $__env->stopSection(); ?>



<?php echo $__env->make('templates.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/david/Escritorio/gallery-laravel/resources/views/create.blade.php ENDPATH**/ ?>