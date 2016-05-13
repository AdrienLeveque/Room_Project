@extends('layouts.app')

@section('accueil')  @endsection

@section('a_propos')  @endsection  

@section('client_consulter_salles') class="active" @endsection

@section('contact')  @endsection

@section('connexion')  @endsection

@section('inscription')  @endsection

@section('deconnection')  @endsection
@section('content')
<!-- Titre -->

		<div class="container">
			<form action="reservation_formulaire.php" method="post">
				<div class="col-md-12">
					<?php 
						$idSalle=$_GET['id'];
							$infosSalle = DB::table('salle')->where('id', $idSalle)->first(); 
							$nomSalle=$infosSalle->nom_salle;
							$adresseSalle=$infosSalle->adresse_salle;
							$capaciteSalle=$infosSalle->capacite_salle;
							$gardienSalle=$infosSalle->gardien_salle;
							$pathSalle=$infosSalle->image;
					?>
					<div class="col-md-6">  
						<img src="images/<?php echo $pathSalle ?>" class="img-thumbnail img-responsive center-block" alt="Responsive image" style="margin-bottom: 2%;">
					</div> 
					<div class="col-md-6">
						<div class="col-md-12">
							<fieldset>
								<legend>Informations</legend>
								<div class="col-md-12"> Salle:<?php if(!is_null($nomSalle)) echo $nomSalle ?></div>
								<div class="col-md-12">Adresse: <?php if(!is_null($adresseSalle)) echo $adresseSalle ?></div>
								<div class="col-md-12">Capacité de la salle: <?php if(!is_null($capaciteSalle)) echo $capaciteSalle ?></div>
								<div class="col-md-12">Gardien sur place: <?php if(!is_null($gardienSalle)) echo $gardienSalle ?></div>
							</fieldset>
						</div>
							<div class="col-md-12">
								</br>
								<fieldset>
									<legend>Matériel dans la salle</legend>
									<?php 
										$infosMateriel = DB::table('materiel')->distinct()->select('materiel.id','materiel.libelle_materiel')
											->join('salle_materiel','materiel.id','=','salle_materiel.id_materiel')
											->where('id_salle','=',$idSalle)
											->get();
											
									?><ul>		<?php											
									foreach( $infosMateriel as $infosMateriel) {
											$quantiteMateriel = DB::table('salle_materiel')
											->join('materiel','salle_materiel.id_materiel','=','materiel.id')
											->where('id_salle','=',$idSalle)
											->where('id_materiel','=', $infosMateriel->id)
											->count()
									?>
									<div class="col-md-12"> <li> <?php echo $infosMateriel->libelle_materiel."  ".$quantiteMateriel; ?> </li></div>
									<?php } ?>
									</ul>
								</fieldset>
							</div>
						<hr>
					</div>
					<div class="col-md-12">
						<div class="col-md-offset-3">
							<h2><strong>Selectionner un jour ou une periode disponible</strong></h2>
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-4">
							</br>
							<select class="form-control">
								<option selectcted="selected">Semaine du</option>
							</select>
						</div>
					</div>
					<div class="col-md-12">
					</br></br>
 					<a class="btn btn-primary" href="client_reservation_formulaire?id=<?php echo $idSalle; ?>" role="button">Etape suivante</a>
					</div>
				</div>
			</form>
		</div>
@stop
