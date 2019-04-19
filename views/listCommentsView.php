<?php $title = 'commentaires'; ?>

<?php ob_start(); ?>

<div id="volet_clos">
    <div id="volet">
        <p>Par téléphone au <br> <i class="fas fa-phone-volume"></i><a href="tel:+0659982720"> 06 59 98 27 20 </a><br>du lundi au samedi de 8h à 19h <br>sans interruption  ou par <br><i class="fas fa-envelope"></i> <a href="index.php?action=email">E-mail</a></p>
    <a href="#volet" class="ouvrir" aria-hidden="true">Contact </a>
    <a href="#volet_clos" class="fermer" aria-hidden="true">fermer </a>
    </div>
</div>


<div id="deleteCom"></div>   
<h2 class ="pageList">Commentaires</h2>

<p class="msgConfirm"></p>
<div id="blocpagecommentaires">

    <div  id="com"></div>


    <!--/////////////////// indique s'il y a des commentaires ////////////////////-->


    <?php
        if($commentsTotal['total_comments']==0):
                echo "<p> Aucun commentaire .<p>";
           
            ?>                
       <?php
        else : ?>

          <div class='listcom'><a href="index.php?action=deleteComments" class="deletecommAll"><i class="fas fa-minus-circle"> Supprimer tous les commentaires </i></a></div>

         <?php
        endif;
        ?>

    <div class="container1">
      <div>

        </div>
    <div class="page1">

    <?php

  
   

    ///////////////////////// liste des commentaires /////////////////////////
    while ($comment = $comments->fetch()):

        ?>
        <div class="triangle-right top">
            <a href="javascript:void(0)" class="list-group-item active"></a>
            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= htmlspecialchars($comment['comment_date_fr']) ?></p>
            <p><?= nl2br(preg_replace('#^<br/>$#','',htmlspecialchars(substr($comment['comment'], 0, 400))));?><br/>
                <div class="reponse">
                <em><a href="index.php?action=deleteComment&amp;id=<?= $comment['id'];?>" class='deletecomm'  >Supprimer&nbsp;<i class="fas fa-minus-circle"></i></a></em>
                </div>
            </p>
        </div>

    <?php
endwhile;?>
    </div>        
    </div>
        <ul class="pagination1">
        <li id="previous-page"><a href="javascript:void(0)" aria-label=Previous><span aria-hidden=true>Précédente &laquo;</span></a></li>
      </ul>
<?php $comments->closeCursor(); ?>
</div> 
<?php $content = ob_get_clean(); ?>

<!--///////////////////////////////// renvoi vers template //////////////////////////////////-->
<?php require('views/template.php'); ?>