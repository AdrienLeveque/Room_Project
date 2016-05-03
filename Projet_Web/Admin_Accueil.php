<?php include("head.php") ?>
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
  					<a class="navbar-brand" href="#">Interface:</a>
  				</div>
		        <div class="container-fluid">
		          <ul class="nav navbar-nav">
		            <li class="active"> <a href="Admin_accueil.php">Admin</a> </li>
		            <li> <a href="client_accueil.php">Client</a> </li>
		            <li> <a href="employe_accueil.php">Employé</a> </li>
		          </ul>
		        </div>
		     </nav>
		</div>

		<div class="container">
			<div class="col-md-6"> 
<!-- Gestion des employés -->
				<fieldset>
		 			<legend class="text-center header"><ins><strong>Gestion des employés</strong></ins></legend>
					<div class="col-md-4"> 
						<label> Ajouter un employé</label>
					</div>
					<div class="col-md-6"> 
						<input type="texte" class="form-control" name="Gestion_employé" id="Gestion_employé" placeholder="">
					</div>
					<div class="col-md-2"> 
						<button type="button" class="btn btn-default btn-sm">OK</button>
					</div>
		
					</br></br>

					<div class="col-md-4">	
						<label> Supprimer un employé</label>
					</div>
					<div class="col-md-6">
	 					<input type="texte" class="form-control" name="Gestion_employé_2" id="Gestion_employé_2" placeholder="">
					</div>
					<div class="col-md-2">
						<button type="button" class="btn btn-default btn-sm">OK</button>
					</div>
				</fieldset>	
			</div>

<!-- Gestion des Clients -->
			<div class="col-md-6"> 
				<fieldset>
		 			<legend class="text-center header"><ins><strong>Gestion des clients</strong></ins></legend>
					<div class="col-md-4"> 
						<label> Ajouter un client</label>
					</div>
					<div class="col-md-6"> 
						<input type="texte" class="form-control" name="Gestion_client" id="Gestion_client" placeholder="">
					</div>
					<div class="col-md-2"> 
						<button type="button" class="btn btn-default btn-sm">OK</button>
					</div>
		
					</br></br>

					<div class="col-md-4">	
						<label> Supprimer un employé</label>
					</div>
					<div class="col-md-6">
	 					<input type="texte" class="form-control" name="Gestion_client_2" id="Gestion_client_2" placeholder="">
					</div>
					<div class="col-md-2">
						<button type="button" class="btn btn-default btn-sm">OK</button>
					</div>		
				</fieldset>	
			</div>
			

		
<!-- Gestion du matériel -->
			<div class="col-md-6"> 
				</br></br>
				<fieldset>
		 			<legend class="text-center header"><ins><strong>Gestion du matériel</strong></ins></legend>
					<div class="col-md-4"> 
						<label> Ajouter un matériel</label>
					</div>
					<div class="col-md-6"> 
						<input type="texte" class="form-control" name="Gestion_materiel" id="Gestion_materiel" placeholder="">
					</div>
					<div class="col-md-2"> 
						<button type="button" class="btn btn-default btn-sm">OK</button>
					</div>
		
					</br></br>

					<div class="col-md-4">	
						<label> Supprimer un matériel</label>
					</div>
					<div class="col-md-6">
	 					<input type="texte" class="form-control" name="Gestion_materiel_2" id="Gestion_materiel_2" placeholder="">
					</div>
					<div class="col-md-2">
						<button type="button" class="btn btn-default btn-sm">OK</button>
					</div>
				</fieldset>	
			</div>

			<div class="col-md-6"> 
				</br></br>
				<fieldset>
		 			<legend class="text-center header"><ins><strong>Gestion des clefs</strong></ins></legend>
					<div class="col-md-4"> 
						<label> Ajouter une clef</label>
					</div>
					<div class="col-md-6"> 
						<input type="texte" class="form-control" name="Gestion_clef" id="Gestion_clef" placeholder="">
					</div>
					<div class="col-md-2"> 
						<button type="button" class="btn btn-default btn-sm">OK</button>
					</div>
		
					</br></br>

					<div class="col-md-4">	
						<label> Supprimer une clef</label>
					</div>
					<div class="col-md-6">
	 					<input type="texte" class="form-control" name="Gestion_clef_2" id="Gestion_clef_2" placeholder="">
					</div>
					<div class="col-md-2">
						<button type="button" class="btn btn-default btn-sm">OK</button>
					</div>
				</fieldset>	
			</div>
		</div>

		<div class="container">			
			<div class="col-md-6"> 
				</br></br>
				<fieldset>
		 			<legend class="text-center header"><ins><strong>Gestion des statuts</strong></ins></legend>
					<div class="col-md-4"> 
						<label> Ajouter un statut</label>
					</div>
					<div class="col-md-6"> 
						<input type="texte" class="form-control" name="Gestion_statut" id="Gestion_statut" placeholder="">
					</div>
					<div class="col-md-2"> 
						<button type="button" class="btn btn-default btn-sm">OK</button>
					</div>
		
					</br></br>

					<div class="col-md-4">	
						<label> Supprimer un statuts</label>
					</div>
					<div class="col-md-6">
	 					<input type="texte" class="form-control" name="Gestion_statut_2" id="Gestion_statut_2" placeholder="">
					</div>
					<div class="col-md-2">
						<button type="button" class="btn btn-default btn-sm">OK</button>
					</div>
				</fieldset>	
			</div>

			<div class="col-md-6"> 
				</br></br>
				<fieldset>
		 			<legend class="text-center header"><ins><strong>Gestion des Reductions</strong></ins></legend>
					<div class="col-md-4"> 
						<label> Ajouter une Reduc</label>
					</div>
					<div class="col-md-6"> 
						<input type="texte" class="form-control" name="Gestion_Reduction" id="Gestion_Reduction" placeholder="">
					</div>
					<div class="col-md-2"> 
						<button type="button" class="btn btn-default btn-sm">OK</button>
					</div>
		
					</br></br>

					<div class="col-md-4">	
						<label> Supprimer un Reudc</label>
					</div>
					<div class="col-md-6">
	 					<input type="texte" class="form-control" name="Gestion_Reduction_2" id="Gestion_Reduction_2" placeholder="">
					</div>
					<div class="col-md-2">
						<button type="button" class="btn btn-default btn-sm">OK</button>
					</div>
				</fieldset>	
			</div>


		</div>


</body>
