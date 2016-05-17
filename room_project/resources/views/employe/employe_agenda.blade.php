@extends('layouts.app')

@section('accueil')  @endsection

@section('a_propos')  @endsection  

@section('agenda') class="active" @endsection

@section('contact')  @endsection

@section('connexion')  @endsection

@section('inscription')  @endsection

@section('deconnection')  @endsection
@section('content')
<!-- Titre -->
		<div class="container">
				<div class="col-md-12">
				<?php $infosEmploye = DB::table('reservation')
					->distinct()
					->join('salle','id_salle_reservation','=','salle.id')
					->join('users','id_user','=','users.id')
					->where('etat_des_lieux_effectue',"=",0)
					->where('date_fin','>=',date("Y-m-d"))
					->get();?>

				<style>
					.table td, th {
						text-align:  center;
					}
				</style>
				
				<table class='table table-bordered'>
				<legend> Agenda de l'employe </legend>
					<thread>
						<tr> 
							<th>Nom</th>
							<th>Prenom </th>
							<th>Date début</th>
							<th>Date fin</th>
							<th>Nom de la salle</th>
							<th>Numéro de la salle</th>
							<th>Tarif de la salle</th>
							<th>Capacité de salle</th>
							<th>Caution de la salle</th>
							<th>Gardien présent</th>
						</tr>
					</thread>
					<body>
						<?php foreach ($infosEmploye as $infosEmploye)
						{?>
							<tr> 
								<td><?php echo $infosEmploye->nom ?> </td>
								<td><?php echo $infosEmploye->prenom ?> </td>
								<td><?php echo $infosEmploye->date_debut ?> </td>
								<td><?php echo $infosEmploye->date_fin ?> </td>
								<td><?php echo $infosEmploye->nom_salle ?> </td>
								<td><?php echo $infosEmploye->numero_salle ?> </td>
								<td><?php echo $infosEmploye->tarif_salle ?> </td>
								<td><?php echo $infosEmploye->capacite_salle ?> </td>
								<td><?php echo $infosEmploye->caution_salle ?> </td>
								<td><?php echo $infosEmploye->gardien_salle ?> </td>
							</tr>
						<?php } ?>
						</body>
						</table>

		</div>
@stop