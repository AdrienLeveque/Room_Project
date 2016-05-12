<?php $__env->startSection('contenu'); ?>
    <?php echo Form::open(['url' => 'users']); ?>

        <?php echo Form::label('nom', 'Entrez votre nom : '); ?>

        <?php echo Form::text('nom'); ?>

        <?php echo Form::submit('Envoyer !'); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>