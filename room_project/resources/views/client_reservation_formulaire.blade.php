@extends('template')

@section('contenu')
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
  					<a class="navbar-brand" href="#">Client: </a>
  				</div>
		        <div class="container-fluid">
		          <ul class="nav navbar-nav">
		            <li> <a href="client_accueil">Accueil</a> </li>
		            <li  class="active"> <a href="consulter_salles">Consulter les salles</a></li>
		            <li> <a href="client_reservation">Mes reservations</a> </li>
		            <li> <a href="client_compte">Mon compte</a> </li>
		            <li> <a href="client_contact">Contact</a> </li>
		          </ul>
		        </div>
		     </nav>
		</div>

		<div class="container">
			<form action="reservation_paiement.php" method="post">
				<?php
					$idSalle=$_GET['id'];
					$infosSalle = DB::table('salle')->where('id', $idSalle)->first(); 
						$nomSalle=$infosSalle->nom_salle;
						$adresseSalle=$infosSalle->adresse_salle;
						$capaciteSalle=$infosSalle->capacite_salle;
						$gardienSalle=$infosSalle->gardien_salle;
						$pathSalle=$infosSalle->image;
				?>
				<div class="col-md-12">
					<div class="col-md-6">  
						<img src="images/<?php echo $pathSalle ?>" class="img-thumbnail img-responsive center-block" alt="Responsive image" style="margin-bottom: 2%;">
					</div> 
					<div class="col-md-6">
						<fieldset>
							<legend>Location de materiel</legend>
							<form class="form-horizontal" role="form" method="POST" action="{{ url('/client_reservation_paiement?id=<?php echo $idSalle; ?>') }}">
						<ul>
							<?php
							$infosMateriel = DB::table('materiel')
											->get(); 
							foreach($infosMateriel as $infosMateriel){
								$quantite=$infosMateriel->quantite;
								
								$nbReserveMateriel = DB::table('materiel_reserve')
									->join('reservation','reservation.id','=','materiel_reserve.id_reservation')
									->where('id_materiel','=',$infosMateriel->id)
									->where('date_fin','>',date("Y-m-d"))
									->count();
								
								$nbSallesMateriel = DB::table('salle_materiel')
									->where('id_materiel','=',$infosMateriel->id)
									->count();
							?>
							
							<div class="col-md-6">
							<li>
							<?php
							echo $infosMateriel->libelle_materiel;
							
							$nb=$quantite-$nbReserveMateriel-$nbSallesMateriel
							?>
							</li>
							</div>
							
							<div class="col-md-6">
								 {!!  Form::selectRange($infosMateriel->libelle_materiel, 0, $nb); !!}
							</div>
							</br>
							</br>
							<?php
							}
							?>
						</ul>	
							
						</fieldset>
						<hr>
					</div>
					<input type="text" name="fname" value="<?php echo $idSalle ?>">
					<div class="col-md-12">
						<div class="col-md-6">
							<fieldset>
								<legend> Formulaire clef</legend>
							</fieldset>
							<div class="panel panel-info">
								<div class="panel-heading">Envoi d'une fichiers PDF</div>
								<div class="panel-body"> 
									@if(session()->has('error'))
										<div class="alert alert-danger">{!! session('error') !!}</div>
									@endif
									<form class="form-horizontal" role="form" method="POST" action="{{ url('/client_reservation_paiement?id=<?php echo $idSalle; ?>') }}">!!}
										<div class="form-group {!! $errors->has('Clef') ? 'has-error' : '' !!}">
											{!! Form::file('Clef', ['class' => 'form-control']) !!}
											{!! $errors->first('Clef', '<small class="help-block">:message</small>') !!}
										</div>
									
									
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<fieldset>
								<legend> Formulaire Assurance</legend>
							</fieldset>
								
									<div class="panel panel-info">
										<div class="panel-heading">Envoi d'une fichiers PDF</div>
										<div class="panel-body"> 
											@if(session()->has('error'))
												<div class="alert alert-danger">{!! session('error') !!}</div>
											@endif
											
												<div class="form-group {!! $errors->has('Assurance') ? 'has-error' : '' !!}">
													{!! Form::file('Assurance', ['class' => 'form-control']) !!}
													{!! $errors->first('Assurance', '<small class="help-block">:message</small>') !!}							
												</div>
										
										</div>
									</div>
								
						</div>
					</div>

					<div class="col-md-12">
					</br></br>
						{!! Form::submit('Etape suivante !', ['class' => 'btn btn-primary']) !!}
						{!! Form::close() !!}
					</div>
				</div>
			</form>
		</div>
@stop