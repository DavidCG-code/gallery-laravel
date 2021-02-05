<nav class="fixed-menu">
  <ul class="menu">
    <li class="menu__icons">
      <a href="<?php echo e(route('home')); ?>">
        <img src="<?php echo e(asset('./images/home.svg')); ?>" alt="Home - Inicio">
      </a>
    </li>
    <span>|</span>

    <li  class="menu__icons">
      <a href="#" >
        <img src="<?php echo e(asset('./images/search.svg')); ?>" alt="Search - Buscar">
      </a>
      
    </li> 

    <span>|</span>

    <li class="menu__icons">
      <a href="<?php echo e(Auth::user() ? route('preview', Auth::user()->id) : route('loginView')); ?>">
        <img src="<?php echo e(asset('./images/plus.svg')); ?>" alt="Add - Añadir">
      </a>
    </li>
    <span>|</span>

    <li class="menu__icons">
      <a href="<?php echo e(Auth::user() ? route('profile', Auth::user()->id) : route('loginView')); ?>">
        <?php if( Auth::user() ): ?>

          <?php if(Auth::user()->avatar === null): ?>
            <div class="menu__icons__avatar">
              <p><?php echo e(\substr(Auth::user()->name, 0,1)); ?></p>
            </div>
          <?php else: ?>
            <figure class="menu__icons__avatar">
              <img src="<?php echo e(asset('./storage/images/'. Auth::user()->avatar)); ?>" alt="Avatar Image">
            </figure>
          <?php endif; ?>

        <?php else: ?>
          <a href="<?php echo e(route('loginView')); ?>"><img src="<?php echo e(asset('./images/user.svg')); ?>" alt="Add - Añadir"></a>
        <?php endif; ?>
        
      </a>
    </li>
  </ul>
</nav>

<?php /**PATH /home/david/Escritorio/gallery-laravel/resources/views/templates/partials/menu.blade.php ENDPATH**/ ?>