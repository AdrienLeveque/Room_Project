<?php $__env->startSection('accueil'); ?>  <?php $__env->stopSection(); ?>

<?php $__env->startSection('a_propos'); ?> class="active" <?php $__env->stopSection(); ?>  

<?php $__env->startSection('contact'); ?>  <?php $__env->stopSection(); ?>

<?php $__env->startSection('connexion'); ?>  <?php $__env->stopSection(); ?>

<?php $__env->startSection('inscription'); ?>  <?php $__env->stopSection(); ?>

<?php $__env->startSection('deconnection'); ?>  <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<!-- Titre -->
	 <div class="container">
	</br>
		<div class="container">
			<div class="col-md-6"> 
				<fieldset>
					<legend>Information à propos de la Mairie</legend>
				</fieldset>
				<?php 
						$InfoMairie = DB::table('mairie')->first();
				?>
				<div class="col-md-12">
	 				<label>Adresse :</label>
	 				<address>
						 <?php echo $InfoMairie->adresse ;?> <br>  
						 <?php echo $InfoMairie->code_postal ;?>  <?php echo $InfoMairie->ville ;?>
					</address>
	 			</div>
	 			<div class="col-md-12">
	 				<label>Téléphone:</label>
					 <?php echo $InfoMairie->telephone ;?><br>
	 			</div>
	 			<div class="col-md-12">
	 				<label>Couriel:</label>
	 				 <?php echo $InfoMairie->email ;	?><br>
	 			</div>
			</div>

			<div class="col-md-6"> 
				<fieldset>
					<legend>Horaire d'ouverture</legend>
				</fieldset>

	 			<div class="col-md-12">
					<?php 
						$az = DB::table('horaire')->get();
						foreach($az as $az){
					?><div class="col-md-3">
						<strong> <?php echo $az->jour.": ";?> </strong> <?php
					?></div>
					  <div class="col-md-8">
					<?php 
						if (($az->date_debut_matin)==0||is_null($az->date_debut_matin)) { echo "Ferme \r\n";} else {
							echo $az->date_debut_matin."h - ".$az->date_fin_matin."h"."\r\n";
						}		

						if (($az->date_debut_soir)==0||is_null($az->date_debut_soir)) { 
							if (($az->date_debut_matin)==0||is_null($az->date_debut_matin))
								{echo " ";}
							else  {echo "Ferme";}
						}
						else {
							echo "\r\n"."/"."\r\n".$az->date_debut_soir."h - ".$az->date_fin_soir."h"."\r\n";
						}	

					?></div>
						<br/>
					<?php 	
						}
					?>
	 			</div>		 				 				 				 							
			</div>
		</div>
		<div class="container">
			<header class="page-header">
				<h1>Les types de location proposés sont :</h1>
			</header>
			<h4>1.	Location des locaux de moindre envergure - loués à titre gratuit</h4> 
			<div class="col-md-12 text-justify ">
				<blockquote class="small">	
					<p>En ce qui concerne les locaux de moindre envergure, leur planning est assez rigide dans la mesure où il s’agit essentiellement de permanences ou de locaux occupés en permanence par les associations.
					</p>
					<p>En cas de demande pour ces salles, on consulte leur planning et selon la disponibilité on la loue mais à titre gratuit, les particuliers ne peuvent pas louer cette catégorie de salle, la priorité est donnée aux permanences.
					</p>
				</blockquote>
				<br>
				<h4>2.	Location des salles payantes - avec particularités </h4>
				<blockquote class="small">
					<p>Au sein de la mairie, il y a uniquement quatre salles payantes avec certaines particularités. Ces salles payantes ne le sont pas toujours, dans la mesure où il existe un certain nombre de critères dont il faut tenir compte pour savoir si la salle sera payante ou non. 
					</p>
					<p>La salle est non payante si : 
					</p>
					<ul>
						<li>le pétitionnaire est une association à caractère non politique, il peut obtenir la gratuité de la salle à condition que la manifestation soit sans recette de toute nature.</li>
						<li>en cas des manifestations organisées par les syndicats ouvriers, des partis politiques, anciens combattants, invalides du travail, donneurs de sang, ou bien organisés par le comité d’action culturelle et touristique ou son parrainage, ou enfin organisés par le COS (Comité d’œuvres Sociales) de la mairie et le COS des services publics locaux.</li>
					</ul>
				</blockquote>
				<h4>3.	Location du matériel</h4>
				<blockquote class="small">
					<p>Il faut savoir qu’il est possible de disposer de matériel, or tout type de matériel ne peut pas être loué par tout le monde.
					</p>
					<p>Si des dégradations se produisent sur du matériel loué, un devis est demandé au service technique pour émettre une facture de dégradation.
					</p>
				</blockquote>
			</div>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>