<?php $title =  'Création de sites internet'; ?>




<!DOCTYPE html>
<html lang="fr" class='template'>
		<head>
		<meta charset="utf-8">
		<!-- feuille de style-->
		<link rel="stylesheet" type="text/css" href="assets/css/pageSite.css">

		<meta name="description" content="Assitance informatique,Conseil,Conception de sites,Formation !">
		<meta name="viewport" content="width=device-width initial-scale=1">
		<meta property="og:url" content="https://cinecinemadeparis.000webhostapp.com"/>
		<meta property="og:title" content="Assistance informatique"/>
		<meta property="og:type" content="website">
		<meta property="og:image" content="assets/images/icone.png">
		<meta name="Language" CONTENT="fr" />
		<link href="https://www.jqueryscript.net/css/top.css" rel="stylesheet" type="text/css">

		<!--- police -->
		<link href='http://fonts.googleapis.com/css?family=Questrial|Droid+Sans|Alice|Rancho|Roboto|Niconne|Marck+Script' rel='stylesheet' type='text/css'>
		<!--type neon nom entreprise-->
		<link href="https://uvc.one/upload/iblock/5b2/5b2a90b62e7e14ca24ec45683f4a7961.css" rel="stylesheet">

		<!--- font awesome-icones -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="fonts/font-awesome.min.css" rel="stylesheet">

		<!-- icone-->
		<link href="assets/images/icone.png" rel="icon" type="image/x-icon" />
		
		<!--jquery-->
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

   		<!--jquery horloge-->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.0.0/moment.min.js"></script>

		<!--jquery-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

		<!--Ajouter ce site aux favoris-->
		<script language="JavaScript">
		function favoris() {
			if ( navigator.appName != 'Microsoft Internet Explorer' )
			{ window.sidebar.addPanel("<a href="javascript:void(favoris());">Assitance Informatique Bassi d'Arcachon</a>","http://www.tonsite.com",""; }
			else { window.external.AddFavorite("http://www.tonsite.com","le nom du site"); } 
		</script>
		<!--fenetre de confirmation-->
		<link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

		<!--slideshow-->
		<link rel="stylesheet" type="text/css" href="assets/js/pageSites/css/animate.css" />
		<link rel="stylesheet" type="text/css" href="assets/js/pageSites/css/mockup4.css" />
		<script src="assets/js/pageSites/js/modernizr.custom.js"></script>


		<title><?= isset($title) ? $title : 'Création de sites internet';?></title>
	</head>
<body class="demo-3">
		<div id="container" class="container intro-effect-sliced">
			<!-- Top Navigation -->
		
			<header class="header">
				<div class="bg-img"><img src="assets/images/creation3.jpg" alt="Background Image" /></div>
				<div class="title">
					<nav class="codrops-demos">
						<a href="#réalisés">Projets réalisés</a>
			
					</nav>
					<h1>Création de sites internet</h1><br>
				<p class="subline">Diplomée de la 3w academie en tant que Développeuse intégratrice en réalisation d’applications web </p>
				<p><img src="assets/images/logo/3w.png" class='3w' alt="logo 3w" /></p>	
					<p class='logos'><strong>Langages utilisés :</strong><br>
					<i class="fab fa-html5 fa-3x" style="color:#E54D26;"></i>&nbsp;&nbsp;
					<img class='logoLangage' src="assets/images/logo/myadmin.png" alt="myadmin" />
					&nbsp;&nbsp;<i class="fab fa-css3-alt fa-3x"style="color:#264DE4;"></i>
					&nbsp;&nbsp;<i class="fab fa-js fa-3x"style="color:#F7DF1E;"></i>
					&nbsp;&nbsp;<i class="fab fa-php fa-3x"style="color:#787CB4;"></i>
					&nbsp;&nbsp;<i class="fab fa-wordpress fa-3x"style="color:#2C99C6;"></i>
					&nbsp;&nbsp;<i class="fab fa-github fa-3x"style="color:#14191E;"></i>
					&nbsp;&nbsp;<i class="fas fa-database fa-3x "style="color:grey;"></i>
					&nbsp;&nbsp;<img class='logoLangage' src="assets/images/logo/jquery.png" alt="jquery" /></p><br>
					<p>Tous les sites sont conçus en responsive design de manière a pouvoir les lire sur tous suports. smartphones, tablettes, tv,pc</p>
				</div>
				<div class="bg-img"><img src="assets/images/creation3.jpg" alt="Background Image" /></div>
			</header>
			
			<button data-info="Entrer"  class="trigger " ><span ></span></button>

		
			<article class="content">
				
				<!--slideshow-->
				<div><div id="wrap" class="wrap">
				<div class="mockup">
					<img class="mockup__img" src="assets/js/pageSites/img/mockup4.jpg" />
					<div class="mobile">
						<ul id="slideshow-1" class="slideshow">
							<li class="slideshow__item"><img src="assets/js/pageSites/img/small/1.png"/></li>
							<li class="slideshow__item"><img src="assets/js/pageSites/img/small/2.png"/></li>
							<li class="slideshow__item"><img src="assets/js/pageSites/img/small/3.png"/></li>
							<li class="slideshow__item"><img src="assets/js/pageSites/img/small/4.PNG"/></li>
							<li class="slideshow__item"><img src="assets/js/pageSites/img/small/5.PNG"/></li>

						</ul>
					</div>
					<div class="screen">
						<ul id="slideshow-2" class="slideshow">
							<li class="slideshow__item current"><img src="assets/js/pageSites/img/large/1.png"/></li>
							<li class="slideshow__item"><img src="assets/js/pageSites/img/large/2.png"/></li>
							<li class="slideshow__item"><img src="assets/js/pageSites/img/large/3.png"/></li>
							<li class="slideshow__item"><img src="assets/js/pageSites/img/large/4.PNG"/></li>
							<li class="slideshow__item"><img src="assets/js/pageSites/img/large/5.PNG"/></li>
						</ul>
					</div>
			
				</div>
				</div>
				<div>

					
				<h2 id='réalisés'><hr>Liste des projets réalisés</hr></h2>
		









			</article>


			
		</div><!-- /container -->

				<a href="#" class="scroll-to"><i class="fa fa-chevron-up"></i></a>
				<script src ="assets/js/classie.js"></script>
				<script src ="assets/js/script.js"></script>
				<script src="assets/js/cookiechoices.js"></script>
				<script>document.addEventListener('DOMContentLoaded', function(event){cookieChoices.showCookieConsentBar('Ce site utilise des cookies pour vous offrir le meilleur service. En poursuivant votre navigation, vous acceptez l’utilisation des cookies.', 'J’accepte', 'En savoir plus', 'http://www.example.com/mentions-legales/');});</script>

				<script src="assets/js/pageSites/js/classie.js"></script>
				<script src="assets/js/pageSites/js/main.js"></script>
			<script>
			(function() {
				new Slideshow( document.getElementById( 'slideshow-1' ) );
				setTimeout( function() {
					new Slideshow( document.getElementById( 'slideshow-2' ) );
				}, 1750 );
				/* Mockup responsiveness */
				var body = docElem = window.document.documentElement,
					wrap = document.getElementById( 'wrap' ),
					mockup = wrap.querySelector( '.mockup' ),
					mockupWidth = mockup.offsetWidth;
				scaleMockup();
				function scaleMockup() {
					var wrapWidth = wrap.offsetWidth,
						val = wrapWidth / mockupWidth;
					mockup.style.transform = 'scale3d(' + val + ', ' + val + ', 1)';
				}
				
				window.addEventListener( 'resize', resizeHandler );
				function resizeHandler() {
					function delayed() {
						resize();
						resizeTimeout = null;
					}
					if ( typeof resizeTimeout != 'undefined' ) {
						clearTimeout( resizeTimeout );
					}
					resizeTimeout = setTimeout( delayed, 50 );
				}
				function resize() {
					scaleMockup();
				}
			})();
		</script>
			<script type="text/javascript">
				//fond du titre
				$(document).ready(function(){
					  var mouseX, mouseY;
					  var ww = $( window ).width();
					  var wh = $( window ).height();
					  var traX, traY;
					  $(document).mousemove(function(e){
					    mouseX = e.pageX;
					    mouseY = e.pageY;
					    traX = ((4 * mouseX) / 570) + 40;
					    traY = ((4 * mouseY) / 570) + 50;
					    console.log(traX);
					    $(".title").css({"background-position": traX + "%" + traY + "%"});
					  });
					});
		</script>
		<script>
			(function() {
				// detect if IE : from http://stackoverflow.com/a/16657946		
				var ie = (function(){
					var undef,rv = -1; // Return value assumes failure.
					var ua = window.navigator.userAgent;
					var msie = ua.indexOf('MSIE ');
					var trident = ua.indexOf('Trident/');
					if (msie > 0) {
						// IE 10 or older => return version number
						rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
					} else if (trident > 0) {
						// IE 11 (or newer) => return version number
						var rvNum = ua.indexOf('rv:');
						rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
					}
					return ((rv > -1) ? rv : undef);
				}());
				// disable/enable scroll (mousewheel and keys) from http://stackoverflow.com/a/4770179					
				// left: 37, up: 38, right: 39, down: 40,
				// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
				var keys = [32, 37, 38, 39, 40], wheelIter = 0;
				function preventDefault(e) {
					e = e || window.event;
					if (e.preventDefault)
					e.preventDefault();
					e.returnValue = false;  
				}
				function keydown(e) {
					for (var i = keys.length; i--;) {
						if (e.keyCode === keys[i]) {
							preventDefault(e);
							return;
						}
					}
				}
				function touchmove(e) {
					preventDefault(e);
				}
				function wheel(e) {
					// for IE 
					//if( ie ) {
						//preventDefault(e);
					//}
				}
				function disable_scroll() {
					window.onmousewheel = document.onmousewheel = wheel;
					document.onkeydown = keydown;
					document.body.ontouchmove = touchmove;
				}
				function enable_scroll() {
					window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;  
				}
				var docElem = window.document.documentElement,
					scrollVal,
					isRevealed, 
					noscroll, 
					isAnimating,
					container = document.getElementById( 'container' ),
					trigger = container.querySelector( 'button.trigger' );
				function scrollY() {
					return window.pageYOffset || docElem.scrollTop;
				}
				
				function scrollPage() {
					scrollVal = scrollY();
					
					if( noscroll && !ie ) {
						if( scrollVal < 0 ) return false;
						// keep it that way
						window.scrollTo( 0, 0 );
					}
					if( classie.has( container, 'notrans' ) ) {
						classie.remove( container, 'notrans' );
						return false;
					}
					if( isAnimating ) {
						return false;
					}
					
					if( scrollVal <= 0 && isRevealed ) {
						toggle(0);
					}
					else if( scrollVal > 0 && !isRevealed ){
						toggle(1);
					}
				}
				function toggle( reveal ) {
					isAnimating = true;
					
					if( reveal ) {
						classie.add( container, 'modify' );
					}
					else {
						noscroll = true;
						disable_scroll();
						classie.remove( container, 'modify' );
					}
					// simulating the end of the transition:
					setTimeout( function() {
						isRevealed = !isRevealed;
						isAnimating = false;
						if( reveal ) {
							noscroll = false;
							enable_scroll();
						}
					}, 600 );
				}
				// refreshing the page...
				var pageScroll = scrollY();
				noscroll = pageScroll === 0;
				
				disable_scroll();
				
				if( pageScroll ) {
					isRevealed = true;
					classie.add( container, 'notrans' );
					classie.add( container, 'modify' );
				}
				
				window.addEventListener( 'scroll', scrollPage );
				trigger.addEventListener( 'click', function() { toggle( 'reveal' ); } );
			})();
		</script>

</body>
			
</html>