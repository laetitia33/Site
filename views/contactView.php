

<?php $title = 'Contact';?>

<?php ob_start(); ?> 
 <form class ="form"  method="post" action="index.php?action=addMail" > 
    <?php

      if($_GET['action'] == 'addMail'){echo ("<div id ='message'>Message envoyé avec succès</div>");}
                    
     ?>

    <fieldset id="contact">
     <legend><h2 class="pageList"><i class="fas fa-at"></i> Contact </h2><p>* Tous les champs sont requis</p></legend>
                <div>
                    <label for="name"></label><br />
                    <input type="text"  id="name" name="name"  placeholder=" &#xf007; Entrez votre nom" class="inputbasic" value="" required/>
                </div>

                <div>
                    <label for="email"></label><br />
                    <input type="text"  id ="email" name="email" placeholder=" &#xf0e0; Entrez votre e-mail" class="inputbasic"  value="" required/>
                </div>

                <div>

                    <label for="object"></label><br />
                    <input type="text"  id="object"  name="object" placeholder=" &#xf02b; sujet" class="inputbasic" value="" required/> 
                </div>
                                            
                <div class="inputbasic" >
                    <label for="msg"></label>
                    <textarea  name="msg" id="msg"  placeholder=" &#xf1dd; Entrez votre message" required></textarea>
                </div><br>

    <div class="g-recaptcha" data-theme="light" data-sitekey="6Leae5kUAAAAANbvHn1qo9K0BZ61pXtAOn1CwN7f" ></div>

 



             <input type="submit" class="submit" value ="Envoyez votre message &#xf1d8"  OnClick="return confirm('Souhaitez-vous envoyer ce message ?');"/>
            
    </fieldset>
</form>
<?php $content = ob_get_clean(); ?>

<!--///////////////////////////////// renvoi vers template //////////////////////////////////-->
<?php require('views/template.php'); ?>