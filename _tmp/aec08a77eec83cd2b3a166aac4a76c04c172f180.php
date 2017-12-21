<nav>
    <div class="container">
        <div class="nav-container nav-spacer">
            <a href="/">
                <div id="logo">
                   <?php echo $__env->make('_partials/logosvg', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                   <div class="hide-mobile">Code to go</div>
               </div>
           </a>
           <div id="menu">
            <?php echo $__env->make('_partials.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
</div>
</nav>
