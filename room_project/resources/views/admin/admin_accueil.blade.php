@extends('layouts.app')

@section('accueil')  @endsection

@section('a_propos')  @endsection  

@section('administration') class="active" @endsection

@section('contact')  @endsection

@section('connexion')  @endsection

@section('inscription')  @endsection

@section('deconnection')  @endsection
@section('content')
<!-- Titre -->
		<div class="container">
			<div class="col-md-6"> 
<!-- Gestion des employés -->
				<?php
					$infosSalle = DB::table('salle')->get(); 
					
					$les_salles=array();
					foreach($infosSalle as $infosSalle){
						
						$les_salles[]=$infosSalle->nom_salle;
					}
					
				?>
				<fieldset>
		 			<legend class="text-center header"><ins><strong>Gestion des employés</strong></ins></legend>
					<div class="col-md-4"> 
						<label> Ajouter un employé</label>
					</div>
					<div class="col-md-6"> 
						<a class="btn btn-info" href="admin_employer" role="button">Etape suivante</a>
					</div>
					<div class="col-md-2"> 
						
					</div>
		
					</br></br>

					<div class="col-md-4">	
						<label> Supprimer un employé</label>
					</div>
					<div class="col-md-6">
	 					<a class="btn btn-info" href="admin_accueil" role="button">Etape suivante</a>
					</div>
					<div class="col-md-2">
						
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
		 			<legend class="text-center header"><ins><strong>Gestion des Salles</strong></ins></legend>
					<div class="col-md-4"> 
						<label> Ajouter une salle</label>
					</div>
					<div class="col-md-6"> 
						<a class="btn btn-info" href="admin_salle" role="button">Etape suivante</a>
					</div>
					<div class="col-md-2"> 

					</div>
		
					</br></br>

					<div class="col-md-4">	
						<label> Modifier une salle</label>
					</div>
					<div class="col-md-6">
	 					<a class="btn btn-info" href="admin_salle_delete" role="button">Etape suivante</a>
					</div>
					<div class="col-md-2">
						
					</div>
				</fieldset>	
			</div>


		</div>
@stop