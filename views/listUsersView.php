<?php $title = 'Liste des membres'; ?>

<?php ob_start(); ?>

<div id="volet_clos">
    <div id="volet">
        <p>Par téléphone au <br> <i class="fas fa-phone-volume"></i><a href="tel:+0659982720"> 06 59 98 27 20 </a><br>du lundi au samedi de 8h à 19h <br>sans interruption  ou par <br><i class="fas fa-envelope"></i> <a href="index.php?action=email">E-mail</a></p>
    <a href="#volet" class="ouvrir" aria-hidden="true">Contact </a>
    <a href="#volet_clos" class="fermer" aria-hidden="true">fermer </a>
    </div>
</div>

    <h2 class  ='pageList'>Liste des membres</h2>


<div class="container1">

  <div>
  
    </div>
<div class="page1">
<?php
while ($user = $users->fetch()) :
?>

<div class="triangle">
    <a href="javascript:void(0)" class="list-group-item active"></a>

      
        <p>Pseudo : <?= htmlspecialchars($user['pseudo']); ?></p>

        <p>Enregistré le : <?= htmlspecialchars($user['registration_date']); ?></p>

        <p>Adresse email : <?= htmlspecialchars($user['email']); ?></p>

        <div class ="reponse">
            <?php 
            ////////////////////// SUPPRIMER UNIQUEMENT LE GROUPE 2(USER) //////////////////////////
            if(htmlspecialchars($user['id_group'])== 2) :?>
            <em><a href="index.php?action=deleteUser&amp;id_user=<?= $user['id']; ?>" OnClick="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?');">Supprimer</a></em>
            <?php 
            endif;?>

    </div>

</div>
<?php
endwhile;?>
</div>        
</div>
    <ul class="pagination1">
        <li id="previous-page"><a href="javascript:void(0)" aria-label=Previous><span aria-hidden=true>Précédente &laquo;</span></a></li>
    </ul>
<?php $users->closeCursor();
?>

<?php $content = ob_get_clean(); ?>

<!--///////////////////////////////// renvoi vers template //////////////////////////////////-->
<?php require('views/template.php'); ?>