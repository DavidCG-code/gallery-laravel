<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('templates.partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container__grid">
        <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <article>
                <a class="pepe" href="<?php echo e(route('pepe', $item->id)); ?>">
                    <figure>
                        <img src="<?php echo e(asset('/storage/images/'.$item->image)); ?>" width="300"   height="auto" alt="images-Stock">
                    </figure>
                </a>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/david/Escritorio/gallery-laravel/resources/views/home.blade.php ENDPATH**/ ?>