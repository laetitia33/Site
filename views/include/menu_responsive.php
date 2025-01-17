<?php
//si administrateur
if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1):
    ?>


<div class ="navigation_mob ">
			<form style="display: inline" action="#" method="get" id="toggler">
				<div id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden">
					<svg width="1000px" height="1000px">
						<path id="pathA" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
						<path id="pathB" d="M 300 500 L 700 500"></path>
						<path id="pathC" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
					</svg>
					<button id="menu-icon-trigger" class="menu-icon-trigger"></button>
				</div>
				</form>
				<div id="toggle">
				<div id="dummy" class="dummy navigation_mobile">
						<ul class="navigation_mobile">
							<li><a class="btn" href="index.php?action=administration#adminView">Tableau de bord</a></li>
								<li><a class="btn" href="index.php?action=listPosts">Tous les services (<?= $postsTotal['total_posts']?>)</a></li>
								<li><a class="btn" href="index.php?action=rdv"><i class="fas fa-calendar-alt"></i>  Mon agenda</a>
								</li>
								<li><a class="btn" href="index.php?action=adminNewPost">Editer un service</a><li>
								 <a class="btn" href="index.php?action=adminListComments#com">Tous les Commentaires (<?= $commentsTotal['total_comments']?>)</a>
								<li><a class="btn" href="index.php?action=adminCommentsReport">Commentaires signalés (<?= $commentsReportTotal['total_comments_report']?>)</a></li>
								<li><a class="btn" href="index.php?action=adminListUsers"><i class="fas fa-users"></i> Liste des utilisateurs (<?= $usersTotal['total_users']?>)</a></li>
								<li><a class="btn" href="index.php?action=gold"><i class="fas fa-book-open"></i>  Livre d'or</a></li>
								<li><a class="btn" href="index.php?action=email"><i class="fas fa-envelope"></i> boite mails</a></li>
								<li><a class ="btn deco" href="index.php?action=logout"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
						</ul>
				<form ACTION="http://www.google.com/search" target="_blank" METHOD="GET"> 
				<div class="containerLoupe">
				  <div class="loupe">
				    <input type="text" name="q" class="loupe__input"  size="25" maxlength="255" value="" /> 
				    	<div class='google'><input  type="checkbox" name="sitesearch" value="lumiti-info.com" checked  /> sur info-lumiti.com</div>				
				    <div class="loupe__button"> 						
				  </div>
				  </div>
				</div>
			</form> 	
				</div><!-- /dummy -->
				</div>
</div>	



<?php
//si utilisateur
elseif(isset($_SESSION['id']) && $_SESSION['id_group'] == 2)
:
    ?>

<div class ="navigation_mob ">

				<form style="display: inline" action="#" method="get" id="toggler">			
				<div id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden">
					<svg width="1000px" height="1000px">
						<path id="pathA" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
						<path id="pathB" d="M 300 500 L 700 500"></path>
						<path id="pathC" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
					</svg>
					<button id="menu-icon-trigger" class="menu-icon-trigger"></button>
				</div>
				</form>
				<div id="toggle">
				<div id="dummy" class="dummy navigation_mobile">
				<ul class="navigation_mobile">
					<li><div class ='font-effect-3d-float'>
						info-lumiti.com 
					</div></li>
					<li><div class ='tarifs'>
					<a href="assets/images/tarifs.jpg" download><i class="fas fa-download"></i> Télécharger tarifs </a>
					</div></li>
					<li><a class="btn" href="index.php"><i class="fas fa-home"></i> Accueil</a></li>
					<li><a class="btn" id ='serv3' href="index.php#welcome"><i class="fas fa-wrench"></i> Liste des Services</a></li>
					<li><a class="btn" href="index.php?action=rdv"><i class="fas fa-calendar-alt"></i>  Prenez rendez-vous en ligne</a>
					</li>
					<li><a class="btn" href="index.php?action=vpn"><i class="fas fa-hand-paper"></i>  Contrôle à distance</a></li>
					<li><a class="btn" href="index.php?action=email"><i class="far fa-envelope"></i>  Contactez-nous</a></li>
					<li><a class="btn" href="index.php?action=gold"><i class="fas fa-book-open"></i>  Livre d'or</a></li>
					<li><a class ="btn deco" href="index.php?action=logout"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
		
				</ul>
				<form ACTION="http://www.google.com/search" target="_blank" METHOD="GET"> 
					<div class="containerLoupe">
					  <div class="loupe">
					    <input type="text" name="q" class="loupe__input"  size="25" maxlength="255" value="" /> 
					    	<div class='google'><input  type="checkbox" name="sitesearch" value="lumiti-info.com" checked  /> sur info-lumiti.com</div>				
					    <div class="loupe__button"> 						
					  </div>
					  </div>
					</div>
				</form> 
				</div><!-- /dummy -->
				</div>
</div>	

<?php
//si visiteur
else
:
    ?>
  
<div class ="navigation_mob ">

	 		<form style="display: inline" action="#" method="get" id="toggler">
				<div id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden">
					<svg width="1000px" height="1000px">
						<path id="pathA" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
						<path id="pathB" d="M 300 500 L 700 500"></path>
						<path id="pathC" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
					</svg>
					<button id="menu-icon-trigger" class="menu-icon-trigger"></button>
				</div>
			</form>
			<div id="toggle">
			<div id="dummy" class="dummy navigation_mobile">

				<ul class="navigation_mobile">
				<li><div class ='font-effect-3d-float'>
					info-lumiti.com 
				</div></li>
				<li><div class ='tarifs'>
						<a href="assets/images/tarifs.jpg" download><i class="fas fa-download"></i> Télécharger tarifs </a>
						</div></li>
						<li><a class="btn" href="index.php"><i class="fas fa-home"></i> Accueil</a></li>
						<li><a class="btn" id ='serv4' href="index.php#welcome"><i class="fas fa-wrench"></i> Liste des Services</a></li>
						<li><a class="btn" href="index.php?action=rdv"><i class="fas fa-calendar-alt"></i>  Prenez rendez-vous en ligne</a>
						</li>	
						<li><a class="btn" href="index.php?action=login"><i class="fas fa-sign-in-alt"></i>  Inscription/connexion</a></li>
						<li><a class="btn" href="index.php?action=gold"><i class="fas fa-book-open"></i>  Livre d'or</a></li>
						<li><a class="btn" href="index.php?action=email"><i class="fas fa-envelope"></i>  Contactez-nous</a></li>
		   
				</ul>
				<form ACTION="http://www.google.com/search" target="_blank" METHOD="GET"> 
				<div class="containerLoupe">
				  <div class="loupe">
				    <input type="text" name="q" class="loupe__input"  size="25" maxlength="255" value="" /> 
				    	<div class='google'><input  type="checkbox" name="sitesearch" value="lumiti-info.com" checked  /> sur info-lumiti.com</div>				
				    <div class="loupe__button"> 						
				  </div>
				  </div>
				</div>
			</form> 
				</div><!-- /dummy -->



</div>	

</div>






<?php
endif;
