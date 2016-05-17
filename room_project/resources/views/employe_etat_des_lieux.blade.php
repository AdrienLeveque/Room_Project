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

				<div class="col-md-12">
				<?php $infosEmploye = DB::table('reservation')
					->distinct()
					->join('salle','id_salle_reservation','=','salle.id')
					->join('users','id_user','=','users.id')
					->where('etat_des_lieux_effectue',"=",0)
					->where('date_fin','<',date("Y-m-d"))
					->get();
					

				?>  					

		
				</div>

				<?php $i=0; ?>

				<?php 
				foreach($infosEmploye as $infosEmploye){
				?> 
					<fieldset>
						<legend><?php echo "Reservation du client ".$infosEmploye->nom." ".$infosEmploye->prenom.": du ".$infosEmploye->date_debut." au ".$infosEmploye->date_fin;?> </legend>

							<?php	
								$infosMaterielR = DB::table('materiel')
								->select(DB::raw('count(*) as nbMateriel','libelle_materiel'),'libelle_materiel')
								->join('materiel_reserve','id_materiel','=','materiel.id')
								->where('id_reservation','=',$infosEmploye->id)
								->groupby('libelle_materiel')
								->get();

								$InfosClef= DB::table('clef')
								->select(DB::raw('DISTINCT(numero_clef)'),'clef_empruntee')
								->join('salle_clef','clef.id','=','salle_clef.id_salle')
								->where('salle_clef.id_salle','=', $infosEmploye->id_salle_reservation)
								->get();

							?>
								<h4><strong> Etats des lieux:</strong></h4>
								<label>Salle abimée: </label>
									{{Form::radio('Salle_abime'.$i, 'yes')}} Oui
									{{Form::radio('Salle_abime'.$i, 'no',true)}} Non 
								<?php
								foreach($infosMaterielR as $infosMaterielR){
									?><div class="col-md-6">
										<?php echo $infosMaterielR->libelle_materiel." abimé(es)"; ?>
										{!! Form::selectRange($infosMaterielR->libelle_materiel, 0, $infosMaterielR->nbMateriel); !!}
										</br>
									</div>
							<?php } ?>
							</br>
							<?php
								
								foreach($InfosClef as $InfosClef){
									?><div class="col-md-6">
									<?php 
									if($InfosClef->clef_empruntee==1){ 
									?>
										<?php echo 'clef numero "'.$InfosClef->numero_clef.'" rendu: '; ?>
											<?php $a="awesome_radio_input".$i;
											?>

											{{Form::radio($a, 'yes')}} Oui
											{{Form::radio($a, 'no',true)}} Non
											<?php $i=$i+1; ?>
									<?php }
									else {
										echo "la clef a deja ete rendu";
									}?>

										</br>
									</div>
							<?php } 

							?>	

		{!! Form::submit('Etape suivante !', ['class' => 'btn btn-primary']) !!}
					
							</br></br>
					</fieldset>
				<?php 
					}
				?>


		</div>
@stop