@extends('layouts.app')

@section('accueil')  @endsection

@section('a_propos')  @endsection  

@section('etat_des_lieux') class="active" @endsection

@section('contact')  @endsection

@section('connexion')  @endsection

@section('inscription')  @endsection

@section('deconnection')  @endsection
@section('content')
<!-- Titre -->
		<div class="container">
			<table class="table table-bordered"> 
			<?php
			$reservation = DB::table('reservation')
								->distinct()
								->join('salle', 'salle.id', '=', 'id_salle_reservation')
								->join('users','id_user','=','users.id')
								->where('reservation.id','=', $idReservation)
								->first();
			?>


			<legend> Etat des lieux de la salle <?php echo $reservation->nom_salle ?> 
			<?php echo "Reservation du client ".$reservation->nom." ".$reservation->prenom.": du ".$reservation->date_debut." au ".$reservation->date_fin;?> </legend>

				<thread>
					<tr> 
						<th> Libellé matériel </th>
						<th> Quantité </th>
						<th> Prix </th>
					</tr>
				</thread>
				<body>

			<?php


			$prixglobal = 0;
			
			$infosMaterielR = DB::table('materiel')
								->select('libelle_materiel', 'caution_materiel')
								->distinct()
								->join('materiel_reserve','id_materiel','=','materiel.id')
								->where('materiel_reserve.id_reservation', '=', $idReservation)
								->orderby('libelle_materiel', 'asc')
								->get();
			$i=0;
			foreach($infosMaterielR as $infosMaterielR){
				?><tr>
						<td><?php echo $infosMaterielR->libelle_materiel;?> </td>
						<td> {{ $materiel[$i]}} </td>
						<td><?php echo $infosMaterielR->caution_materiel * $materiel[$i] ?>  €</td>
						<?php $prixglobal += $infosMaterielR->caution_materiel * $materiel[$i]; ?>


					</tr>
				
				<?php $i++;
			}?>
				<tr> 
					<td></td>
					<td></td>
					<td><?php echo 'Total : '.$prixglobal.' €' ?></td>
				</tr>
				</body>
			</table>

			<?php
			if ($salleAbimee == 'yes')
			{?>
				<h4> L'état de la salle a été jugé dégradé, le montant de la caution s'élève à : <?php echo $reservation->caution_salle ?>€</h4>
				<?php
				$prixFinal = $reservation->caution_salle + $prixglobal;
			}
			else{
				$prixFinal = $prixglobal;
			}
				
			?>
			<hr>
			<h2> Montant total à payer : <?php echo $prixFinal ?> €</h2>

		</div>
@stop