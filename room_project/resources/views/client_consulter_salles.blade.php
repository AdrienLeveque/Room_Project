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
@stop