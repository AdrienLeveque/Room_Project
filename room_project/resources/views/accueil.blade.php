@extends('layouts.app')

@section('accueil') class="active" @endsection

@section('a_propos')  @endsection  

@section('contact')  @endsection

@section('connexion')  @endsection

@section('inscription')  @endsection

@section('deconnection')  @endsection

@section('content')	

<style>
.carousel-page
{
width:100%;
height:400px;
background-color:#5f666d;
color:white;
}
</style>
<!-- Titre -->
	 <div class="container">
	 	  <div class="col-md-offset-3">
			<h1><strong> Reservation de votre salle en ligne</strong></h1>
		</div>
	</div>
	</br>		
		<div class="container">
			<section class="row">
				<div class="col-xs-offset-4 col-xs-8 col-md-offset-1 col-md-10">
				<br>
					<legend class="text-center padding">LOCATION DE SALLES À ORSAY</legend>
					<p class="text-justify">Tous les grands événements sont liés à des lieux d'émotions exceptionnels... Au travers des salles Parisiennes remarquables, votre événement prendra toute sa grandeur.
					Pour un séminaire, un banquet, un anniversaire, un mariage, une conférence, un défilé ou tout autre événement professionel, vous trouverez dans ces salles, des ambiances différentes (loft New-Yorkais, au bord l'eau, cabaret ...) , il ne vous reste plus qu'à choisir l'ambiance qui correspond le plus à votre événement. Salles atypiques à Orsay pour des événements réussis : Pour organiser des événements réussis et inoubliables, qu’ils soient professionnels ou privés, Lieux d’émotions met à votre disposition les salles des plus prestigieuses à Orsay.
					</p>
				</div>
			</section>
			<br>
			<br>
		<div id="my_carousel" class="carousel slide" data-ride="carousel">
		<!-- Bulles -->
		<ol class="carousel-indicators">
			<li data-target="#my_carousel" data-slide-to="0" class="active"></li>
			<li data-target="#my_carousel" data-slide-to="1"></li>
			<li data-target="#my_carousel" data-slide-to="2"></li>
		</ol>
		<!-- Slides -->
		<div class="carousel-inner">
			<!-- Page 1 -->
			<div class="item active">  
				<div class="carousel-page">
					<img src="images/images19.jpg" class="img-responsive" style="margin:0px auto;" />
				</div> 
				<div class="carousel-caption">Salle 1</div>
			</div>   
			<!-- Page 2 -->
			<div class="item"> 
				<div class="carousel-page"><img src="images/images21.jpg" class="img-responsive img-rounded" 
				style="margin:0px auto;"  /></div> 
				<div class="carousel-caption">Salle 2</div>
			</div>  
			<!-- Page 3 -->
			<div class="item">  
				<div class="carousel-page">
					<img src="images/images23.jpg" class="img-responsive img-rounded" 
					style="margin:0px auto;"  />
				</div>  
				<div class="carousel-caption">Salle 3</div>
			</div>     
			</div>
			<!-- Contrôles -->
			<a class="left carousel-control" href="#my_carousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#my_carousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
			</div>


		</div>
		
@endsection