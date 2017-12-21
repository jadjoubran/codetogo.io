<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo e(isset($title) ? "$title | Code to go" : "Code to go"); ?></title>

    <?php if(isset($question)): ?>
        <?php echo $__env->make('_partials.head', ['question' => $question], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('_partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
</head>
<body>

    <?php if(isset($is_landing)): ?>
        <?php echo $__env->make('_partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('_partials.header_inner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>

    <?php echo $__env->yieldContent('body'); ?>

    <?php echo $__env->make('_partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('_partials.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
