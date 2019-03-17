
<?php $title = 'Liste des cinemas';?>

<!DOCTYPE html>
<html lang="fr" class='template'>

		<?php include_once 'views/include/head.php';?>
<body>
	<div id="volet_clos">
		<div id="volet">
			<p>Par téléphone au <br> <i class="fas fa-phone-volume"></i><a href="tel:+0659982720"> 06 59 98 27 20 </a><br>du lundi au samedi de 8h à 19h <br>sans interruption  ou par <br><i class="fas fa-envelope"></i> <a href="index.php?action=email">E-mail</a></p>
		<a href="#volet" class="ouvrir" aria-hidden="true">Contact </a>
		<a href="#volet_clos" class="fermer" aria-hidden="true">fermer </a>
		</div>
	</div>
	
	<div id="blocpage">

		<header>
				<?php include_once 'views/include/menu.php'; ?>
				<?php include_once 'views/include/menu_responsive.php'; ?>
		</header>
		

			<a id="films"></a>
	 <!--////////////////////// MAP ///////////////////////////-->
		<section>		
			<h2 class ='pageList'>Salles de cinema de Paris</h2>			
		</section>


		<a href="#" id="btntop"class="scroll-to"><i class="fa fa-chevron-up"></i></a>	
		

		<div class='footerDown'>
			<?php include_once 'views/include/footer.php' ?>			
		</div>
		
	</div>

	<script src="assets/js/listeCinemas.js"></script>
	<script src ="assets/js/script.js"></script>

</body>	
</html>