
<?php $title = 'Informatique la Teste De Buch,liste des services'; ?>

<?php ob_start(); ?>

<div id="volet_clos">
  <div id="volet">
    <p>Par téléphone au <br> <i class="fas fa-phone-volume"></i><a href="tel:+0659982720"> 06 59 98 27 20 </a><br>du lundi au samedi de 8h à 19h <br>sans interruption  ou par <br><i class="fas fa-envelope"></i> <a href="index.php?action=email">E-mail</a></p>
  <a href="#volet" class="ouvrir" aria-hidden="true">Contact </a>
  <a href="#volet_clos" class="fermer" aria-hidden="true">fermer </a>
  </div>
</div>  

    <!--/////////////////////////lecture livre///////////////////////-->
<div class="ribbon"><div class="glow">&nbsp;</div>
  Livre d'or
  <i></i>
  <i></i>
  <i></i>
  <i></i>
</div>
<?php
  if($commentReport===true)echo ("<script type='text/javascript' > 
 
            swal({
              title: 'Signalé!',
              text: 'Ce commentaire a bien été signalé!',
              icon: 'success'
            })</script>");
                      

?>
    
     <!--/////////////////// indique s'il y a des commentaires ////////////////////-->
<div id="ancrecom"></div><br><br>
<?php if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1): ?>        
    <?php
        if($commentsTotal['total_comments']==0):
                echo "<p> Aucun Message .<p>";
           
            ?>                
       <?php
        else : ?>
    
          <div class='listcom'><a href="index.php?action=deleteCommentsLivreGold"  class="deletecommAll" ><i class="fas fa-minus-circle"> Supprimer tous les messsages </i></a></div>

         <?php
        endif;
        ?>

<?php
    endif;
?>
 
<!--///////////////////////// boucle affichage commentaire admin ou visiteur ///////////-->

<div class="page1">    
<div class="box">
  <div class="box-shadow"></div>
    <div class="box-gradient">
      <?php 
      while ($comment = $comments->fetch()):?>     
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
                <em><a href="index.php?action=deleteCommentGold&amp;id=<?= $comment['id'];?>" class='deletecomm' >Supprimer&nbsp;<i class="fas fa-minus-circle"></i></a></em>
                <em><a href="index.php?action=report&amp;id=<?= $comment['id']; ?>" class='validcom' ;"><i class="fas fa-bell">  Signalez un abus</i></a></em>


            </div>
        <?php         
            elseif(isset($_SESSION['id']) && $_SESSION['id_group'] == 2) : ?>
              
              <div class="reponse">       
              <em><a href="index.php?action=report&amp;id=<?= $comment['id']; ?>" class='validcom'><i class="fas fa-bell">  Signalez un abus</i></a></em>
                        

                </div>                  
          <?php
          else:?>
            <?php

              endif;
              ?>

        </div>  
  
  <?php
  endwhile;?>
  
       <div>
         <ul class="pagination1">
          <li id="previous-page"><a href="javascript:void(1)" aria-label=Previous><span aria-hidden=true>Précédente &laquo;</span></a></li>
        </ul>
      </div>
    </div>
</div>
</div>
 
  <?php $comments->closeCursor();?>



<?php 



/////////////////////////-écrire commentaires admin ou utilisateur //////////////////////////-->

if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1 OR isset($_SESSION['id']) && $_SESSION['id_group'] == 2 ): ?> 

<h2><i class="far fa-comments"></i> Laissez un message sur le livre d'or</h2>
<div class="containerGold">
    <form class= 'form' action="index.php?action=addComment#ancrecom" method="POST">
        
      <div>
          <label for='author' ></label>
          <?php
        if(isset($_SESSION['pseudo'])) : ?>
            <input type="text" name="author"  id="author" class="inputLivre" value="<?php echo htmlspecialchars($_SESSION['pseudo'])?>"/ required>
      <?php
            
          else : ?>
            <input type="text" name="author" class="inputbasic" id="author" placeholder="Indiquez votre nom" required/>
          
          <?php
           endif;
          ?>
                  
        </div>

        <div class='inputbasic'>
          <label for="comment"></label><br />
          <textarea name="comment" id="comment"  placeholder="Entrez votre message"></textarea>
        </div>
        
        <div>
          <input type="submit" id="submitCom"  value="Envoyez votre message" />
        </div>
    
    </form>
</div>
  <?php
  //sinon se connecter pour laisser un message sur livre d'or
else : ;
?>
                              
    <em><i class="fas fa-ban"></i>  Vous devez être <a id='validcom' href="index.php?action=login">connecté </a><br>pour laisser un message</em><br>
      
                
<?php 
endif; 
?>
  

<?php $content = ob_get_clean(); ?>

<!--///////////////////////////////// renvoi vers template //////////////////////////////////-->
<?php require('views/template.php'); ?>