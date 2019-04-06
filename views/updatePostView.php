<?php $title = 'Modification du service : ' . htmlspecialchars($post['title']) . ' '; ?>

<?php ob_start(); ?>
<div id ="modif"></div>

<h2 class='pageList'>Modifier le service: <?= htmlspecialchars($post['title']); ?></h2>

    <div class ="oneServDetail">

        <div id="affiche4"><?php echo "<img src='".$post['image']."' />";?></div>    
        <p>
            <p>Mis en ligne le <?= htmlspecialchars($post['date_creation_fr']) ?></p>
            <div class="news" >         
                <p><?= htmlspecialchars_decode(nl2br(html_entity_decode($post['content'])));?></p>
            </div>
        

    <form class ="form" action="index.php?action=updatePost&amp;post_id=<?= $_GET['post_id'];?>#films" method="POST">
<div class="containerUpdate">           
         </div>             
            <div>
                
                <label for="author" ></label>
                <p>Par : </p>
                <input type="text" name="author" class="inputbasic" title ='Veuillez entrer un auteur' id="author"value=
                    "<?php
                    if (isset($_SESSION['pseudo'])) :
                        echo htmlspecialchars($_SESSION['pseudo']);
                    endif;
                    ?>"
                    required/>
            </div>
            
            <div >
                <label for="title"></label>  
                 <p>Titre : </p>
                <input type="text" name="title" class="inputbasic" id="title" title ='Veuillez entrer un titre ' value="<?php echo htmlspecialchars($post['title']) ;?>"/>
            </div>
     

            <div>
                <label for="image"></label> 
                <p>Image : </p>         
                <input type="text" name="image" class="inputbasic" id="image" title ='Veuillez entrer une image' value="<?php echo htmlspecialchars($post['image']) ;?>" />
            </div>


            <p>Résumé : </p>   
            <div class="inputbasic">            
                <label for="content"></label>
                <textarea class="editme" name="content" title='Veuillez entrer un résumé' id="content" ><p><?= htmlspecialchars_decode(nl2br(html_entity_decode($post['content'])));?></p></textarea>
                
            </div>
            
            <div>
                <input type="submit" value="envoyer" OnClick="return confirm('Voulez-vous vraiment modifier ce résumé ?');"></input>
            </div>
    </form>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>