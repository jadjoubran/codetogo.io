<?php $__env->startSection('body'); ?>
<div class="container">
    <div class="banner">
        <h1>Find up to date snippets for common JavaScript use cases</h1>
        <h4 class="subscribe-cta">Click here to get weekly updates in your inbox</h4>
        <input type="text" id="autocomplete" placeholder="How to loop through array in JavaScript">
    </div>
    <h4>Popular use cases</h4>

    <div class="card">
        <a href="/how-to-interpolate-in-javascript/">
            <h3>How to interpolate in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        <?php echo $__env->make('_usecases.interpolate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="card">
        <a href="/how-to-add-class-to-element-in-javascript/">
            <h3>How to add class to element in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        <?php echo $__env->make('_usecases.add-class-to-element', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="card">
        <a href="/how-to-replace-spaces-with-dashes-in-javascript/">
            <h3>How to replace spaces with dashes in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        <?php echo $__env->make('_usecases.replace-spaces-with-dashes', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="card">
        <a href="/how-to-reload-page-in-javascript/">
            <h3>How to reload page in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        <?php echo $__env->make('_usecases.reload-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="card">
        <a href="/how-to-find-element-by-id-in-javascript/">
            <h3>How to find element by id in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        <?php echo $__env->make('_usecases.find-element-by-id', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="card">
        <a href="/how-to-loop-through-array-in-javascript/">
            <h3>How to loop through array in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        <?php echo $__env->make('_usecases.loop-through-array', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="card">
        <a href="/how-to-listen-to-click-event-in-javascript/">
            <h3>How to listen to click event in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        <?php echo $__env->make('_usecases.listen-to-click-event', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="card">
        <a href="/how-to-get-keys-of-object-in-javascript/">
            <h3>How to get keys of object in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        <?php echo $__env->make('_usecases.get-keys-of-object', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="card">
        <a href="/how-to-increment-a-variable-in-javascript/">
            <h3>How to increment a variable in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        <?php echo $__env->make('_usecases.increment-a-variable', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="card">
        <a href="/how-to-uppercase-a-string-in-javascript/">
            <h3>How to uppercase a string in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        <?php echo $__env->make('_usecases.uppercase-a-string', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

</div>

<div id="subscribe">
  <div id="subscribe-close">
    <svg fill="#a4b1c1" width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
      <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>
</div>
<iframe id="subscribe-popup" frameborder="0" src="https://upscri.be/22bdcc/?as_embed"></iframe>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.master', ['is_landing' => true], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>