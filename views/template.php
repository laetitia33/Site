
<!DOCTYPE html>
<html lang="fr" class='template' id='template'>
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
				
				<!---accessibilité regle et calculatrice-->
				<div class='calculatriceContainer'>
						
						<div class="calc-body">	
							<a id='stopCalculatrice'>X</a>
							<div class="display">
								<p class="result"></p>
								<p class="string"></p>			
							</div>
							<div class="keys">
							<button type="button" class="non-digit" name="clear">C</button>
							<button type="button" class="non-digit" name="back">Back</button>			
							<button type="button" class="non-digit append" name="append">AP</button>
							<button type="button" class="non-digit" value="+/-" name="swneg">&#177;</button>
							<button type="button" class="non-digit" name="square-root">&radic;</button>			
							<input type="button" class="non-digit" value="(">
							<input type="button" class="non-digit" value=")">
							<input type="button" value="/" class="non-digit">
								<input type="button" value="7" name="nr7">
								<input type="button" value="8">
								<input type="button" value="9">
								<input type="button" value="*" class="non-digit">
								<input type="button" value="4">
								<input type="button" value="5">
								<input type="button" value="6">
								<input type="button" value="-" class="non-digit">
								<input type="button" value="1">
								<input type="button" value="2">
								<input type="button" value="3">
								<input type="button" value="+" class="non-digit">
								<input class="zero" type="button" value="0">
								<input type="button" value="." name=".">
								<button type="button" value="=" name="equal" class="equal">=</button>
						</div>	
					</div>
					</div>
				<div class="regle"><a id='stop'>X</a>Règle</div>
			</div>
			<script src ="assets/js/script.js"></script>
			<script src ="assets/js/tinymce/placeholder.js"></script>
			<script src ="assets/js/tinymce/placeholder.min.js"></script>
			<script src="assets/js/pagination.js"></script>
			<script src="assets/js/form.js"></script>
			<script type="text/javascript" src="assets/js/sliderAccueil/engine1/wowslider.js"></script>
			<script type="text/javascript" src="assets/js/sliderAccueil/engine1/script.js"></script>
			<script src="assets/js/cookiechoices.js"></script>
			<script src="assets/js/classie.js"></script>
			<script src="assets/js/velocity.min.js"></script>
			<script src="assets/js/main.js"></script> <!-- Resource jQuery -->
			<script src="assets/js/tooltipLogin/anime.min.js"></script>
			<script src="assets/js/tooltipLogin/charming.min.js"></script>
			<script src="assets/js/tooltipLogin/main.js"></script>
			<script src="assets/js/animateButton/js/main.js"></script>

			<script>document.addEventListener('DOMContentLoaded', function(event){cookieChoices.showCookieConsentBar('Ce site utilise des cookies pour vous offrir le meilleur service. En poursuivant votre navigation, vous acceptez l’utilisation des cookies.', 'J’accepte', 'En savoir plus', 'http://www.example.com/mentions-legales/');});</script>

 			</div>
		</div>
		
	</body>
</html>