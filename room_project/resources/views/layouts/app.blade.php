<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ url('/') }}./calendrier/fullcalendar.css" type="text/css"/>
    <link rel="stylesheet" href="{{ url('/') }}./calendrier/fullcalendar.print.css" type="text/css"/> 

    <script src="{{ url('/') }}./calendrier/lib/jquery.min.js"></script>
    <script src="{{ url('/') }}./calendrier/lib/moment.min.js"></script>
    
    <script src="{{ url('/') }}./calendrier/fullcalendar.min.js"></script>
    <script src="{{ url('/') }}./calendrier/lang/fr.js"></script>
<script>

$(document).ready(function() {

    $('#calendar').fullCalendar({
        //defaultDate: '2016-01-03',
        lang: 'fr',
        editable: false,
        eventLimit: true, // allow "more" link when too many events
        events: [{"id":"1","title":"RandoTest","start":"2016-01-22T15:45:00","level":"2","heure":"15:45:00","nbPlaces":"5","encadrant":"patrick","color":"red"},{"id":"17","title":"Rando","start":"2016-01-13T20:03:00","level":"1","heure":"20:03:00","nbPlaces":"15","encadrant":"patrick","color":"blue"},{"id":"18","title":"FAT","start":"2016-02-07T00:00:14","level":"0","heure":"00:00:14","nbPlaces":"8","encadrant":"patrick","color":"green"}],
        eventClick: function(event) {
            window.open("http://fatbike-resa.com/ResaFatBike/controller/affSortie.php?id=" + event.id);
            return false;
        }
    });
});
        
</script>
<style>

    body {
        margin: 0px 0px;
        padding: 0;
        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
        font-size: 14px;
    }

    #calendar {
        max-width: 800px;
        margin: 0 auto;
    }
</style>

    <title>Mairie</title> 
    

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

   
    @yield('head')
    </head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand">
                   <strong> Mairie d'Orsay </strong>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li @yield('accueil')><a href="{{ url('/accueil') }}">Accueil</a></li>
					<li @yield('client_consulter_salles')><a href="{{ url('/client_consulter_salles') }}">Consulter les salles</a></li>
                    @if (!Auth::guest())
					   <li @yield('client_mon_compte')><a href="{{ url('/client_mon_compte') }}">Mon compte</a></li>
					   <li @yield('client_mes_reservations')><a href="{{ url('/client_mes_reservations') }}">Mes reservations</a></li>
                    @endif
                    <li @yield('a_propos')><a href="{{ url('/a_propos') }}">A propos</a></li>
                    <li @yield('contact')><a href="{{ url('/contact') }}">Contact</a></li>
                    @if(session('statut') == '2' || session('statut') == '1') 
                    <li @yield('agenda')><a href="{{ url('/agenda') }}">Agenda</a></li>
                    <li @yield('etat_des_lieux')><a href="{{ url('/etat_des_lieux') }}">Etats des lieux</a></li>
                    @endif
                    @if(session('statut') == '1')
                    <li @yield('contact')><a href="{{ url('/Administration') }}">Administration</a></li>
					@endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li @yield('connexion')><a href="{{ url('/login') }}">Connexion</a></li>
                        <li @yield('inscription')><a href="{{ url('/register') }}">Inscription</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->nom }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Déconnection</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
