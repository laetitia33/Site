
<?php $title = 'Assistance à distance';?>

<!DOCTYPE html>
<html lang="fr" class='template'>

		<?php include_once 'views/include/head.php';?>
		
<body>
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


<h2>Mode d'emploi de contrôle à distance</h2>	
	<!---//// horloge ///-->
			<a id="films"></a>
		
	 		<div id="clock" class="light" class="hvr-float-shadow" >
			<div class="display">
				<div class="weekdays"></div>
				<div class="ampm"></div>
				<div class="alarm"></div>
				<div class="digits"></div>
			</div>
		</div>

	<!--///teamviewer////-->

	<p>Teamviewer vous permet de dépanner, d'être dépanné ou d'accéder à une machine de manière sécurisée.</p>
		<ol >
			<li class ="teamExpl"><p>Attendez la validation du rendez-vous en ligne par mail.</p></li>
			<li class ="teamExpl"><p>Un rendez-vous vous sera donné .Puis, à l'heure signalée ,cliquez sur le lien ci -dessous pour exécuter l’application sur votre ordinateur. </p></li>
			<li class ="teamExpl"><p>C’est tout ! Tout est prêt pour obtenir instantanément une assistance à distance.</p></li>
		</ol>

	
		<h2>Comment installer teamviewer sur son ordinateur ?</h2>


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

	</div>
		<a href="http://download.teamviewer.com/preview"	class="hvr-pulse-shrink"><i class="fas fa-download"></i>Télécharger logiciel de contrôle pc à distance</a>
		

		<a href="#" id="btntop"class="scroll-to"><i class="fa fa-chevron-up"></i></a>	
		

		<div class='footerDown'>
			<?php include_once 'views/include/footer.php' ?>			
		</div>
		
	</div>

	<script type="text/javascript" src="assets/js/sliderResp/engine1/wowslider.js"></script>
	<script type="text/javascript" src="assets/js/sliderResp/engine1/script.js"></script>
	<script src ="assets/js/script.js"></script>
	<script src ="assets/js/horloge.js"></script>
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