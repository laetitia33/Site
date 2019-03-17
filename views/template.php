
<!DOCTYPE html>
<html lang="fr" class='template'>
	<?php include_once 'views/include/head.php';?>
<body>
	<header>
		<?php include_once 'views/include/menu.php'; ?>
		<?php  include_once 'views/include/menu_responsive.php'; ?>
	</header>

		<div id="blocpage">	
		<a id="films"></a>
	<section>				
		<?= $content ?>
	</section>
	<a href="#" id="btntop"class="scroll-to"><i class="fa fa-chevron-up"></i></a>
	
		
	</div>
	

		<?php  include_once 'views/include/footer.php' ?>	

	<script src ="assets/js/script.js"></script>
	<script src ="assets/js/tinymce/placeholder.js"></script>
	<script src ="assets/js/tinymce/placeholder.min.js"></script>
	<script src="assets/js/pagination.js"></script>
	<script src="assets/js/form.js"></script>
	<script type="text/javascript" src="assets/js/engine1/wowslider.js"></script>
	<script type="text/javascript" src="assets/js/engine1/script.js"></script>
  </body>
</html>