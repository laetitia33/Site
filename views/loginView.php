<?php $title = 'Connexion / Inscription';?>


<?php ob_start(); ?>    
<div class='pageCo'>
    <div id="volet_clos">
        <div id="volet">
            <p>Par téléphone au <br> <i class="fas fa-phone-volume"></i><a href="tel:+0659982720"> 06 59 98 27 20 </a><br>du lundi au samedi de 8h à 19h <br>sans interruption  ou par <br><i class="fas fa-envelope"></i> <a href="index.php?action=email">E-mail</a></p>
        <a href="#volet" class="ouvrir" aria-hidden="true">Contact </a>
        <a href="#volet_clos" class="fermer" aria-hidden="true">fermer </a>
        </div>
    </div>


<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Connexion</h1>
        <form class="formLogin"  action="index.php?action=log" method="POST">
                            
                    <div>
                        <label for="user">Pseudo :</label><br />
                        <input type="text" placeholder="pseudo" class="inputbasic" id="user" name="pseudo" required >              
                    </div>

                    <div>
                        <label for="pass">Mot de passe :</label><br /> 
                        <input type="password" class="inputbasic" id="pass" name="pass"  placeholder="mot de passe" required>
                    </div>
                    
                    <div class="button-container">
                            <button><span>Go</span></button>
                    </div>

              
        </form>
 
 </div>
  <div class="card alt">
    <div class="toggle" aria-label="&#xf0d9; Inscription,cliquez ici"></div>
    <h1 class="title">Inscription
      <div class="close"></div>
    </h1>

        <form class ="form" action="index.php?action=register" method="post">
              <div class="input-container">
               <div>
                    <label for="pseudo"></label>
                    <p></p>     
                    <input type="text" name="pseudo" id="pseudo" class="inputbasic" placeholder="Pseudo" required/>               
                </div>
              </div>

              <div class="input-container">
                <div>
                    <label for="password"></label>
                    <p></p>            
                    <input type="password" name="password" id="password" class="inputbasic" placeholder="Mot de passe" required/>
                </div>
              </div>

              <div class="input-container">
                <div>
                    <label for="password_confirm"></label>
                    <p></p>          
                    <input type="password" name="password_confirm" id="password_confirm" class="inputbasic" placeholder="Confirmez votre mot de passe" required/>
                </div>
              </div>

                <div class="input-container">
                    <div>
                    <label for="email"></label>
                    <p></p>
                    <input type="email" name="email" id="email" class="inputbasic" placeholder="adresse mail" required/>          
                </div>
                </div>

                <div class="button-container">
                        <button><span>Next</span></button>
                </div>

            </form>
        </div>

</div>

<?php $content = ob_get_clean(); ?>

<!--///////////////////////////////// renvoi vers template //////////////////////////////////-->
<?php require('views/template.php'); ?>