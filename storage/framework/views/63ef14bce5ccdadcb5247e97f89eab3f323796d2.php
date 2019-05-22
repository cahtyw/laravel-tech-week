<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h1>desafio curar o cancer com queijo</h1>

        <?php $__currentLoopData = $payload; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($element->name); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </body>
</html><?php /**PATH C:\Projetos\LaravelAPI\resources\views/champolas.blade.php ENDPATH**/ ?>