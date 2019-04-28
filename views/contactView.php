

<?php $title = 'Contact';?>
 <?php if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1 ):?>

<!DOCTYPE html>
<html lang="fr" class='template'>
  <?php include_once 'views/include/head.php';?>

<!------emails à envoyer coté client ou emails reçus coté serveur ---->
     

  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
 <body> 
  <div id="blocpage">

  <header>
      
      <?php include_once 'views/include/menu.php'; ?>
      <?php include_once 'views/include/menu_responsive.php'; ?>
  </header>

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
    


    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="assets/js/gmail.js"></script>
    <script src="https://apis.google.com/js/client.js?onload=handleClientLoad"></script>
    <script src ="assets/js/script.js"></script>
    <script src="assets/js/animateButton/js/main.js"></script>


</body>
</html>

<?php else :;?>
<!DOCTYPE html>
<html lang="fr" class='template'>
  <?php include_once 'views/include/head.php';?>


<!------emails à envoyer coté client ou emails reçus coté serveur ---->
     

 <body> 
  <div id="blocpage">

  <header>
      
      <?php include_once 'views/include/menu.php'; ?>
      <?php include_once 'views/include/menu_responsive.php'; ?>
  </header>

      <a id="films"></a>
 
  

<form class ="form"  method="post" action="index.php?action=addMail" > 
<?php

     if($_GET['action'] == 'addMail'){echo ("<script type='text/javascript' > 
 
            swal({
              title: 'Envoyé!',
              text: 'Votre message a bien été envoyé!',
              icon: 'success'
            })</script>");}
                    
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


             <input type="submit" class="submit" value ="Envoyez votre message &#xf1d8" OnClick="return envoi();"/>
            
            
    </fieldset>
</form>



<a href="#" class="scroll-to"><i class="fa fa-chevron-up"></i></a>

    
    <?php include_once 'views/include/footer.php' ?>  
    

    
        <script src ="assets/js/script.js"></script>
        <script src ="assets/js/tinymce/placeholder.js"></script>
        <script src ="assets/js/tinymce/placeholder.min.js"></script>
        <script src="assets/js/pagination.js"></script>
        <script src="assets/js/form.js"></script>
        <script type="text/javascript" src="assets/js/sliderAccueil/engine1/wowslider.js"></script>
        <script type="text/javascript" src="assets/js/sliderAccueil/engine1/script.js"></script>
        <script src="assets/js/cookiechoices.js"></script>
        <script src="assets/js/classie.js"></script>
        <script>document.addEventListener('DOMContentLoaded', function(event){cookieChoices.showCookieConsentBar('Ce site utilise des cookies pour vous offrir le meilleur service. En poursuivant votre navigation, vous acceptez l’utilisation des cookies.', 'J’accepte', 'En savoir plus', 'http://www.example.com/mentions-legales/');});</script>
        <script src="assets/js/animateButton/js/main.js"></script>

</body>
</html>


<?php 
endif; 
?>   