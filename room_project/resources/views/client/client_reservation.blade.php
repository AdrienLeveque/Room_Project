@extends('template_client')

@section('contenu')	
<link rel="stylesheet" href="kalendae/build/kalendae.css" type="text/css" charset="utf-8">
	<script src="kalendae/build/kalendae.standalone.min.js" type="text/javascript" charset="utf-8"></script>
	<style type="text/css" media="screen">
		.kalendae span.closed {
			background:red;
		}
	</style>


<!-- Titre -->
<meta http-equiv="content_type" content="text/html";  charset="utf-8" />
	 <div class="container">
	 	  <div class="col-md-offset-3">
			<h1><strong> Reservation de votre salle en ligne</strong></h1>
		</div>
	</div>

	</br>
	
	<div class="container">
	<div class="col-md-offset-5"
	<body>
	<h1>Calendrier</h1>
	

<!-- function getInput(){
	var k1 = document.getElementById("input").innerHTML;
	alert(k1);
}*/ -->
<form method="post" action="client_reservation.php"> 
<input type="text" value="toto" name="input" id="input">
<script type="text/javascript" charset="utf-8">
		$('#sandbox-container div').datepicker({
		    weekStart: 1,
		    todayBtn: "linked",
		    language: "fr",
		    multidate: true,
		    multidateSeparator: "-",
		    daysOfWeekHighlighted: "0,6",
		    todayHighlight: true,
		    datesDisabled: ['05/06/2016', '05/21/2016']
});
</script>
<input type="submit" value="OK"> 
</form>


		
</body>
		</div>	
	</div>

@stop
