
<?php $title = 'Informatique la Teste De Buch,liste des services'; ?>






<?php ob_start(); ?>
<!--///////////////////////// slider///////////////////////////////////////////////////-->

<div id="wowslider-container1">
	
<div class="ws_images">
	 
	<ul>
		<li><img src="assets/js/data1/images/image4.jpg" alt="Vous avez un problème en informatique ? ...," title="Vous avez un problème en informatique ? ...," id="wows1_0"/></li>
		<li><img src="assets/js/data1/images/image5.jpg" alt="..vous souhaitez créer un site ? , ..." title="..vous souhaitez créer un site ? , ..." id="wows1_1"/></li>
		<li><img src="assets/js/data1/images/image10.jpg" alt=".. Apprendre les bases de l'informatique ?.. " title=".. Apprendre les bases de l'informatique ?.. " id="wows1_2"/></li>
		<li><img src="assets/js/data1/images/image19.jpg" alt="..Réaliser un projet personnel ? " title="..Réaliser un projet personnel ? " id="wows1_4"/></li>
		<li><img src="assets/js/data1/images/image16.jpg" alt="jquery image carousel" title="dans une ambiance sereine et décontractée,  à domicile" id="wows1_3"/></a></li>
		
	</ul>
</div>
	<div class="ws_bullets"><div>
		<a href="#" title="Vous avez un problème en informatique ? ...,"><span><img src="assets/js/data1/tooltips/image4.jpg" alt="Vous avez un problème en informatique ? ...,"/>1</span></a>
		<a href="#" title="..vous souhaitez créer un site ? , ..."><span><img src="assets/js/data1/tooltips/image5.jpg" alt="..vous souhaitez créer un site ? , ..."/>2</span></a>
		<a href="#" title=".. Apprendre les bases de l'informatique ?.. "><span><img src="assets/js/data1/tooltips/image10.jpg" alt=".. Apprendre les bases de l'informatique ?.. "/>3</span></a>
		<a href="#" title="..Réaliser un projet personnel ?  "><span><img src="assets/js/data1/tooltips/image19.jpg" alt="..Réaliser un projet personnel ? "/>5</span></a>
		<a href="#" title="dans une ambiance sereine et décontractée,  à domicile"><span><img src="assets/js/data1/tooltips/image16.jpg" alt="dans une ambiance sereine et décontractée,  à domicile"/>4</span></a>
	
	</div>
</div>

<div class="ws_shadow"></div>
</div>	

<!--///////////////////////// message bienvenue////////////////////////////////////////-->
<span id="welcome"></span>
	<div class= "welcome" >
		<h1>Bienvenue 
		<?php 
			if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1 OR isset($_SESSION['id']) && $_SESSION['id_group'] == 2 )   : 
				echo ''.$_SESSION['pseudo'] . ' !' ;
			endif ;?></h1>
	</div>


<?php
		if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1) : ?>
			<p class = "publishDate">  <i class="fas fa-laptop"></i> Bonjour,<?php
			setlocale(LC_TIME, 'fr','fr_FR','fr_FR@euro','fr_FR.utf8','fr-FR','fra');
			date_default_timezone_set('Europe/Paris');
			echo "Nous sommes le ".strftime("%d %B %Y")." " ."il est ".strftime( "%H:%M") ;?> 
			,Verifiez la liste des services  <i class="fas fa-laptop"></i>       		
			</p>
			<?php
		
		else
		: ?>

			<p class = "publishDate"> <i class="fas fa-laptop"></i> Bonjour ,<?php
			setlocale(LC_TIME, 'fr','fr_FR','fr_FR@euro','fr_FR.utf8','fr-FR','fra');
			date_default_timezone_set('Europe/Paris');
			echo "Nous sommes le ".strftime("%d %B %Y")." " ."il est ".strftime( "%H:%M") ;?> , Veuillez parcourir la liste des services   <i class="fas fa-laptop"></i>         		
			</p>
			  <?php
         endif;
         ?>


<!-- ///////////////////////////message fixe contact //////////////////////////////////////////////////////-->

	<div id="volet_clos1">
		<div id="volet1">
			<p>Par téléphone au <br> <i class="fas fa-phone-volume"></i><a href="tel:+0659982720"> 06 59 98 27 20 </a><br>du lundi au samedi de 8h à 19h <br>sans interruption  ou par <br><i class="fas fa-envelope"></i> <a href="index.php?action=email">E-mail</a></p>
		<a href="#volet1" class="ouvrir1" aria-hidden="true">Contact </a>
		<a href="#volet_clos1" class="fermer1" aria-hidden="true">fermer </a>
		</div>
	</div>

<!--///////////////////////////liste services et barre de separation///////////////////////////////////////-->
<div class="container1" id="container1">
<h2 class="pageList">Services</h2>

<div class="pagetitle-separator">
	<div class="pagetitle-separator-border">
		<div class="pagetitle-separator-box"></div>
	</div>
</div>
<!--///////////// pagination ////////////////////////////////////////////////////-->

<p class ='comSignal'></p>
<div id="page">		
	<?php 
	while ($data = $posts->fetch()):?>
		
			<div class="list-group">
			
        		<a href="javascript:void(0)" class="list-group-item active"></a>
      
					<a href="index.php?action=post&amp;post_id=<?= $data['id']; ?>#news">
						<div class="service"><?php echo "<img alt ='images des services proposés' src= '".$data['image']."' />";?>								
						</div>
					</a>
					<h2><?= htmlspecialchars($data['title']) ?></h2>
					   <div class='texte'><?= htmlspecialchars_decode(nl2br(substr(html_entity_decode($data['content']), 0, 500).'....'));?></div>
					 <br>


						<a class="input_read" href="index.php?action=post&amp;post_id=<?= $data['id']; ?>#news">En savoir plus</a>
						<div class="coms">


					
													 	
					<?php 
					if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1) : ?>
				
					<a href="index.php?action=adminUpdatePost&amp;post_id=<?= $data['id']; ?>#modif"><em><i class="fas fa-pen-square"> Modifier ce service</i></em></a><br>
           			 <a href="index.php?action=deletePost&amp;post_id=<?= $data['id']; ?>#episodes" OnClick="return confirm('Voulez-vous  supprimer ce film?');"><em><i class="fas fa-trash-alt"> Supprimer ce service</i></em></a>
			
						<?php
		            endif ;?>
					</div>
		
			</div> 	
	<?php
	endwhile;?>
</div>
	
</div>
      <ul class="pagination">
        <li id="previous-page"><a href="javascript:void(1)" aria-label=Previous><span aria-hidden=true>Précédente &laquo;</span></a></li>
      </ul>
		<?php
	
		$posts->closeCursor();
		;?>
	
<?php $content = ob_get_clean(); ?>

<!--///////////////////////////////// renvoi vers template //////////////////////////////////-->
<?php require('views/template.php'); ?>