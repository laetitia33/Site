    


<?php $title = 'Contact';?>
 <?php if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1 ):?>

<!DOCTYPE html>
<html lang="fr" class='template'>
  <?php include_once 'views/include/head.php';?>

<!--emails à envoyer coté client ou emails reçus coté serveur -->
     

  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
 <body> 


  <header>
      
      <?php include_once 'views/include/menu.php'; ?>
      <?php include_once 'views/include/menu_responsive.php'; ?>
  </header>
      <?php include_once 'views/include/background3.php'; ?>
    <div class="container">
      <h1>Boite de réception</h1>

      <button id="authorize-button" class="btn btn-primary hidden">Autorisation</button>

      <table class="table table-striped table-inbox hidden">
        <thead>
          <tr>
            <th>De</th>
            <th>Sujet</th>
            <th>Date/Time</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>

        <a href="#compose-modal" data-toggle="modal" id="compose-button" class="btn btn-primary pull-right hidden">Ecrire un mail</a>
    </div>
 
    <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title">Ecrire un mail</h4>
          </div>
          <form onsubmit="return sendEmail();">
            <div class="modal-body">
              <div class="form-group">
                <input type="email" class="form-control" id="compose-to" placeholder="A" required />
              </div>

              <div class="form-group">
                <input type="text" class="form-control" id="compose-subject" placeholder="Sujet" required />
              </div>

              <div class="form-group">
                <textarea class="form-control" id="compose-message" placeholder="Message" rows="10" required>





Bien à vous.
Laetitia Bernardi.
Creation de sites.
Assistance informatique.
Formation à domicile.</textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">fermer</button>
              <button type="submit" id="send-button" class="btn btn-primary">Envoyer</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="reply-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title">Reply</h4>
          </div>
          <form onsubmit="return sendReply();">
            <input type="hidden" id="reply-message-id" />

            <div class="modal-body">
              <div class="form-group">
                <input type="text" class="form-control" id="reply-to" disabled />
              </div>

              <div class="form-group">
                <input type="text" class="form-control disabled" id="reply-subject" disabled />
              </div>

              <div class="form-group">
                <textarea class="form-control" id="reply-message" placeholder="Message" rows="10" required></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
              <button type="submit" id="reply-button" class="btn btn-primary">Envoyer</button>
            </div>
          </form>
        </div>
      </div>
    </div>
<a href="#" class="scroll-to"><i class="fa fa-chevron-up"></i></a>

    
    <?php include_once 'views/include/footer.php' ?>  
    

    <!---accessibilité regle et calculatrice-->
        <div class='calculatriceContainer'>
            
            <div class="calc-body"> 
              <a id='stopCalculatrice'>X</a>
              <div class="display">
                <p class="result"></p>
                <p class="string"></p>      
              </div>
              <div class="keys">
              <button type="button" class="non-digit" name="clear">C</button>
              <button type="button" class="non-digit" name="back">Back</button>     
              <button type="button" class="non-digit append" name="append">AP</button>
              <button type="button" class="non-digit" value="+/-" name="swneg">&#177;</button>
              <button type="button" class="non-digit" name="square-root">&radic;</button>     
              <input type="button" class="non-digit" value="(">
              <input type="button" class="non-digit" value=")">
              <input type="button" value="/" class="non-digit">
                <input type="button" value="7" name="nr7">
                <input type="button" value="8">
                <input type="button" value="9">
                <input type="button" value="*" class="non-digit">
                <input type="button" value="4">
                <input type="button" value="5">
                <input type="button" value="6">
                <input type="button" value="-" class="non-digit">
                <input type="button" value="1">
                <input type="button" value="2">
                <input type="button" value="3">
                <input type="button" value="+" class="non-digit">
                <input class="zero" type="button" value="0">
                <input type="button" value="." name=".">
                <button type="button" value="=" name="equal" class="equal">=</button>
            </div>  
          </div>
          </div>
      <div class="regle"><a id='stop'>X</a>Règle</div>
    </div>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="assets/js/gmail.js"></script>
    <script src="https://apis.google.com/js/client.js?onload=handleClientLoad"></script>
    <script src ="assets/js/script.js"></script>
    <script src="assets/js/animateButton/js/main.js"></script>
    <script src="assets/js/tooltipLogin/anime.min.js"></script>
    <script src="assets/js/tooltipLogin/charming.min.js"></script>
    <script src="assets/js/tooltipLogin/main.js"></script>
     <script src="assets/js/cookiechoices.js"></script>        
    <script src="www.info-lumiti.com/cookiechoices.js"></script><script>document.addEventListener('DOMContentLoaded', function(event){cookieChoices.showCookieConsentBar('Ce site utilise des cookies pour vous offrir le meilleur service. En poursuivant votre navigation, vous acceptez l’utilisation des cookies.', 'J’accepte', 'En savoir plus', 'www.info-lumiti.com');});</script>
</body>
</html>

<?php else :;?>
<!DOCTYPE html>
<html lang="fr" class='template'>
  <?php include_once 'views/include/head.php';?>


<!--emails à envoyer coté client ou emails reçus coté serveur -->
     

<body> 


  <header>
      
      <?php include_once 'views/include/menu.php'; ?>
      <?php include_once 'views/include/menu_responsive.php'; ?>
  </header>
      <?php include_once 'views/include/background3.php'; ?>

      <a id="films"></a>
 
  

<form class ="form"  method="post" action="index.php?action=addMail" > 

    <fieldset id="contact">
     <legend><span><i class="fas fa-at"></i> Contact </span></legend>
     <p>* Tous les champs sont requis</p>
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


             <input type="submit" class="submit" id='submit' value ="Envoyez votre message &#xf1d8;" />
            
            
    </fieldset>
</form>



<a href="#" class="scroll-to"><i class="fa fa-chevron-up"></i></a>

    
    <?php include_once 'views/include/footer.php' ?>  
    

        <!---accessibilité regle et calculatrice-->
        <div class='calculatriceContainer'>
            
            <div class="calc-body"> 
              <a id='stopCalculatrice'>X</a>
              <div class="display">
                <p class="result"></p>
                <p class="string"></p>      
              </div>
              <div class="keys">
              <button type="button" class="non-digit" name="clear">C</button>
              <button type="button" class="non-digit" name="back">Back</button>     
              <button type="button" class="non-digit append" name="append">AP</button>
              <button type="button" class="non-digit" value="+/-" name="swneg">&#177;</button>
              <button type="button" class="non-digit" name="square-root">&radic;</button>     
              <input type="button" class="non-digit" value="(">
              <input type="button" class="non-digit" value=")">
              <input type="button" value="/" class="non-digit">
                <input type="button" value="7" name="nr7">
                <input type="button" value="8">
                <input type="button" value="9">
                <input type="button" value="*" class="non-digit">
                <input type="button" value="4">
                <input type="button" value="5">
                <input type="button" value="6">
                <input type="button" value="-" class="non-digit">
                <input type="button" value="1">
                <input type="button" value="2">
                <input type="button" value="3">
                <input type="button" value="+" class="non-digit">
                <input class="zero" type="button" value="0">
                <input type="button" value="." name=".">
                <button type="button" value="=" name="equal" class="equal">=</button>
            </div>  
          </div>
          </div>
        <div class="regle"><a id='stop1'>X</a>Règle</div>
        <script src ="assets/js/script.js"></script>
        <script src ="assets/js/tinymce/placeholder.js"></script>
        <script src ="assets/js/tinymce/placeholder.min.js"></script>
        <script src="assets/js/pagination.js"></script>
        <script src="assets/js/form.js"></script>
        <script src="assets/js/sliderAccueil/engine1/wowslider.js"></script>
        <script src="assets/js/sliderAccueil/engine1/script.js"></script>
        <script src="assets/js/classie.js"></script>
        <script src="assets/js/cookiechoices.js"></script>        
        <script src="www.info-lumiti.com/cookiechoices.js"></script><script>document.addEventListener('DOMContentLoaded', function(event){cookieChoices.showCookieConsentBar('Ce site utilise des cookies pour vous offrir le meilleur service. En poursuivant votre navigation, vous acceptez l’utilisation des cookies.', 'J’accepte', 'En savoir plus', 'www.info-lumiti.com');});</script>
        <script src="assets/js/animateButton/js/main.js"></script>
        <script src="assets/js/tooltipLogin/anime.min.js"></script>
        <script src="assets/js/tooltipLogin/charming.min.js"></script>
        <script src="assets/js/tooltipLogin/main.js"></script>

</body>
</html>


<?php 
endif; 
?>   