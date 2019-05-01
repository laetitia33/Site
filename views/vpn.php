
<?php $title = 'Assistance à distance';?>

<!DOCTYPE html>
<html lang="fr" class='template'>

		<?php include_once 'views/include/head.php';?>
<body>
	<?php include_once 'views/include/background3.php'; ?>

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
					        <div id="text">
					          <a id="demo01" href="#animatedModal">En savoir plus</a>
					        </div>
					      </svg>
					    </div>
					</div>
					<a href="#">+</a>
					       <!--Call your modal-->     
      
        <!--DEMO01-->
        <div id="animatedModal">

            <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
            <div  id="btn-close-modal" class="close-animatedModal"> 
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
							</li><a href="http://download.teamviewer.com/preview"	class="hvr-pulse-shrink"><i class="fas fa-download"></i>Télécharger logiciel de contrôle pc à distance</a> 
							<li class ="teamExpl"><p>C’est tout ! Tout est prêt pour obtenir instantanément une assistance à distance.</p></li>
						</ol>
				      </div>
				    </div>
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
									        <rect id="shape" height="40" width="150" />
									        <div id="text">
									          <a id="demo02" href="#modal-02">En savoir plus</a>
									        </div>
									      </svg>
									    </div>												
									</div>
									<a href="#">+</a>
										<!--DEMO02-->
								        <div id="modal-02">
								            <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
								            <div  id="btn-close-modal" class="close-modal-02"> 
								                X FERMER
								            </div>
								          
								            <div class="modal-content">  
								            	<div class ="sliderTab">

								<div id="wowslider-container1">
								<div class="ws_images"><ul>
										<li><img src="assets/images/sliderResp/resp1.jpg" alt="" title="" id="wows1_0"/></li>
										<li><img src="assets/images/sliderResp/resp2.jpg" alt="" title="" id="wows1_1"/></li>
										<li><img src="assets/images/sliderResp/resp3.jpg" alt="" title="" id="wows1_2"/></li>
										<li><img src="assets/images/sliderResp/resp4.jpg" alt="" title="" id="wows1_3"/></li>
										<li><img src="assets/images/sliderResp/resp5.jpg" alt="" title="" id="wows1_4"/></li>
										<li><img src="assets/images/sliderResp/resp7.jpg" alt="" title="" id="wows1_6"/></li>
									</ul></div>

								<div class="ws_shadow"></div>
								</div>	

						</div>

					<div class='sliderPc'>
						<ul id="slider3">
						  <li>
						   <!-- Note this caption is before the image, all others it is after -->
						   <div class="caption-top">
						   1 - Cliquez sur le bouton télécharger en-dessous de ce diaporama
						   </div>
						   <img src="assets/images/teamviewer/image0.jpg" alt="">
						  </li>
						  <li>
						   <img src="assets/images/teamviewer/image1.jpg" alt="">
						   <div class="caption-right">		  
							<br>2 - Cliquez sur l'installateur que vous venez de télécharger en bas de la fenêtre de votre navigateur.
						   </div>
						  </li>
						  <li>
						   <img src="assets/images/teamviewer/image2.jpg" alt="">
						   <div class="caption-bottom">
						    3 - Cliquez sur exécuter.
						   </div>
						  </li>
						  <li>
						   <img src="assets/images/teamviewer/image3.jpg" alt="">
						   <div class="caption-left">
						   <br> 4 - Laissez les options sélectionnées par défaut. Puis cliquez sur 'J'accepte - terminer '.
						   </div>
						  </li>
						    <li>
						   <img src="assets/images/teamviewer/image4.jpg" alt="">
						   <div class="caption-top">
						    L'installation s'effectue seule.Attendez.
						   </div>
						  </li>
						   <li>
						   <img src="assets/images/teamviewer/image5.jpg" alt="">
						   <div class="caption-bottom">
						   Cette fenetre d'information s'ouvre.Cliquez sur " OK ".
						   </div>
						  </li>
						  <li>
						   <img src="assets/images/teamviewer/image6.jpg" alt="">
						   <div class="caption-right">
						    <br>Donnez moi votre ' ID ' et votre ' mot de passe '.
						   </div>
						  </li>
						 </ul>

					</div><br><br>
						 <h3><a class="input_read" href="http://download.teamviewer.com/preview"><i class="fas fa-download"></i>Télécharger logiciel</a> </h3>
			                <!--Your modal content goes here-->
			            </div>

			        </div>

				</figcaption>			
			</figure>
		</div>	
	</div>
</div>



		<a href="#" id="btntop"class="scroll-to"><i class="fa fa-chevron-up"></i></a>	
		

		<div class='footerDown'>
			<?php include_once 'views/include/footer.php' ?>			
		</div>
		
	</div>
	<script type="text/javascript" src="assets/js/sliderResp/engine1/wowslider.js"></script>
	<script type="text/javascript" src="assets/js/sliderResp/engine1/script.js"></script>
	<script src ="assets/js/script.js"></script>
	<script src="assets/js/animateButton/js/main.js"></script>
	<script src="assets/js/modaleVpn/animatedModal.js"></script>

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





<script>	
//slider controle

	$(function(){
 $('#slider3')
  .anythingSlider()
  /* this code will make the caption appear when you hover over the panel
    remove the extra statements if you don't have captions in that location */
  .find('.panel')
    .find('div[class*=caption]').css({ position: 'absolute' }).end()
    .hover(function(){ showCaptions( $(this) ) }, function(){ hideCaptions( $(this) ); });

  showCaptions = function(el){
    var $this = el;
    if ($this.find('.caption-top').length) {
      $this.find('.caption-top')
        .show()
        .animate({ top: 0, opacity: 1 }, 400);
    }
    if ($this.find('.caption-right').length) {
      $this.find('.caption-right')
        .show()
        .animate({ right: 0, opacity: 1 }, 400);
    }
    if ($this.find('.caption-bottom').length) {
      $this.find('.caption-bottom')
        .show()
        .animate({ bottom: 0, opacity: 1 }, 400);
    }
    if ($this.find('.caption-left').length) {
      $this.find('.caption-left')
        .show()
        .animate({ left: 0, opacity: 1 }, 400);
    }
  };
  hideCaptions = function(el){
    var $this = el;
    if ($this.find('.caption-top').length) {
      $this.find('.caption-top')
        .stop()
        .animate({ top: -50, opacity: 0 }, 350, function(){
          $this.find('.caption-top').hide(); });
    }
    if ($this.find('.caption-right').length) {
      $this.find('.caption-right')
        .stop()
        .animate({ right: -150, opacity: 0 }, 350, function(){
          $this.find('.caption-right').hide(); });
    }
    if ($this.find('.caption-bottom').length) {
      $this.find('.caption-bottom')
        .stop()
        .animate({ bottom: -50, opacity: 0 }, 350, function(){
          $this.find('.caption-bottom').hide(); });
    }
    if ($this.find('.caption-left').length) {
      $this.find('.caption-left')
        .stop()
        .animate({ left: -150, opacity: 0 }, 350, function(){
          $this.find('.caption-left').hide(); });
    }
  };

  // hide all captions initially
  hideCaptions( $('#slider3 .panel') );
});
</script>
</body>	
</html>