
<?php $title = 'Informatique la Teste De Buch,liste des services'; ?>

<?php ob_start(); ?>

<!--recuperation dans fichier txt des adresses ip des visiteurs -->
<?php
$fichierCible ='adressesip.txt';
$myFile=fopen($fichierCible,'a+');
$referer = null;
setlocale(LC_TIME, 'fr','fr_FR','fr_FR@euro','fr_FR.utf8','fr-FR','fra');
date_default_timezone_set('Europe/Paris');	
if (isset($_SERVER['HTTP_REFERER'])) {
    $referer = $_SERVER['HTTP_REFERER'];
}
$httpUserAgent = null;
if (isset($_SERVER['HTTP_USER_AGENT'])) {
    $httpUserAgent = $_SERVER['HTTP_USER_AGENT'];
};
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}


//proxy ou pas

$ipproxy=""; 
$ipprox=""; 
$proxy=0; 
if (isset($_SERVER['HTTP_CLIENT_IP'])){ 
$ipclient=$_SERVER['HTTP_CLIENT_IP']; 
$ipprox=" et vous utilisez un internet partager d'addresse: "; 
$ipprox.=$_SERVER['REMOTE_ADDR']; 
$proxy=1; 
} 
if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])){ 
$ipclient=$_SERVER['HTTP_X_FORWARDED_FOR']; 
$ipproxy=" et vous utilisez un proxy d'adresse: "; 
$ipproxy.=$_SERVER['REMOTE_ADDR']; 
$proxy=1; 
} 
if($proxy==0) { 
$ipclient=$_SERVER['REMOTE_ADDR']; 
$ipproxy=" et vous utilisez n'utilisez apparemment pas de proxy"; 
} 

//recuperation par ipinfo
$apiKey = '5e9ce6c3c92126';
$apiQuery = 'https://ipinfo.io/%s/json?token=5e9ce6c3c92126';
$apiResult = file_get_contents(sprintf($apiQuery, $ip, $apiKey));
$jsonResult = json_decode($apiResult);


//texte à marquer sur adreesesip
$txt_log="\r\n"."INFORMATIONS IP VISITEUR: "."\r\n"
		.'Adresse IP du serveur est : '. $_SERVER['SERVER_ADDR'].";"."\r\n" 
		. 'L\'IP est: '.$ipclient.$ipprox.$ipproxy .";"."\r\n"
        . 'Se nomme :'.gethostbyaddr($_SERVER['REMOTE_ADDR']).";"."\r\n"
        . 'le :'.date('d/m/Y'.' à :'.' H:i:s').";"."\r\n"
        . 'La page qui est demandée : '.$_SERVER['REQUEST_URI'].";"."\r\n"
        . 'Vient du site :'.'"'.$referer .'"' .";"."\r\n"        
 		."Adresse postale :". $jsonResult->postal.";"."\r\n"
    	.'Ville :'.$jsonResult->city.";"."\r\n"
    	.'Région :'.$jsonResult->region.";"."\r\n"
    	.'Pays :'. $jsonResult->country.";"."\r\n"
    	.'Latitude :'.explode(',', $jsonResult->loc)[0].";"."\r\n"
    	.'Longitude :'.explode(',', $jsonResult->loc)[1].";"."\r\n"
        . 'Depuis un ordinateur :'.'"'.$httpUserAgent.'"'."\r\n" 
        . "
"."";

fputs($myFile,$txt_log);
fclose($myFile);
?>


<!--///////////////////////// slider pour les utlisateurs uniquement//////////////////////////////////////////-->
<?php
		if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1) : ?>
		
	
		<?php
		
		else
	
		: ?>

	
<!-- slider--> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<a href='#welcome' class='hvr-radial-out'>Entrez</a>
	<div class="ws_images"><ul>

		<li><img src="assets/js/sliderAccueil/data1/images/image4.jpg" alt="Vous avez un problème informatique?..," title="Vous avez un problème informatique?..," id="wows1_0"/></li>
		<li><img src="assets/js/sliderAccueil/data1/images/image5.jpg" alt="..vous souhaitez creer un site?.." title="..vous souhaitez creer un site?.." id="wows1_1"/></li>
		<li><img src="assets/js/sliderAccueil/data1/images//image10.jpg" alt="..apprendre les bases de l'informatique?.." title="..apprendre les bases de l'informatique?.." id="wows1_2"/></li>
		<li><img src="assets/js/sliderAccueil/data1/images/image11.jpg" alt="..Apprendre lesbases de l'informatique.. " title="..Apprendre lesbases de l'informatique.. " id="wows1_3"/></li>
		<li><img src="assets/js/sliderAccueil/data1/images/image16.jpg" alt="image slider" title="dans une ambiance sereine et décontractée à votre domicile.." id="wows1_4"/></li>
		<li><img src="assets/js/sliderAccueil/data1/images/image19.jpg" alt="..réaliser un projet personnel?" title="..réaliser un projet personnel?" id="wows1_5"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Vous avez un problème informatique?..,"><span><img src="assets/js/sliderAccueil/data1/tooltips/image4.jpg" alt="Vous avez un problème informatique?..,"/>1</span></a>
		<a href="#" title="..vous souhaitez creer un site?.."><span><img src="assets/js/sliderAccueil/data1/tooltips/image5.jpg" alt="..vous souhaitez creer un site?.."/>2</span></a>
		<a href="#" title="..apprendre les bases de l'informatique?.."><span><img src="assets/js/sliderAccueil/data1/tooltips/image10.jpg" alt="..apprendre les bases de l'informatique?.."/>3</span></a>
		<a href="#" title="..Apprendre lesbases de l'informatique.. "><span><img src="assets/js/sliderAccueil/data1/tooltips/image11.jpg" alt="..Apprendre lesbases de l'informatique.. "/>4</span></a>
		<a href="#" title="dans une ambiance sereine et décontractée à votre domicile.."><span><img src="assets/js/sliderAccueil/data1/tooltips/image16.jpg" alt="dans une ambiance sereine et décontractée à votre domicile.."/>5</span></a>
		<a href="#" title="..réaliser un projet personnel?"><span><img src="assets/js/sliderAccueil/data1/tooltips/image19.jpg" alt="..réaliser un projet personnel?"/>6</span></a>
	</div></div><div  class="ws_script" style="position:absolute;left:-99%"></div>
	<div class="ws_shadow"  id="ws_shadow"></div>
	</div>	
	  <?php
         endif;
         ?>
<!--///////////////////////// message bienvenue////////////////////////////////////////-->
<span id="welcome"></span>
	<div class= "welcome" >
		<h1>Bienvenue
		<?php 
			if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1 OR isset($_SESSION['id']) && $_SESSION['id_group'] == 2 )   : 
				echo ''.$_SESSION['pseudo'] . ' !' ;
			endif ;?></h1>
	</div>


<?php
		if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1) : ?>
			<p class = "publishDate">  <i class="fas fa-laptop"></i> Bonjour,<?php
			setlocale(LC_TIME, 'fr','fr_FR','fr_FR@euro','fr_FR.utf8','fr-FR','fra');
			date_default_timezone_set('Europe/Paris');
			echo " nous sommes le ".strftime("%d %B %Y")." " ."il est ".strftime( "%H:%M") ;?> 
			,verifiez la liste des services et des commentaires <i class="fas fa-laptop"></i>       		
			</p>
			<?php
		
		else
		: ?>

			<p class = "publishDate"> <i class="fas fa-laptop"></i> Bonjour,<?php
			setlocale(LC_TIME, 'fr','fr_FR','fr_FR@euro','fr_FR.utf8','fr-FR','fra');
			date_default_timezone_set('Europe/Paris');		
			echo " nous sommes le ".strftime("%d %B %Y")." " ."il est ".strftime( "%H:%M") ;?> , veuillez parcourir la liste des services   <i class="fas fa-laptop"></i><br>
			</p>
			
			  <?php
         endif;
         ?>




<!-- ///////////////////////////message fixe contact //////////////////////////////////////////////////////-->

	<div id="volet_clos1">
		<div id="volet1">
			<p>Par téléphone au <br> <i class="fas fa-phone-volume"></i><a href="tel:+0659982720"> 06 59 98 27 20 </a><br>du lundi au samedi de 8h à 19h <br>sans interruption  ou par <br><i class="fas fa-envelope"></i> <a href="index.php?action=email">E-mail</a></p>
		<a href="#volet1" class="ouvrir1" aria-hidden="true">Contact </a>
		<a href="#volet_clos1" class="fermer1" aria-hidden="true">fermer </a>
		</div>
	</div>
				



<!--///////////////////////////liste services et barre de separation///////////////////////////////////////-->



<!--barre separation -->
<div class="container1" id="container1">
	<h2 class="pageList">Services</h2>

	<div class="pagetitle-separator">
		<div class="pagetitle-separator-border">
			<div class="pagetitle-separator-box"></div>
		</div>
	</div>

	<!--liste services-->
	<p class ='comSignal'></p>
	<div id="page">		
		<?php 
		while ($data = $posts->fetch()):?>
			
				<div class="list-group">
			
							<div class="service"><?php echo "<img class='picture' alt ='images des services proposés' src= '".$data['image']."' data-zoom-image='".$data['image']."'/>";?>								
							</div>
					
						<h2><?= htmlspecialchars($data['title']) ?></h2>
						   <div class='texte'><?= htmlspecialchars_decode(nl2br(substr(html_entity_decode($data['content']), 0,400).'....'));?></div>
						 <br>
	<!---MODALE-////////////// detail du service ///////-->

	<section class="cd-section">
			
			<div class="cd-modal-action">

				<a href="#0" class="btn" data-type="modal-trigger">En savoir plus</a>
				<span class="cd-modal-bg"></span>
			</div> <!-- cd-modal-action -->

			<div class="cd-modal">
				<div class="cd-modal-content">
					<div class ="oneServDetail">				

						<h2><?= htmlspecialchars($data['title']) ?></h2>	
						<div class="affiche2"><?php echo "<img alt='affiche du service' src='".$data['image']."' />";?></div>

						<?php
						if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1): ?>
							<div class='adminCtrl'>
								<a href="index.php?action=adminUpdatePost&amp;post_id=<?= $data['id']; ?>#modif"><em><i class="fas fa-pen-square"> Modifier ce service</i></em></a>
							</div>

							<div class='adminCtrl'>
			               		<a href="index.php?action=deletePost&amp;post_id=<?= $data['id']; ?>" OnClick="return confirm('Voulez-vous vraiment supprimer ce service ?');"><em><i class="fas fa-trash-alt"> Supprimer ce service</i></em></a>
			               	</div>
			 			<?php
			        	
			       		else : ?>
						
							  <?php
			            endif;
			            ?>

						<div class="news" >	
							<p><?= htmlspecialchars_decode(nl2br(html_entity_decode($data['content'])));?>	
						</div>
			
					</div>

				</div> <!-- fin cd-modal-content -->
			</div> <!--fin  cd-modal -->

			<a href="#0" class="cd-modal-close">Close</a>

	</section> <!-- fin .cd-section -->
			


	<!--commande admin pour supprimer ou modifier le service-->
				<div class="coms">

				<?php 
						if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1) : ?>
					
						<a href="index.php?action=adminUpdatePost&amp;post_id=<?= $data['id']; ?>#modif"><em><i class="fas fa-pen-square"> Modifier ce service</i></em></a><br>
	           			 <a href="index.php?action=deletePost&amp;post_id=<?= $data['id']; ?>#episodes" OnClick="return confirm('Voulez-vous  supprimer ce film?');"><em><i class="fas fa-trash-alt"> Supprimer ce service</i></em></a>
				
							<?php
			            endif ;?>
						</div>
			
				</div> 	
		<?php
		endwhile;?>
	</div>
		
	</div>

			<?php
		
			$posts->closeCursor();
			;?>



<?php $content = ob_get_clean(); ?>

<!--///////////////////////////////// renvoi vers template //////////////////////////////////-->
<?php require('views/template.php'); ?>