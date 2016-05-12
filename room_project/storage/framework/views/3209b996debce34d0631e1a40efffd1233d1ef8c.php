<?php $__env->startSection('contenu'); ?>	
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
		var k = new Kalendae.Input('input',{
			attachTo:document.body,
			months:3,
			mode:'multiple',
			weekStart:1,
			direction:'today-future',
		});
</script>
<input type="submit" value="OK"> 
</form>


		
</body>
		</div>	
	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_client', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>