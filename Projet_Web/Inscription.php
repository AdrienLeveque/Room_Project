<?php include("head_deconnecte.php") ?>
<body>	
<!-- Titre -->
	 <div class="container">
	 	  <div class="col-md-offset-3">
			<h1><strong> Reservation de votre salle en ligne</strong></h1>
		</div>
	</div>
	</br>

<!-- Barre de navigation -->
		<div class="container">
		    <nav class="navbar navbar-default">
		      	<div class="navbar-header">
  					<a class="navbar-brand" href="#">Utilisateur non enregistré: </a>
  				</div>
		        <div class="container-fluid">
		          <ul class="nav navbar-nav">
		            <li> <a href="Accueil.php">Accueil</a> </li>
		            <li> <a href="connexion.php">Connexion</a></li>
		            <li class="active"> <a href="Inscription.php">Inscription</a> </li>
		            <li> <a href="Comment_ca_marche.php">Comment ça marche</a> </li>
		            <li> <a href="contact.php">Contact</a> </li>
		          </ul>
		        </div>
		     </nav>
		</div>

		<div class="container">
			<div class="col-md-12">
				<fieldset>
					<div class="col-md-3"> </div>
					<legend>Inscription</legend>
					<div class="col-md-12">
						<div class="col-md-2"> Nom </div>
						<div class="col-md-4"> 
							<input type="texte" class="form-control" name="Inscription_nom" id="Inscription_nom" placeholder="">
						</div>
					</div>
					</br></br></br>
					<div class="col-md-12">
						<div class="col-md-2"> Prenom </div>
						<div class="col-md-4"> 
							<input type="texte" class="form-control" name="Inscription_prenom" id="Inscription_prenom" placeholder="">
						</div>
					</div>
					</br></br></br>
					<div class="col-md-12">
						<div class="col-md-2"> Mot de passe </div>
						<div class="col-md-4"> 
							<input type="texte" class="form-control" name="Inscription_mdp" id="Inscription_mdp" placeholder="">
						</div>
					</div>

					</br></br></br>
					<div class="col-md-12">
						<div class="col-md-2"> Confirmer le mot de passe </div>
						<div class="col-md-4"> 
							<input type="texte" class="form-control" name="Inscription_mdp2" id="Inscription_mdp2" placeholder="">
						</div>
					</div>

					</br></br></br>
					<div class="col-md-12">
						<div class="col-md-2"> Date de naissance </div>
						<div class="col-md-4">
							<div class="col-md-4"> 
									<select name="select_jour" id="select_jour" class="form-control">
									  <option selectcted="selected" disabled selected>Jour</option>
									  <?php  for ($i=1; $i < 32; $i++) {  ?>
									  	<option><?php echo $i ?></option>
									  <?php } ?>
									</select>
							</div>
							<div class="col-md-4"> 
									<select name="select_mois" id="select_mois" class="form-control">
									  <option selectcted="selected" disabled selected>Mois</option>
									  <?php  for ($i=1; $i < 13; $i++) {  ?>
									  	<option><?php echo $i ?></option>
									  <?php } ?>

									</select>
							</div>
							<div class="col-md-4"> 
									<select name="select_mois" id="select_mois" class="form-control">
									  <option selectcted="selected" disabled selected>Année</option>
									  <?php  for ($i=2016; $i > 1900; $i--) {  ?>
									  	<option><?php echo $i ?></option>
									  <?php } ?>
									</select>
							</div>
						</div>
					</div>

					</br></br></br>
					<div class="col-md-12">
						<div class="col-md-2"> Adresse</div>
						<div class="col-md-4"> 
							<input type="texte" class="form-control" name="Inscription_adresse" id="Inscription_adresse" placeholder="">
						</div>
					</div>
					</br></br>
					<div class="col-md-12">
						<div class="col-md-2"> </div>
						<div class="col-md-2">
							<input type="texte" class="form-control" name="Inscription_adresse2" id="Inscription_adresse2" placeholder="Code postale">
						</div>
						<div class="col-md-2">
							<input type="texte" class="form-control" name="Inscription_adresse3" id="Inscription_adresse3" placeholder="Ville">
						</div>
					</div>

					</br></br></br>
					<div class="col-md-12">
						<div class="col-md-2"> Téléphone </div>
						<div class="col-md-4"> 
							<input type="texte" class="form-control" name="Inscription_tel" id="Inscription_tel" placeholder="">
						</div>
					</div>

					</br></br></br>
					<div class="col-md-12">
						<div class="col-md-2"> Couriel </div>
						<div class="col-md-4"> 
							<input type="texte" class="form-control" name="Inscription_mail" id="Inscription_mail" placeholder="">
						</div>
					</div>

					</br></br></br>
					<div class="col-md-12">
						<label>
						  <input id="checkbox1" type="checkbox"> J'ai lu et j'accepte les conditions générales d'utilisation
						</label>
					</div>
					</br>
					<div class="col-md-12">
						<label>
						  <input id="checkbox2" type="checkbox"> Je refuse que ces informatins soient utilisées à des fins commerciale
						</label>
					</div>

					</br></br></br>
					<div class="col-md-6">
						<button type="button" class="pull-right">Valider</button>
					</div>
				</fieldset> 
			</div>
		</div>

</body>