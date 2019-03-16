
<?php $title = 'Informatique la Teste De Buch,liste des services'; ?>



<!--///////////////////////// slider///////////////////////////////////////////////////-->


<?php ob_start(); ?>

	<div class= "welcome">
		<h1>Bienvenue 
		<?php 
			if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1 OR isset($_SESSION['id']) && $_SESSION['id_group'] == 2 )   : 
				echo ''.$_SESSION['pseudo'] . ' !' ;
			endif ;?></h1>
	</div>


<?php
		if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1) : ?>
			<p class = "publishDate">  <i class="fas fa-laptop"></i> Bonjour, <?php
			setlocale(LC_TIME, 'fr_FR.utf8','fra');
			echo "Nous sommes le ".strftime("%d %B %Y");?> ,Verifiez la liste des services  <i class="fas fa-laptop"></i>       		
			</p>
			<?php
		
		else
		: ?>

			<p class = "publishDate"> <i class="fas fa-laptop"></i> Bonjour ,<?php
			setlocale(LC_TIME, 'fr_FR.utf8','fra');
			echo "Nous sommes le ".strftime("%d %B %Y");?> , Veuillez parcourir la liste des services   <i class="fas fa-laptop"></i>         		
			</p>
			  <?php
         endif;
         ?>



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
							if ($data['nbCommentaires'] > 0) : ?>
							<p class ="nbcom"><?= htmlspecialchars($data['nbCommentaires'])?> avis <i class="far fa-comment"></i></p>
							 <?php
				            
				           	else : ?>
				           	<p class ="nbcom">Aucun avis</p>
				           	<?php
				            endif;
				            ?>
						<a href="index.php?action=post&amp;post_id=<?= $data['id']; ?>#com"><em><i class="fas fa-pencil-alt"> Ajouter un Avis</i></em></a><br>

					
													 	
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