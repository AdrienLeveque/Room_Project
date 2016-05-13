@extends('layouts.app')

@section('accueil')  @endsection

@section('a_propos')  @endsection  

@section('client_consulter_salles')  @endsection

@section('client_mon_compte') class="active" @endsection

@section('contact')  @endsection

@section('connexion')  @endsection

@section('inscription')  @endsection

@section('deconnection')  @endsection
@section('content')
<!-- Titre -->
			<div class="container">
			<?php
			$nom=Auth::user()->nom;
			$prenom=Auth::user()->prenom;
			$adresse=Auth::user()->adresse;
			$ville=Auth::user()->ville;
			$code_postal=Auth::user()->code_postal;
			$date_naissance=Auth::user()->date_naissance;
			$telephone=Auth::user()->telephone;
			$email=Auth::user()->email;
			?>
			<div class="row"> 
				<div class="col-md-offset-1 col-md-1">
					<h1><span class="glyphicon glyphicon-user"></span></h1>
				</div>
				<div class="col-md-8">
					<legend>Informations personnelles</legend>
					
					<form class="form-horizontal padding no-margin-bottom">
						<blockquote>
						<div class="form-group">
							<label for="inputNom" class="col-md-3 text-right">Nom:</label>
							<div class="col-md-6">
								<?php echo $nom  ?>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPrenom" class="col-md-3 text-right">Prénom:</label>
							<div class="col-md-6">
								<?php echo $prenom  ?>
							</div>
						</div>
						<div class="form-group">
							<label for="inputE-mail" class="col-md-3 text-right">E-mail:</label>
							<div class="col-md-6">
								<?php echo $email  ?>
							</div>
						</div>
						<div class="form-group">
							<label for="inputTÃ©lÃ©phone" class="col-md-3 text-right">Télephone:</label>
							<div class="col-md-6">
								<?php echo $telephone  ?>
							</div>
						</div>
						<div class="form-group">
							<label for="inputDate_de_naissance" class="col-md-3 text-right">Date de naissance:</label>
							<div class="col-md-6">
								<?php echo $date_naissance  ?>
							</div>
						</div>
						<div class="form-group">
							<label for="inputAdresse" class="col-md-3 text-right">Adresse:</label>
							<div class="col-md-6">
								<?php echo $adresse ?>
							</div>
						</div>
						<div class="form-group">
							<label for="inputAdresse" class="col-md-3 text-right">Ville:</label>
							<div class="col-md-6">
								<?php echo $ville ?>
							</div>
						</div>
						<div class="form-group">
							<label for="inputAdresse" class="col-md-3 text-right">Code postal:</label>
							<div class="col-md-6">
								<?php echo $code_postal ?>
							</div>
						</div>
						</blockquote>
					</form>
				
				</div>
			</div>
		</div>
		
@stop