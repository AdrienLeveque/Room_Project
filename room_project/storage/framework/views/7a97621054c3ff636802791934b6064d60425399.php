<?php $__env->startSection('titre'); ?>
    Les articles
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
    <p>C'est l'article n° <?php echo e($numero); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>