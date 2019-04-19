<?php $title =  'Création de sites internet'; ?>


<!DOCTYPE html>
<html lang="fr" class='template'>
		<head>
		<meta charset="utf-8">
		<!-- feuille de style-->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">

		<meta name="description" content="Assitance informatique,Conseil,Conception de sites,Formation !">
		<meta name="viewport" content="width=device-width initial-scale=1">
		<meta property="og:url" content="https://cinecinemadeparis.000webhostapp.com"/>
		<meta property="og:title" content="Assistance informatique"/>
		<meta property="og:type" content="website">
		<meta property="og:image" content="assets/images/icone.png">
		<meta name="Language" CONTENT="fr" />
		
		<!--- police -->
		<link href='http://fonts.googleapis.com/css?family=Questrial|Droid+Sans|Alice|Rancho|Roboto|Niconne|Marck+Script' rel='stylesheet' type='text/css'>
	
		<!--- font awesome-icones -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

		<!-- icone-->
		<link href="assets/images/icone.png" rel="icon" type="image/x-icon" />
		
		<!--jquery-->
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

		<!--jquery-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
		

		<title><?= isset($title) ? $title : 'Création de sites internet';?></title>
	</head>
	

	<body>

			<div id="content">
				<div id="blocpage">	
					<a id="films"></a>

				




				<a href="#" id="btntop"class="scroll-to"><i class="fa fa-chevron-up"></i></a>

				<?php  include_once 'views/include/footer.php' ?>

			<script src ="assets/js/script.js"></script>
			<script src="assets/js/cookiechoices.js"></script>
			<script src="assets/js/classie.js"></script>
			<script src="assets/js/jquery-2.1.1.js"></script>
			<script src="assets/js/velocity.min.js"></script>
			<script src="assets/js/main.js"></script> <!-- Resource jQuery -->
	

			<script>document.addEventListener('DOMContentLoaded', function(event){cookieChoices.showCookieConsentBar('Ce site utilise des cookies pour vous offrir le meilleur service. En poursuivant votre navigation, vous acceptez l’utilisation des cookies.', 'J’accepte', 'En savoir plus', 'http://www.example.com/mentions-legales/');});</script>
 			</div>
		</div>
	</body>
</html>