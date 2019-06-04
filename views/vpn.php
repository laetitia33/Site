 
<?php $title = 'Assistance à distance';?>

<!DOCTYPE html>
<html lang="fr" class='template'>

		<?php include_once 'views/include/head.php';?>
<body>
	<?php include_once 'views/include/background3.php'; ?>

<!--presentation volet gauche du site-->
	<div id="volet_clos">
		<div id="volet">
			<p>Par téléphone au <br> <i class="fas fa-phone-volume"></i><a href="tel:+0659982720"> 06 59 98 27 20 </a><br>du lundi au samedi de 8h à 19h <br>sans interruption  ou par <br><i class="fas fa-envelope"></i> <a href="index.php?action=email">E-mail</a></p>
		<a href="#volet" class="ouvrir" aria-hidden="true">Contact </a>
		<a href="#volet_clos" class="fermer" aria-hidden="true">fermer </a>
		</div>
	</div>
	
	<div id="blocpage">

		<header>
				<?php include_once 'views/include/menu.php'; ?>
				<?php include_once 'views/include/menu_responsive.php'; ?>
		</header>


<div class="container1">
	<div class="content1">    	
		<div class="grid">
			<figure class="effect-layla">
				<img src="assets/images/vpn/image2.jpg" alt="controle à distance"/>
				<figcaption>
					<?php include_once 'views/include/background2.php'; ?>
					<div>
						<h2><span>Mode d'emploi de contrôle à distance</span></h2>
						<p>Cliquez ici <i class="fas fa-arrow-down"></i></p>
						<div class="svg-wrapper">

					      <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
										       
					        <rect id="shape" height="40" width="150" />
					        <div  id="text1">
								<a id="demo01" href="#animatedModal" >En savoir plus</a>
							</div>	
		    			</div>
					</div> 
					<a href="#">+</a>
					       <!--Appel de la modale-->     
      
        <!--presentation modale 1 exlication team viewer-->
        <div id="animatedModal">

            <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
            <div  id="btn-close-modal2" class="close-animatedModal"> 
                X FERMER
            </div>
                
            <div class="modal-content">

				   <div class="grid2">

				      <div class="blurBox2"></div>
				      <div class="inputBox2">  <div class='cache'>
				       	<ol >

							<li class ="teamExpl"><p>Attendez la validation du rendez-vous en ligne par mail.</p></li>
							<li class ="teamExpl"><p>Un rendez-vous vous sera donné .A l'heure signalée ,cliquez sur le lien ci -dessous pour exécuter l’application sur votre ordinateur.</p>
							<p class='dateTime'>	<?php
							setlocale(LC_TIME, 'fr','fr_FR','fr_FR@euro','fr_FR.utf8','fr-FR','fra');
							date_default_timezone_set('Europe/Paris');
							echo " Nous sommes le ".strftime("%d %B %Y")." " ."il est ".strftime( "%H:%M") ;?> </p>
							</li>

							<li class ="teamExpl"><p>C’est tout ! Tout est prêt pour obtenir instantanément une assistance à distance.</p></li>
						</ol>
				      </div>

				    </div>
				          <a href="assets/images/teamviewer.exe"	class="hvr-pulse-shrink"><i class="fas fa-download"></i>Télécharger logiciel de contrôle pc à distance</a>
				</div>
                <!--Your modal content goes here-->
            </div>
				    </div>
						</figcaption>
						
							</figure>
							<figure class="effect-layla">
								<img src="assets/images/vpn/image4.jpg" alt="installation logiciel"/>						

								<figcaption>
									<div>
									<?php include_once 'views/include/background.php'; ?>

										<h2><span>Comment installer le logiciel ?</span></h2>
										<p>Cliquez ici <i class="fas fa-arrow-down"></i></p>
							    		<div class="svg-wrapper">
									      <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
									        <rect id="shape2" height="40" width="150" />
									        <div id="text2">
									          <a id="demo02" href="#modal-02">En savoir plus</a>
									        </div>
									    </div>												
									</div>
									<a href="#">+</a>
										<!--deuxieme modale presentation teamviewer-->
								        <div id="modal-02">
								            <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
								            <div  id="btn-close-modal" class="close-modal-02"> 
								                X FERMER
								            </div>
								          
								            <div class="modal-content">  
								            	<!--debut code video-->
											<div class="containerVideo">
	  										<div class="v-shadowVideo">
	    										<video data-blur="20" controls poster="assets/images/imageVideo.jpg">
	    										<source src="assets/video/explications.mp4">
	  											</video>

	    										<div class="v-clone"></div>
	  										</div>

								            <!--fin code video-->

							
						</div>

						 <h3><a class="input_read" href="assets/images/teamviewer.exe"><i class="fas fa-download"></i>Télécharger logiciel</a> </h3>
			                <!--Your modal content goes here-->
			            </div>

			        </div>

				</figcaption>			
			</figure>
		</div>	
	</div>
</div>



		<a href="#" id="btntop" class="scroll-to"><i class="fa fa-chevron-up"></i></a>	
		

		<div class='footerDown'>
			<?php include_once 'views/include/footer.php' ?>			
		</div>
		
	</div>

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
	<div class="regle"><a id='stop3'>X</a>Règle</div>

	<!--javascript-->

	<script src ="assets/js/script.js"></script>
	<script src="assets/js/animateButton/js/main.js"></script>
	<script src="assets/js/modaleVpn/animatedModal.js"></script>
	<script src="assets/js/tooltipLogin/anime.min.js"></script>
	<script src="assets/js/tooltipLogin/charming.min.js"></script>
	<script src="assets/js/tooltipLogin/main.js"></script>
	<script src="assets/js/cookiechoices.js"></script>        
    <script src="www.info-lumiti.com/cookiechoices.js"></script>
    <script>document.addEventListener('DOMContentLoaded', function(event){cookieChoices.showCookieConsentBar('Ce site utilise des cookies pour vous offrir le meilleur service. En poursuivant votre navigation, vous acceptez l’utilisation des cookies.', 'J’accepte', 'En savoir plus', 'www.info-lumiti.com');});</script>	
	<!--zoom image-->
	<script>$('img').loupe1();</script>
	<script>
	// Pour l'affichage sur mobiles
		[].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
		el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
		} );
	</script>

        <script>

            //demo 01
            $("#demo01").animatedModal();

            //demo 02
            $("#demo02").animatedModal({
                animatedIn:'lightSpeedIn',
                animatedOut:'bounceOutDown',
                color:'#3498db',
                // Callbacks
                beforeOpen: function() {
                    console.log("The animation was called");
                },           
                afterOpen: function() {
                    console.log("The animation is completed");
                }, 
                beforeClose: function() {
                    console.log("The animation was called");
                }, 
                afterClose: function() {
                    console.log("The animation is completed");
                }
            });

        </script>

</body>	
</html>