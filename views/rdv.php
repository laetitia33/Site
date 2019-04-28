<?php $title =  'Rendez-vous en ligne'; ?>

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
					
		<!--///////////////////////// rdv ou agenda admin///////////////////////-->

<?php 		
if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1 ):?>

	<h2>Mon planning</h2>
	<iframe src="https://pro.rdv360.com/agenda/laetitia-bernardi?ajx_md=1" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
	<?php

else :;?>


	<?php 
	if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1 OR isset($_SESSION['id']) && $_SESSION['id_group'] == 2 ): ?>
		
		<script type="text/javascript" src="https://www.rdv360.com/js/iframeResizer.min.js"></script><iframe id="rdv360Iframe" src="https://www.rdv360.com/laetitia-bernardi?ajx_md=1" width="100%" scrolling="no"  style="border:0px;"></iframe><script type="text/javascript">$(function(){$('#rdv360Iframe').iFrameResize();});</script>		

	<?php 
		//sinon se connecter pour prendre un rdv
	else : ;
	?>
		<br><br>				      							
	    <em><i class="fas fa-ban"></i>  Vous devez être <a id='validcom' href="index.php?action=login">connecté ou inscrit</a><br>pour prendre un rendez vous</em>       			
	 		  
		       				
	<?php 
	endif; 
	?>


<?php endif;?>
		<a href="#" class="scroll-to"><i class="fa fa-chevron-up"></i></a>
		<?php include_once 'views/include/footer.php' ?>			
	</div>	

	<script src ="assets/js/script.js"></script>
	<script src="assets/js/animateButton/js/main.js"></script>

	
</body>
</html>