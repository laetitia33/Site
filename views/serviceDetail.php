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

	
		<!--fenetre de confirmation-->
		<link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

		<!--slideshow-->
		<link rel="stylesheet" type="text/css" href="assets/js/pageSites/css/animate.css" />
		<link rel="stylesheet" type="text/css" href="assets/js/pageSites/css/mockup4.css" />
		<script src="assets/js/pageSites/js/modernizr.custom.js"></script>

		<!--presentation sites-->
		<link rel="stylesheet" id="fontawesome-css" href="assets/js/presentation/font-awesome.css" type="text/css" media="all">
		<link rel="stylesheet" id="prettyPhoto-css" href="https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/css/prettyPhoto.css" type="text/css" media="all">
		<link rel="stylesheet" id="flexslider-css" href="assets/js/presentation/flexslider.css" type="text/css" media="screen">
		<link rel="stylesheet" id="mainstyle-css" href="assets/js/presentation/slider.css" type="text/css" media="all">
		<link rel="stylesheet" type="text/css" href="assets/js/presentation/360player.css"/>
		<link rel="stylesheet" type="text/css" href="assets/js/presentation/360player-visualization.css"/>

		<script type="text/javascript" src="https://unpkg.com/default-passive-events"></script>
		
		<!--tooltip-->
		<link rel="stylesheet" type="text/css" href="assets/js/tooltipLogin/component.css" />

		<title><?= isset($title) ? $title : 'Création de sites internet';?></title>
	</head>


<body>
		<div id="container" class="container intro-effect-sliced">
			<!-- Top Navigation -->
		<!-- background etoiles animées-->																		
		  	<div id='stars'></div>
  			<div id='stars2'></div>
  			<div id='stars3'></div>


			<header class="header">					
				<div class="bg-img"><img src="assets/images/creation3.jpg" alt="Background Image" /></div>
				<div class="title">
					<nav class="codrops-demos">
						<a href="index.php">Accueil</a>
						<a href="#réalisés">Projets réalisés</a>
						<a href="index.php?action=email" target="_blank">Me contacter</a>
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
					<p>Tous les sites sont conçus en responsive design de manière a pouvoir les lire sur tous suports. smartphones, tablettes, tv,pc</p><br><br><br>
				</div>
				<div class="bg-img"><img src="assets/images/creation3.jpg" alt="Background Image" /></div>
			</header>
			
			<button data-info="Entrer"  class="trigger " ><span ></span></button>
			<a href='index.php'>Retour à l'accueil du site</a>

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

		
				<h2 id='réalisés'><hr>Liste des projets réalisés</h2><hr>


			</article>

<?php  include_once 'assets/js/presentation/presentation.php' ?>
			<!--background animé-->
		<div id="large-header" class="large-header" >     
		  <canvas id="demo-canvas"></canvas>
		

		</div>	
		
		<a href="#" class="scroll-to"><i class="fa fa-chevron-up"></i></a>
		<?php  include_once 'views/include/footer.php' ?>
		</div><!-- /container -->
		
 

				<div class="regle">Règle</div>
				<script src ="assets/js/classie.js"></script>
				<script src ="assets/js/pageSites/script2.js"></script>
				<script src="assets/js/cookiechoices.js"></script>
							<script src="assets/js/background/js/TweenLite.min.js"></script>
				<script src="assets/js/background/js/EasePack.min.js"></script>
				<script src="assets/js/background/js/rAF.js"></script>
				<script src="assets/js/background/js/demo-1.js"></script>
				<script>document.addEventListener('DOMContentLoaded', function(event){cookieChoices.showCookieConsentBar('Ce site utilise des cookies pour vous offrir le meilleur service. En poursuivant votre navigation, vous acceptez l’utilisation des cookies.', 'J’accepte', 'En savoir plus', 'http://www.example.com/mentions-legales/');});</script>

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

			<!--presentation site-->	
			<script src="assets/js/tooltipLogin/anime.min.js"></script>
			<script src="assets/js/tooltipLogin/charming.min.js"></script>
			<script src="assets/js/tooltipLogin/main.js"></script>		
			<script type="text/javascript" src="assets/js/presentation/jquery.js"></script>
			<script type="text/javascript" src="assets/js/presentation/jquery-migrate.min.js"></script>
			<script type="text/javascript" src="assets/js/presentation/modernizr.custom.79639.js"></script>
			<script type="text/javascript" src="assets/js/presentation/jquery.prettyPhoto.js"></script>
			<script type="text/javascript" src="assets/js/presentation/all-functions.js"></script>
			<script type="text/javascript" src="assets/js/presentation/classList.js"></script>
			<script type="text/javascript" src="assets/js/presentation/bespoke.js"></script>
			<script type="text/javascript" src="assets/js/presentation/jquery.flexslider.js"></script>
			<script>jQuery(document).ready(function ($){scrollinit("carousel", 3, 1, true, true, true, true, false);});</script>
			<script>
jQuery(document).ready(function($){
	'use strict';
	var themes,
		selectedThemeIndex,
		instructionsTimeout,
		deck;
	window.scrollinit = function(){
		deck = bespoke.from('article');
		initThemeSwitching();
	};
	scrollinit();
	function initThemeSwitching() {
		themes = [
			'classic',
			'cube',
			'carousel',
			'concave',
			'coverflow',
			'spiraltop',
			'spiralbottom',
			'classictilt'
		];
		selectedThemeIndex = 0;
		if(window.lastslide !==''){
			deck.slide(window.lastslide-1);
		}else{
			deck.slide(0);
		}
		if(window.openfirst !== 1){
			deck.slide(0);
			window.openfirst = 1
		}
		initInstructions();
		initKeys();
		initButtons();
		initSlideGestures();
		initClickInactive();
		var whichtehem = "2";
		//If browser doesn't support trasnforms3d swich scroll effect to classic
		//==================================================
		if(Modernizr.csstransforms3d === false){
			$('body').addClass("classic");
		}
	}
	//Display wellcome buble (use cookie to show only once
	//==================================================
	function initInstructions() {
		if (isTouch()) {
			$('body').addClass('forios');
		}
		function setCookie(c_name,value,exdays){
			var exdate=new Date();
			exdate.setDate(exdate.getDate() + exdays);
			var c_value=escape(value) + ((exdays===null) ? "" : "; expires="+exdate.toUTCString());
			document.cookie=c_name + "=" + c_value;
		}	
		function getCookie(c_name){
			var c_value = document.cookie;
			var c_start = c_value.indexOf(" " + c_name + "=");
			if (c_start === -1){
				c_start = c_value.indexOf(c_name + "=");
			}
			if (c_start === -1){
				c_value = null;
			}else{
				c_start = c_value.indexOf("=", c_start) + 1;
				var c_end = c_value.indexOf(";", c_start);
				if (c_end === -1){
					c_end = c_value.length;
				}
				c_value = unescape(c_value.substring(c_start,c_end));
			}
			return c_value;
		}
		function checkCookie(){
			window.bopen = 2;
			var bubleopen = Number(getCookie("storyline"));
			if(bubleopen !== 1){
				$(window).bind("load", function() {
					window.bopen = 1;
					$("#ss-container").unbind("mousewheel DOMMouseScroll");
					instructionsTimeout=setTimeout(showInstructions, 2000);
				});
			}
		}			checkCookie();
		setCookie('storyline','1', 1);	
			}
	//Small bottom navigation
	//==================================================
	function initButtons() {
		document.getElementById('enter-arrow').addEventListener('click', function(){
			var storyId = $('.bespoke-active a.read-more-init').attr('href');
			selectactive(storyId)
		});
		document.getElementById('back-arrow').addEventListener('click', function(){deck.slide(0)});
		document.getElementById('next-arrow').addEventListener('click', gonext);
		document.getElementById('prev-arrow').addEventListener('click', deck.prev);

	}
	function gonext(){
		deck.next();
		var n = $("section").length;
		$('section').each(function(){
			if( $(this).hasClass('bespoke-active') && Number($(this).attr('rel'))+1 ===n){
								if(window.initajax() !== false){
					document.removeEventListener('keydown', gokb);
					document.getElementById('next-arrow').removeEventListener('click', gonext);
				}
							}
		});
	};
	//Keyboard navigation
	//==================================================
	function initKeys(e) {
		document.getElementById('next-arrow').removeEventListener('click', gonext);
		
		
		if (/Firefox/.test(navigator.userAgent)) {
			document.addEventListener('keydown', function(e) {
				if (e.which >= 37 && e.which <= 40) {
					e.preventDefault();
				}
			});
		}
		window.gokb = function(e) {
			
			if(window.bopen === 1){
				hideInstructions();	
				window.bopen = 2;
			}
			var key = e.which;
			if(key == 13 ){
				window.issearch = 0
			 $("#searchform").submit(function(e){ window.issearch = 1})
				var storyId = $('.bespoke-active a.read-more-init').attr('href');
				selectactive(storyId);
			}
			if(key === 37){
				deck.prev();
			}
			if(key === 32 || key === 39){
				deck.next();
			}
			if(key === 38){
				if(Modernizr.csstransforms3d !== false){
				prevTheme();
				}
			}
			if(key === 40){
				if(Modernizr.csstransforms3d !== false){
				nextTheme();
				}
			}
			
			var n = $("section").length;
			$('section').each(function(){
				if( $(this).hasClass('bespoke-active') && Number($(this).attr('rel'))+1 ===n){
											if(window.initajax() !== false){
							document.removeEventListener('keydown', gokb);
						}
										}
				});
			};
		document.addEventListener('keydown', gokb);
	}
	//Animate post on read more click
	//==================================================
	function selectactive(storyId){
		//alert(storyId)
		var contentholder = document.getElementsByClassName("bespoke-active")[0];
		var allholder = document.getElementsByClassName("bespoke-parent")[0];
					allholder.style.opacity -= 0.1;
			document.body.style.opacity -= 0.1;
			move(contentholder)
				.rotate(10)
				.scale(6)
				.duration('0.4s')
				.end(function(){
					if(window.issearch != 1){
						window.open(storyId, '_self');
					}
				});	}
	
	function extractDelta(e) {
		if (e.wheelDelta) {
			return e.wheelDelta;
		}
		if (e.originalEvent.detail) {
			return e.originalEvent.detail* -40;
		}
		if (e.originalEvent && e.originalEvent.wheelDelta) {
			return e.originalEvent.wheelDelta;
		}
	}

	//Navigation for touch devices
	//==================================================
	function initSlideGestures() {
		var start = 0;
		var main = document.getElementById('main'),
			startPosition,
			delta,
			
			singleTouch = function(fn, preventDefault) {
				return function(e) {
					if(e.touches.length === 1){
						fn(e.touches[0].pageX);
					}
				};
			},
			touchstart = singleTouch(function(position) {
				startPosition = position;
				delta = 0;
					start = 0;
					main.addEventListener('touchend', touchend); 
			}),

			touchmove = singleTouch(function(position) {
				delta = position - startPosition;
			}, true),
			
			touchend = function() {		
			if(jQuery(document).width() < 530){
					if(jQuery(window).scrollTop() > jQuery(document).height() - jQuery(window).height()-80){
												if(window.initajax() === false){
							main.addEventListener('touchstart', touchstart);
							main.addEventListener('touchmove', touchmove);
							main.addEventListener('touchend', touchend);
						}else{
							main.removeEventListener('touchstart', touchstart);
							main.removeEventListener('touchmove', touchmove);
							main.removeEventListener('touchend', touchend);
						}
											}
				}	
				if (Math.abs(delta) < 50) {
					return;
				}
				if(delta > 0){
					deck.prev();
				}else{
					deck.next();
				}
				var n = $("section").length;
						
				$('section').each(function(){
					
					if( $(this).hasClass('bespoke-active') && Number($(this).attr('rel'))+1 ===n && jQuery(document).width() > 530){
												if(window.initajax() === false){
							main.addEventListener('touchstart', touchstart);
							main.addEventListener('touchmove', touchmove);
							main.addEventListener('touchend', touchend);
						}else{
							main.removeEventListener('touchstart', touchstart);
							main.removeEventListener('touchmove', touchmove);
							main.removeEventListener('touchend', touchend);
						}
											}
				});
				
			};
		window.remvoetuch = function(){
			main.removeEventListener('touchstart', touchstart);
			main.removeEventListener('touchmove', touchmove);
			main.removeEventListener('touchend', touchend);
		};
		window.addtuch = function(){
			main.addEventListener('touchstart', touchstart);
			main.addEventListener('touchmove', touchmove);
			main.addEventListener('touchend', touchend);
		};
		window.addtuch();
	}
	function selectTheme(index) {
		var theme = themes[index];
		var blackbody = 'blackbody';
		document.body.className = theme  ;
		selectedThemeIndex = index;
	}

	function nextTheme() {
		offsetSelectedTheme(1);
		if (window.bopen === 1){
			hideInstructions();	
			window.bopen = 2;
		}
	}
	function prevTheme() {
		offsetSelectedTheme(-1);
		if (window.bopen === 1){
			hideInstructions();	
			window.bopen = 2;
		}
	}

	function offsetSelectedTheme(n) {
		selectTheme(modulo(selectedThemeIndex + n, themes.length));
	}
	//Show hide wellcome bubble
	//==================================================
	function showInstructions() {
		$('section').addClass('addblur');
		$('.addbg').addClass('addbgv');
		$('.addbg').click(function() {
			if(window.bopen === 1){
				hideInstructions();	
				window.bopen = 2;
			}
			
			$(this).unbind("click");
		});
		document.querySelectorAll('header p')[0].className = 'visible animated fadeInUp';
	}
	function hideInstructions() {
		window.gomouse();
		$('section').removeClass('addblur');
		$('.addbg').removeClass('addbgv');
		clearTimeout(instructionsTimeout);
		document.querySelectorAll('header p')[0].className = 'hidden';
	}

	function isTouch() {
		return !!('ontouchstart' in window) || navigator.msMaxTouchPoints;
	}

	function modulo(num, n) {
		return ((num % n) + n) % n;
	}
	//Mouse click navigation
	//==================================================
	function initClickInactive(){
		$("section").unbind("click");
		var main = document.getElementById('main');
		var n = $("section").length;
		window.lastslide = n;
		$('section').click(function() {
			var page = $(this).attr('rel');
			var count = Number(page)+1;
			if( $(this).hasClass('bespoke-inactive') ){
				if(count === n){
										if(window.initajax() === false){
						document.addEventListener('keydown', gokb);
						window.remvoetuch();
						initSlideGestures();
					}else{
						document.removeEventListener('keydown', gokb);
						window.remvoetuch();
					}
									}
			deck.slide(page);
			
			}
			
		});
	}
                                 
            window.startparallax = function(){
				//jQuery('#articlehold').parallax();
                
                var $scene = $('#articlehold').parallax();
               /// $scene.parallax('enable');
               // $scene.parallax('disable');
              //  $scene.parallax('updateLayers');
				
			}
			setTimeout(window.startparallax,400);	
	//Animate post on read more click
	//==================================================
	var contentholder = document.getElementsByClassName("bespoke-active");
		var allholder = document.getElementsByClassName("bespoke-parent");
	function animate(){
		'use strict';
		
		$('a.read-more-init').click(function () {
			
			var storyId = $(this).attr('href');
			selectactive(storyId);
			return false;
		});   
		function selectactive(storyId){
	
			allholder[0].style.opacity -= 0.1;
			document.body.style.opacity -= 0.1;
			move(contentholder[0])
				.rotate(10)
				.scale(6)
				.duration('0.4s')
				.end(function(){
					window.open(storyId, '_self');
			});
		}
		
		
	} 		animate();
		if(Modernizr.csstransforms3d !== false){
		var contentholder2 = document.getElementsByClassName("go-anim");
		if(contentholder2.length > 0){
			for(var i = 0, j=contentholder2.length; i<j; i++){
				contentholder2[i].addEventListener("mouseover", function(){
					var holdertoanimate = this.getElementsByClassName("container-border")[0];	
					var ribbon = this.getElementsByClassName("ribbon")[0];	
					
					if(holdertoanimate){						   
						move(this)
							.set('margin-top', -20)
							.duration('0.7s')
							.end();
						if(ribbon){
							move(ribbon)
								.set('margin-top', -15)
								.duration('0.7s')
								.end();
						}
					}else{					   
						move(this)
							.set('margin-top', -20)
							.duration('0.7s')
							.end();
					}
				});
				contentholder2[i].addEventListener("mouseout", function(){
					var holdertoanimate = this.getElementsByClassName("container-border")[0];
					var ribbon = this.getElementsByClassName("ribbon")[0];	
					if(holdertoanimate){						   
						 move(this)
							.set('margin-top', 0)
							.duration('0.7s')
							.end();
						if(ribbon){
							move(ribbon)
								.set('margin-top', -0)
								.duration('0.7s')
								.end();
						}
					}else{
						move(this)
							.set('margin-top', 0)
							.duration('0.7s')
							.end();
					}
				});
			}
		}
	}
	
});
</script>
	
</body>
			
</html>