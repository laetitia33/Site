<?php $title =  'Informations pratiques'; ?>

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
	<div class ="pageInfo">
					
<!--///////////////////////// rdv///////////////////////-->

<!-- ScheduleOnce embed START -->
<div id="SOIDIV_LaetitiaBernardi" data-so-page="LaetitiaBernardi" data-height="550" data-style="border: 1px solid #87CEEB; min-width: 290px; max-width: 900px;" data-psz="00"></div>
<script type="text/javascript" src="https://cdn.oncehub.com/mergedjs/so.js"></script>
<!-- ScheduleOnce embed END -->
	</div>
			<?php include_once 'views/include/footer.php' ?>			
		
			
	</div>	
	<script src="assets/js/meteo.js"></script>
	<script src ="assets/js/script.js"></script>
	
</body>
</html>