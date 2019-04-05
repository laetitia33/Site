
<?php $title = 'Informatique la Teste De Buch,liste des services'; ?>

<?php ob_start(); ?>


      <header>
        <span class="ribbon-outer">
          <span class="ribbon-inner">
            <h1>Jquery Alpha Image</h1>
            <h2>This plugin can change selected colours to transparent on your image and give result as image or imagedata. This plugin works on IE9+, Chrome, Firefox, Safari.</h2>
          </span>
          <span class="left-tail"></span>
          <span class="right-tail"></span>
        </span>
      </header>

      <section id="downloads">
        <span class="inner">
          <a href="https://github.com/Sly777/Jquery-Alpha-Image/zipball/master" class="zip"><em>download</em> .ZIP</a><a href="https://github.com/Sly777/Jquery-Alpha-Image/tarball/master" class="tgz"><em>download</em> .TGZ</a>
        </span>
      </section>


      <span class="banner-fix"></span>

		<!--///////////////////////// livre///////////////////////-->


<?php 
if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1 OR isset($_SESSION['id']) && $_SESSION['id_group'] == 2 ): ?>
	
		<div>


		</div>
						
	
<?php 
	//sinon se connecter pour prendre un rdv
else : ;
?>
					      							
    <em><i class="fas fa-ban"></i>  Vous devez être <a id='validcom' href="index.php?action=login">connecté ou inscrit</a><br>pour laisser un message sur le livre d'or</em>       			
 		  
	       				
<?php 
endif; 
?>


<?php $content = ob_get_clean(); ?>

<!--///////////////////////////////// renvoi vers template //////////////////////////////////-->
<?php require('views/template.php'); ?>