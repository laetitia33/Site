
<?php $title = 'Liste des cinemas';?>

<!DOCTYPE html>
<html lang="fr" class='template'>

		<?php include_once 'views/include/head.php';?>
<body>	
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