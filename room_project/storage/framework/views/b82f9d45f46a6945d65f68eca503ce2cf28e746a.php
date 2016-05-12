<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/register/toto')); ?>">
                        <?php echo csrf_field(); ?>


                        <div class="form-group<?php echo e($errors->has('nom') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Nom</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nom" value="<?php echo e(old('nom')); ?>">

                                <?php if($errors->has('nom')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nom')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('prenom') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Prénom</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="prenom" value="<?php echo e(old('prenom')); ?>">

                                <?php if($errors->has('prenom')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('prenom')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('adresse') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Adresse</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="adresse" value="<?php echo e(old('adresse')); ?>">

                                <?php if($errors->has('adresse')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('adresse')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('code_postal') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Code_postal</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="code_postal" value="<?php echo e(old('code_postal')); ?>">

                                <?php if($errors->has('code_postal')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('code_postal')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('ville') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Ville</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ville" value="<?php echo e(old('ville')); ?>">

                                <?php if($errors->has('ville')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('ville')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('telephone') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Telephone</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="telephone" value="<?php echo e(old('telephone')); ?>">

                                <?php if($errors->has('telephone')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('telephone')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('date_naissance') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Date de naissance</label>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="date_naissance" value="<?php echo e(old('date_naissance')); ?>">

                                <?php if($errors->has('date_naissance')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('date_naissance')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>