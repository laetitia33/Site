<?php $title =  htmlspecialchars($post['title']) . ''; ?>


<!--///////////////////////// phrase d'accueil///////////////////////////////////////////////////-->






<!--//////////////lien retour page précédente selon si visiteur ou admin//////////////////-->
<?php ob_start(); ?>

<div id="volet_clos">
	<div id="volet">
		<p>Par téléphone au <br> <i class="fas fa-phone-volume"></i><a href="tel:+0659982720"> 06 59 98 27 20 </a><br>du lundi au samedi de 8h à 19h <br>sans interruption  ou par <br><i class="fas fa-envelope"></i> <a href="index.php?action=email">E-mail</a></p>
	<a href="#volet" class="ouvrir" aria-hidden="true">Contact </a>
	<a href="#volet_clos" class="fermer" aria-hidden="true">fermer </a>
	</div>
</div>	

<?php
		
		if($commentReport===true) : ?>
			
			 <div id="message">Ce commentaire a bien été signalé et sera vérifié par l'administrateur</div>
		
		<?php
        endif;?>
                    
     
		<?php
			if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1): ?>
			<p><a class="news" href="index.php#adminView"><i class="fas fa-arrow-left">
			Retour à votre tableau de bord</i></a></p>
		 	<?php
            
           	else : ?>

			<p><a class="news" href="index.php#welcome"><i class="fas fa-arrow-left">
			Retour à la liste des services</i></a></p>
			  <?php
            endif;
            ?>

<!---///////affichage de l'auteur , de modification ou suppression du service  admin////-->
  
		<div class ="oneServDetail">
			<h2><?= htmlspecialchars($post['title']) ?></h2>	
			<div id="affiche2"><?php echo "<img alt='affiche du service src='".$post['image']."' />";?></div>

			<?php
			if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1): ?>
				<div class='adminCtrl'>
					<a href="index.php?action=adminUpdatePost&amp;post_id=<?= $post['id']; ?>#modif"><em><i class="fas fa-pen-square"> Modifier ce service</i></em></a>
				</div>

				<div class='adminCtrl'>
               		<a href="index.php?action=deletePost&amp;post_id=<?= $post['id']; ?>" OnClick="return confirm('Voulez-vous vraiment supprimer ce service ?');"><em><i class="fas fa-trash-alt"> Supprimer ce service</i></em></a>
               	</div>

 			<?php
        	
       		else : ?>
			
				  <?php
            endif;
            ?>

			<div class="news" >	
				<p><?= htmlspecialchars_decode(nl2br(html_entity_decode($post['content'])));?>	
			</div>
		
	
			<p>Article écrit par <a href="index.php?action=information"><?= $post['author'] ?></a>
			le <?= $post['date_creation_fr'] ?></p>
	
		</div>


<!--/////////////////////////-écrire commentaires admin ou utilisateur //////////////////////////-->

<?php 
if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1 OR isset($_SESSION['id']) && $_SESSION['id_group'] == 2 ): ?> 

		<h2><i class="far fa-comments"></i> Laissez un Commentaire</h2>
		<form class= 'form' action="index.php?action=addComment&amp;post_id=<?= $_GET['post_id'];?>#ancrecom" method="POST">
				
			<div class="inputbasic">
	            <label for='author' ></label>
	        <?php
	     	if(isset($_SESSION['pseudo'])) : ?>
	            <input type="text" name="author"  id="author" class="inputbasic" value="<?php echo htmlspecialchars($_SESSION['pseudo'])?>"/ required>
			<?php
	        	
	       	else : ?>
	       		<input type="text" name="author" class="inputbasic" id="author" placeholder="Indiquez votre nom" required/>
	       	
	       	<?php
	         endif;
	        ?>
	                
	        </div>

				<div class="inputbasic">
					<label for="comment"></label><br />
					<textarea name="comment" id="comment"  placeholder="Entrez votre commentaire"></textarea>
				</div>
				
				<div>
					<input type="submit" id="submitCom"  value="Envoyez votre commentaire" />
				</div>
		
 		</form>

	
<!--///////////////////////// boucle affichage commentaire admin ou visiteur ///////////-->
    <div class="container1">
    
    <div class="page1">
	<?php 
	while ($comment = $comments->fetch()):?>
	
				<div id="ancrecom"></div>
			
				<div class="triangle-right top">
					<a href="javascript:void(0)" class="list-group-item active"></a>
					<p><strong><i class="fas fa-user"></i>   <?= htmlspecialchars($comment['author']) ?></strong> le <?= htmlspecialchars($comment['comment_date_fr']) ?>
					</p>

					<div class="coms"> 

						<span id="confirmsignal"><p><?= nl2br(preg_replace('#^<br/>$#','',htmlspecialchars(substr($comment['comment'], 0, 400))));
						?></p></span>				
			    	</div>
				<?php
				if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1) : ?>
					<div class="reponse">     	
			     		<em><a href="index.php?action=deleteOneComment&amp;post_id=<?= $post['id'];?>&amp;id=<?= $comment['id']; ?>#ancrecom" OnClick="return confirm('Voulez-vous vraiment supprimer ce commentaire ?');"><i class="fas fa-minus-circle"> Supprimer&nbsp;&nbsp;&nbsp; </i></a></em>
			     		<em><a id='validcom' href="index.php?action=report&amp;post_id=<?= $post['id']; ?>&amp;id=<?= $comment['id']; ?>" OnClick="return confirm('Souhaitez-vous signaler ce commentaire ?')";"><i class="fas fa-bell">  Signalez un abus</i></a></em>
                                        		       			
			     	</div>
				<?php
	        	
	       		else: ?>
							
		       				<div class="reponse">				
		       				<em><a id='validcom' href="index.php?action=report&amp;post_id=<?= $post['id']; ?>&amp;id=<?= $comment['id']; ?>" OnClick="return confirm('Souhaitez-vous signaler ce commentaire ?')";"><i class="fas fa-bell">  Signalez un abus</i></a></em> 
		       				     		  
		       			</div>		       				
			    <?php
	            endif;
	            ?>

				</div>	
	
	<?php
	endwhile;?>
	</div>
	</div>
		<div>
	       <ul class="pagination1">
	        <li id="previous-page"><a href="javascript:void(1)" aria-label=Previous><span aria-hidden=true>Précédente &laquo;</span></a></li>
	      </ul>
	    </div>
	<?php $comments->closeCursor();?>



<?php 
	//sinon se connecter pour laisser un commentaire
else : ;
?>
					      							
    <em><i class="fas fa-ban"></i>  Vous devez être <a id='validcom' href="index.php?action=login">connecté </a><br>pour laisser un commentaire</em>       			
 		  
	       				
<?php 
endif; 
?>
		
<!--/////////////////////lien retour page précédente selon si visiteur ou admin///////////////////-->	

		<?php
			if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1) : ?>
				<p><a class="news" href="index.php#adminView"><i class="fas fa-arrow-left">
				Retour à votre tableau de bord</i></a></p>
		<?php
            
           	else : ?>

				<p><a class="news" href="index.php#welcome"><i class="fas fa-arrow-left">
				Retour à la liste des services</i></a></p>
		<?php
            endif;
          ?>

  <?php $content = ob_get_clean(); ?>

<!--///////////////////////////////// renvoi vers template //////////////////////////////////-->
<?php require('views/template.php'); ?>