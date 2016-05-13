@extends('layouts.app')

@section('accueil')  @endsection

@section('a_propos')  @endsection  

@section('client_consulter_salles')  @endsection

@section('client_mon_compte')  @endsection

@section('client_mes_reservations') class="active" @endsection

@section('contact')  @endsection

@section('connexion')  @endsection

@section('inscription')  @endsection

@section('deconnection')  @endsection
@section('content')
<!-- Titre -->
		<div class="container">
			<?php
			$idUser=Auth::user()->id;
			$infoReservation_avant=DB::table('reservation')
			->join('salle','salle.id','=','reservation.id_salle_reservation')
			->where('id_user','=',$idUser)
			->where('date_fin','<', date("Y-m-d"))
			->get();
			$infoReservation_apres=DB::table('reservation')
			->join('salle','salle.id','=','reservation.id_salle_reservation')
			->where('id_user','=',$idUser)
			->where('date_fin','>=', date("Y-m-d"))
			->get();

			?>
			<div class="col-md-12">
				<div class="col-md-6">
					<fieldset>
						<legend>Mes reservations en cours</legend>
							<?php
								$compteur=1;
								foreach($infoReservation_apres as $infoReservation_apres){
								?> <strong>  <?php echo "Reservation ".$compteur."<br>" ?> </strong> <?php
								echo "Date debut: ".$infoReservation_apres->date_debut."<br>"."Date fin: ".$infoReservation_apres->date_fin."<br>"."Salle: ".$infoReservation_apres->nom_salle."<br>"."<br>";
								
								$compteur++;
								}
							?>
					</fieldset>
				</div>
				<div class="col-md-6">
					<fieldset>
						<legend>Historique de mes reservations</legend>
			
							<?php
								$compteur=1;
								foreach($infoReservation_avant as $infoReservation_avant){
								?> <strong>  <?php echo "Reservation ".$compteur."<br>" ?> </strong> <?php
								echo "Date debut: ".$infoReservation_avant->date_debut."<br>"."Date fin: ".$infoReservation_avant->date_fin."<br>"."Salle: ".$infoReservation_avant->nom_salle."<br>"."<br>";
								
								$compteur++;
								}
							?>
					</fieldset>
				</div>
			</div>
		</div>
		
@stop