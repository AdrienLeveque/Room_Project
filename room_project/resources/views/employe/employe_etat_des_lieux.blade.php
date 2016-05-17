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
				<div class="col-md-12">
			<br>
				<?php $infosEmploye = DB::table('reservation')
					->distinct()
					->join('salle','id_salle_reservation','=','salle.id')
					->join('users','id_user','=','users.id')
					->where('etat_des_lieux_effectue',"=",0)
					->where('date_fin','<',date("Y-m-d"))
					->get();
				?>  					
				<?php $i=1; 
				$j=0; ?>
				<?php 
				foreach($infosEmploye as $infosEmploye){
				?> 
				{!! Form::open(['url' => 'employe_etat_des_lieux']) !!}
				
					<fieldset>
						<legend><?php echo "Reservation du client ".$infosEmploye->nom." ".$infosEmploye->prenom.": du ".$infosEmploye->date_debut." au ".$infosEmploye->date_fin;?> </legend>

							<?php	
								$id_reserv = DB::table('reservation')
								->select('id')
								->where('date_debut','=',$infosEmploye->date_debut)
								->where('date_fin','=',$infosEmploye->date_fin)
								->where('id_salle_reservation','=',$infosEmploye->id_salle_reservation)
								->first();

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
									{{Form::radio('Salle_abime'.$j, 'yes')}} Oui
									{{Form::radio('Salle_abime'.$j, 'no',true)}} Non 
									<input type="HIDDEN" name="idSalle" value="<?php echo $j ?>">
								<?php
								$j++;
								$k = 0;
								foreach($infosMaterielR as $infosMaterielR){
									?><div class="col-md-6">

										<?php echo $infosMaterielR->libelle_materiel." abimé(es)"; ?>
										{!! Form::selectRange('materiel_abime'.$k, 0, $infosMaterielR->nbMateriel); !!}
										<input type="HIDDEN" name="idMateriel" value="<?php echo $k ?>">
										</br>
									</div>
							<?php $k++;} ?>
							</br>
							<?php
								foreach($InfosClef as $InfosClef){
									?><div class="col-md-6">
									<?php 
									if($InfosClef->clef_empruntee==1){ 
									?>
										<?php echo 'clef numero "'.$InfosClef->numero_clef.'" rendu: ';?>
											{{Form::radio('clef_empruntee'.$i, 'yes')}} Oui
											{{Form::radio('clef_empruntee'.$i, 'no',true)}} Non
											
											<input type="HIDDEN" name="idClef" value="<?php echo $i ?>">
											<?php $i=$i+1; ?>
									<?php }
									else {
										echo "la clef a deja ete rendu";
									}?>

										</br>
									</div>
							<?php } 

							?>	
							<input type="HIDDEN" name="idUser" value= "<?php echo $infosEmploye->id_user ?>">
							<input type="HIDDEN" name="idReservation" value= "<?php echo $id_reserv->id ?>">
							{!! Form::submit('Etape suivante !', ['class' => 'btn btn-primary pull-right']) !!}
							{{ Form::close() }}
								
							</br></br>
					</fieldset>
				<?php 
					}
				?>


		</div>
@stop