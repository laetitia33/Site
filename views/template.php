
<!DOCTYPE html>
<html lang="fr" class='template'>
	<?php include_once 'views/include/head.php';?>

	<body>

		<header>
			<?php include_once 'views/include/menu.php'; ?>
			<?php  include_once 'views/include/menu_responsive.php'; ?>
		</header>

			<div id="content">
				<div id="blocpage">	
					<a id="films"></a>
				<section>				
					<?= $content ?>
				</section>

				<a href="#" id="btntop"class="scroll-to"><i class="fa fa-chevron-up"></i></a>

				<?php  include_once 'views/include/footer.php' ?>

				<script src ="assets/js/script.js"></script>
				<script src ="assets/js/tinymce/placeholder.js"></script>
				<script src ="assets/js/tinymce/placeholder.min.js"></script>
				<script src="assets/js/pagination.js"></script>
				<script src="assets/js/form.js"></script>
				<script type="text/javascript" src="assets/js/sliderAccueil/engine1/wowslider.js"></script>
				<script type="text/javascript" src="assets/js/sliderAccueil/engine1/script.js"></script>
				<script src="assets/js/cookiechoices.js"></script>
				<script src="assets/js/classie.js"></script>
				<script>document.addEventListener('DOMContentLoaded', function(event){cookieChoices.showCookieConsentBar('Ce site utilise des cookies pour vous offrir le meilleur service. En poursuivant votre navigation, vous acceptez l’utilisation des cookies.', 'J’accepte', 'En savoir plus', 'http://www.example.com/mentions-legales/');});</script>
 			</div>
		</div>
	</body>
</html>