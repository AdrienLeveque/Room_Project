<?php $__env->startSection('accueil'); ?>  <?php $__env->stopSection(); ?>

<?php $__env->startSection('a_propos'); ?>  <?php $__env->stopSection(); ?>  

<?php $__env->startSection('client_consulter_salles'); ?> class="active" <?php $__env->stopSection(); ?>

<?php $__env->startSection('contact'); ?>  <?php $__env->stopSection(); ?>

<?php $__env->startSection('connexion'); ?>  <?php $__env->stopSection(); ?>

<?php $__env->startSection('inscription'); ?>  <?php $__env->stopSection(); ?>

<?php $__env->startSection('deconnection'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Titre -->
		<div class="container">
			<form action="reservation_paiement.php" method="post">
				<div class="col-md-12">
			<br>
			<section class="row">
				<div class="col-md-12">
				<?php $infosSalle = DB::table('salle')->get();
					foreach($infosSalle as $infosSalle){
					$pathSalle=$infosSalle->image;
					$nomSalle=$infosSalle->nom_salle;
					$capaciteSalle=$infosSalle->capacite_salle;
					$cautionSalle=$infosSalle->caution_salle;
					$idSalle=$infosSalle->id;
					?>
					<div class="col-xs-4 col-md-4">
						<div class="col-md-12">
							<div class="col-md-1"></div>
							<div class="col-md-11">
							<a href="client_reservation_salles?id=<?php echo $idSalle; ?>"> <img src="images/<?php echo $pathSalle ?>" class="img-thumbnail img-responsive center-block" alt="Responsive image" style="margin-bottom: 2%;"></a>
							<label>
								Nom: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<?php if(!is_null($nomSalle)) echo $nomSalle ?>
							</label>
							</br>
							<label>
								Capacite: &nbsp;
								<?php if(!is_null($capaciteSalle))echo $capaciteSalle ?>
							</label>
							</br>
							<label>
								Caution: &nbsp;&nbsp;&nbsp;
									<?php if(!is_null($cautionSalle))echo $cautionSalle ?>
							</label>
						</div>
						</div>
					</div>
				<?php
					}
				?>
				</div>
			</section>
					</br></br>
				</div>
			</form>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>