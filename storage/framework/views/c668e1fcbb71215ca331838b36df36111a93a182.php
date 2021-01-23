<?php $__env->startSection('content'); ?>

    <form action="/create" method="POST"  enctype="multipart/form-data" class="forms">
        <?php echo csrf_field(); ?>
        <div class="forms__box">
        <label for="">Choice Image:</label>
        <input type="file" name="image">
        </div>
        <div class="forms__btn">
        <input type="submit" class="button" name="add" value="UpLoad">
        </div>

    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/david/Escritorio/gallery-laravel/resources/views/create.blade.php ENDPATH**/ ?>