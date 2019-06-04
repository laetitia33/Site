
<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> 

<html lang="fr" class='template'>

	<?php include_once 'views/include/head.php';?>

	<body>
		<?php include_once 'views/include/background4.php'; ?>
		<header>
			<?php include_once 'views/include/menu.php'; ?>
			<?php  include_once 'views/include/menu_responsive.php'; ?>
		</header>
	<div class="content-wrap">
		<div class="content">
			<div id="content">
				<div id="blocpage">	
					<a id="films"></a>
				<section>				
					<?= $content ?>
				</section>
				<a href="#" class="scroll-to"><i class="fa fa-chevron-up"></i></a>
				<?php  include_once 'views/include/footer.php' ?>
				</div>

			</div>
		
 			</div>
		</div>
		
			<!-- javascript-->
			
			<script src ="assets/js/script.js"></script>
			<script src ="assets/js/tinymce/placeholder.js"></script>
			<script src ="assets/js/tinymce/placeholder.min.js"></script>
			<script src="assets/js/pagination.js"></script>
			<script src="assets/js/form.js"></script>
			<script src="assets/js/sliderAccueil/engine1/wowslider.js"></script>
			<script src="assets/js/sliderAccueil/engine1/script.js"></script>
			<script src="assets/js/classie.js"></script>
			<script src="assets/js/velocity.min.js"></script>
			<script src="assets/js/main.js"></script> <!-- Resource jQuery -->
			<script src="assets/js/tooltipLogin/anime.min.js"></script>
			<script src="assets/js/tooltipLogin/charming.min.js"></script>
			<script src="assets/js/tooltipLogin/main.js"></script>
			<script src="assets/js/animateButton/js/main.js"></script>

     		<script src="assets/js/cookiechoices.js"></script>        
        	<script src="www.info-lumiti.com/cookiechoices.js"></script>
        	<script>document.addEventListener('DOMContentLoaded', function(event){cookieChoices.showCookieConsentBar('Ce site utilise des cookies pour vous offrir le meilleur service. En poursuivant votre navigation, vous acceptez l’utilisation des cookies.', 'J’accepte', 'En savoir plus', 'www.info-lumiti.com');});</script>
			<!--zoom image-->


	</body>
</html>