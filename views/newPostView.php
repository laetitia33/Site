<?php $title = 'Créer un nouveau service '; ?>

<?php ob_start(); ?>
<div id ="create"></div>

<h2 class='pageList'>Mise en ligne d'un nouveau service</h2>

<div class="oneServDetail">

<!---formulaire de mise en ligne d'un service-->

<form class ="form" action="index.php?action=createPost" method="POST">
        <div>
            
            <label for="author" ></label>
            <p>Par :</p>
            <input type="text" name="author" class="inputbasic" id="author"value="<?php
                if (isset($_SESSION['pseudo'])):
                
                    echo htmlspecialchars($_SESSION['pseudo']);
                endif;
                ?>"
                required/>
        </div>
    
        <div >
            <label for="title"></label>  
            <p>Titre : </p>        
            <input type="text" name="title" class="inputbasic" id="title" placeholder="Indiquez ici le titre" />
        </div>

        <div>
            <label for="image"></label>
            <p>Image :</p>          
            <input type="text" name="image" class="inputbasic" id="image" placeholder="Inserer le lien de votre image" />
        </div>
                
        <p>Résumé :</p>         
        <div class="inputbasic">
            <label for="content"></label>
            <textarea class="editme"  name="content" id="content"  placeholder="Indiquez ,ici ,le résumé du service"></textarea>
        </div>
        
        <div>
            <input type="submit" value="envoyez"></input>
        </div>
</form>
</div>
<?php $content = ob_get_clean(); ?>

<!--///////////////////////////////// renvoi vers template //////////////////////////////////-->
<?php require('views/template.php'); ?>

