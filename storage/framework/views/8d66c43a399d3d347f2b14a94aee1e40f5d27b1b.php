<nav class="fixed-menu">
  <ul class="menu">
    <li class="menu__icons">
      <a href="<?php echo e(route('home')); ?>">
        <img src="<?php echo e(asset('./images/home.svg')); ?>" alt="Home - Inicio">
      </a>
    </li>
    <span>|</span>

    <li class="menu__icons">
      <a href="">
        <img src="<?php echo e(asset('./images/search.svg')); ?>" alt="Search - Buscar">
      </a>
    </li>
    <span>|</span>

    <li class="menu__icons">
      <a href="<?php echo e(Auth::user() ? route('upImage') : route('login')); ?>">
        <img src="<?php echo e(asset('./images/plus.svg')); ?>" alt="Add - Añadir">
      </a>
    </li>
    <span>|</span>

    <li class="menu__icons">
      <a href="<?php echo e(Auth::user() ? route('profile') : route('login')); ?>">
        <?php if(Auth::user()): ?>
          <span><?php echo e(Auth::user()->name); ?></span>
        <?php else: ?>
          <a href="<?php echo e(route('login')); ?>"><img src="<?php echo e(asset('./images/user.svg')); ?>" alt="Add - Añadir"></a>
        <?php endif; ?>
        
      </a>
    </li>
  </ul>
</nav>

<?php /**PATH /home/david/Escritorio/gallery-laravel/resources/views/templates/partials/menu.blade.php ENDPATH**/ ?>