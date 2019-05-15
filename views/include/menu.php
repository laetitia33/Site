<?php
//si admin
if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1)
:
    ?>
 <div class="wrapper">
	<div class="header">
		<a href="javascript:void(favoris());">Ajouter ce site à vos favoris</a>
		<p>Par téléphone au <i class="fas fa-phone-volume"></i><a href="tel:+0659982720"> 06 59 98 27 20 </a>du lundi au samedi de 8h à 19h sans interruption  ou par <i class="fas fa-envelope"></i> <a href="index.php?action=email">E-mail</a></p>
	</div>
	<div class="nav">
	<div class ="navi">
		<nav>
			<ul class='navigation'>
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
					<form ACTION="http://www.google.com/search" target="_blank" METHOD="GET"> 
					<div class="containerLoupe">
					  <div class="loupe">
					    <input type="text" name="q" class="loupe__input  size="25" maxlength="255" value="" /> 
					    	<div class='google'><input  type="checkbox" name="sitesearch" value="lumiti-info.com" checked  /> sur info-lumiti.com</div>				
					    <div class="loupe__button"> 						
					  </div>    			
				</form> 
			</ul>
		</nav>
	</div>
</div>

<?php
//si utilisateur
elseif(isset($_SESSION['id']) && $_SESSION['id_group'] == 2)
:
  ?>

 <div class="wrapper">
	<div class="header">
		<a href="javascript:void(favoris());">Ajouter ce site à vos favoris</a>
		<p>Par téléphone au <i class="fas fa-phone-volume"></i><a href="tel:+0659982720"> 06 59 98 27 20 </a>du lundi au samedi de 8h à 19h sans interruption  ou par <i class="fas fa-envelope"></i> <a href="index.php?action=email">E-mail</a></p>
	</div>
	<div class="nav">
	<div class ="navi">

		<nav>	
			<ul class="navigation">
				<li><div class ='font-effect-3d-float'>
					info-lumiti.com 
				</div></li>
				<li><div class ='tarifs'>
					<a href="assets/images/tarifs.jpg" download><i class="fas fa-download"></i> Télécharger tarifs </a>
				</div></li>
				<li><a class="btn" href="index.php"><i class="fas fa-home"></i> Accueil</a></li>
				<li><a class="btn" id ='serv'href="index.php#welcome"><i class="fas fa-wrench"></i> Liste des Services</a></li>
				<li><a class="btn" href="index.php?action=rdv"><i class="fas fa-calendar-alt"></i>  Prenez rendez-vous en ligne</a>
				</li>
				<li><a class="btn" href="index.php?action=vpn"><i class="fas fa-hand-paper"></i>  Contrôle à distance</a></li>
				<li><a class="btn" href="index.php?action=gold"><i class="fas fa-book-open"></i>  Livre d'or</a></li>
				<li><a class="btn" href="index.php?action=email"><i class="far fa-envelope"></i>  Contactez-nous</a></li>
				<li><a class ="btn deco" href="index.php?action=logout"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
				<form ACTION="http://www.google.com/search" target="_blank" METHOD="GET"> 
					<div class="containerLoupe">
					  <div class="loupe">
					    <input type="text" name="q" class="loupe__input  size="25" maxlength="255" value="" /> 
					    	<div class='google'><input  type="checkbox" name="sitesearch" value="lumiti-info.com" checked  /> sur info-lumiti.com</div>				
					    <div class="loupe__button"> 						
					  </div>    			
				</form> 

			</ul>
		</nav>
	</div>
</div>

<?php
//si visiteur 
else
:
    ?>
 <div class="wrapper">
	<div class="header">
		<a href="javascript:void(favoris());">Ajouter ce site à vos favoris</a>
		<p>Par téléphone au <i class="fas fa-phone-volume"></i><a href="tel:+0659982720"> 06 59 98 27 20 </a>du lundi au samedi de 8h à 19h sans interruption  ou par <i class="fas fa-envelope"></i> <a href="index.php?action=email">E-mail</a></p>
	</div>
	<div class="nav">
	<div class ="navi">

		<nav>	
			<ul class="navigation">
			<li><div class ='font-effect-3d-float'>
				info-lumiti.com 
			</div></li>
				<li><div class ='tarifs'>
					<a href="assets/images/tarifs.jpg" download><i class="fas fa-download"></i> Télécharger tarifs </a>
				</div></li>
				<li><a class="btn " href="index.php"><i class="fas fa-home"></i> Accueil</a></li>
				<li><a class="btn" id ='serv'href="index.php#welcome"><i class="fas fa-wrench"></i> Liste des Services</a></li>
				<li><a class="btn" href="index.php?action=rdv"><i class="fas fa-calendar-alt"></i>  Prenez rendez-vous en ligne</a>
				</li>	
				<li><a class="btn" href="index.php?action=login"><i class="fas fa-sign-in-alt"></i>  Inscription/connexion</a></li>
				<li c><a class="btn" href="index.php?action=gold"><i class="fas fa-book-open"></i>  Livre d'or</a></li>
				<li><a class="btn" href="index.php?action=email"><i class="fas fa-envelope"></i>  Contactez-nous</a></li>
			
				<form ACTION="http://www.google.com/search" target="_blank" METHOD="GET"> 
					<div class="containerLoupe">
					  <div class="loupe">
					    <input type="text" name="q" class="loupe__input  size="25" maxlength="255" value="" /> 
					    	<div class='google'><input  type="checkbox" name="sitesearch" value="lumiti-info.com" checked  /> sur info-lumiti.com</div>				
					    <div class="loupe__button"> 						
					  </div>    			
				</form> 

			</ul>

		</nav>
	</div>
</div>
		


<?php
endif;
?>


 <!--////////////////////// acces///////////////////////////-->

	<div id="volet_clos2">
		<div id="volet2">
		<div class="content-widget">
    	<p>Ajouter filtres</p><br>
    	<div  class='filtresCarres'>
				<div class="grid__item">
				<div class="tooltip tooltip--dori" data-type="dori">
					<div class="tooltip__trigger" role="tooltip" aria-describedby="info-dori">
						<button class='fondCarre' id='b1'></button>
					</div>
					<div class="tooltip__base">
						<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
							<path d="M 22,108 22,236 C 22,236 64,216 103,212 142,208 184,212 184,212 L 200,229 216,212 C 216,212 258,207 297,212 336,217 378,236 378,236 L 378,108 C 378,108 318,83.7 200,83.7 82,83.7 22,108 22,108 Z"/>
						</svg>
						<div class="tooltip__content" id="info-dori">Sepia</div>
					</div>
				</div>
			</div>
			<div class="grid__item">
				<div class="tooltip tooltip--dori" data-type="dori">
					<div class="tooltip__trigger" role="tooltip" aria-describedby="info-dori">
						<button class='fondCarre' id='b2'>
				</button>
					</div>
					<div class="tooltip__base">
						<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
							<path d="M 22,108 22,236 C 22,236 64,216 103,212 142,208 184,212 184,212 L 200,229 216,212 C 216,212 258,207 297,212 336,217 378,236 378,236 L 378,108 C 378,108 318,83.7 200,83.7 82,83.7 22,108 22,108 Z"/>
						</svg>
						<div class="tooltip__content" id="info-dori">Gris</div>
					</div>
				</div>
			</div>
			<div class="grid__item">
				<div class="tooltip tooltip--dori" data-type="dori">
					<div class="tooltip__trigger" role="tooltip" aria-describedby="info-dori">
						<button class='fondCarre' id='b3'></button>
					</div>
					<div class="tooltip__base">
						<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
							<path d="M 22,108 22,236 C 22,236 64,216 103,212 142,208 184,212 184,212 L 200,229 216,212 C 216,212 258,207 297,212 336,217 378,236 378,236 L 378,108 C 378,108 318,83.7 200,83.7 82,83.7 22,108 22,108 Z"/>
						</svg>
						<div class="tooltip__content" id="info-dori">Intervertir couleurs</div>
					</div>
				</div>
			</div>
			<div class="grid__item">
				<div class="tooltip tooltip--dori" data-type="dori">
					<div class="tooltip__trigger" role="tooltip" aria-describedby="info-dori">
						<button class='fondCarre' id='b4'></button>
					</div>
					<div class="tooltip__base">
						<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
							<path d="M 22,108 22,236 C 22,236 64,216 103,212 142,208 184,212 184,212 L 200,229 216,212 C 216,212 258,207 297,212 336,217 378,236 378,236 L 378,108 C 378,108 318,83.7 200,83.7 82,83.7 22,108 22,108 Z"/>
						</svg>
						<div class="tooltip__content" id="info-dori">Saturate</div>
					</div>
				</div>
			</div>
			<div class="grid__item">
				<div class="tooltip tooltip--dori" data-type="dori">
					<div class="tooltip__trigger" role="tooltip" aria-describedby="info-dori">
						<button class='fondCarre' id='b5'></button>
					</div>
					<div class="tooltip__base">
						<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
							<path d="M 22,108 22,236 C 22,236 64,216 103,212 142,208 184,212 184,212 L 200,229 216,212 C 216,212 258,207 297,212 336,217 378,236 378,236 L 378,108 C 378,108 318,83.7 200,83.7 82,83.7 22,108 22,108 Z"/>
						</svg>
						<div class="tooltip__content" id="info-dori">Plus clair</div>
					</div>
				</div>
			</div>
			<div class="grid__item">
				<div class="tooltip tooltip--dori" data-type="dori">
					<div class="tooltip__trigger" role="tooltip" aria-describedby="info-dori">
					<button class='fondCarre' id='b6'></button>
					</div>
					<div class="tooltip__base">
						<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
							<path d="M 22,108 22,236 C 22,236 64,216 103,212 142,208 184,212 184,212 L 200,229 216,212 C 216,212 258,207 297,212 336,217 378,236 378,236 L 378,108 C 378,108 318,83.7 200,83.7 82,83.7 22,108 22,108 Z"/>
						</svg>
						<div class="tooltip__content" id="info-dori">Contraste</div>
					</div>
				</div>
			</div>
			<div class="grid__item">
				<div class="tooltip tooltip--dori" data-type="dori">
					<div class="tooltip__trigger" role="tooltip" aria-describedby="info-dori">
						<button class='fondCarre' id='b7'></button>
					</div>
					<div class="tooltip__base">
						<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
							<path d="M 22,108 22,236 C 22,236 64,216 103,212 142,208 184,212 184,212 L 200,229 216,212 C 216,212 258,207 297,212 336,217 378,236 378,236 L 378,108 C 378,108 318,83.7 200,83.7 82,83.7 22,108 22,108 Z"/>
						</svg>
						<div class="tooltip__content" id="info-dori">Aucun filtre</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
	<p>Taille de la police d'écriture</p><br>			  
	 <button id='b8'> + </button>
	 <button id='b19'> + </button>
	<button id='b20'> + </button>

	 <button id='b9'>police par default </button><br><hr>




	 <p>Changer la couleur du fond d'ecran</hr></p><br>
	 <button class='fondCercle' id='b10'></button>
	 <button class='fondCercle' id='b11'></button>	
	 <button class='fondCercle' id='b12'></button>
	<button class='fondCercle' id='b13'></button>	
	<button class='fondCercle' id='b14'></button>
	<br><hr>

	<div class='autresOutils'>
		<button class='autresOutilsBtn' id='b15'>police jaune sur fond noir </button>
		
		<button class='autresOutilsBtn' id='b16'>Inspecter</button>

		<button class='autresOutilsBtn' id='b17'>Mettre en valeur les liens</button>
		
		<button class='autresOutilsBtn' id='b21'>Augmenter le curseur</button>

		<button class='autresOutilsBtn' id='b22'>Aide à la lecture</button>
			
		<button class='autresOutilsBtn' id='b23'>calculatrice</button>	

		<button class='autresOutilsBtn' id='b18'>Effacer tous les changements</button>



 	</div>

    </div>


			<a href="#volet2" class="ouvrir2" aria-hidden="true">Outils </a>
			<a href="#volet_clos2" class="fermer2" aria-hidden="true">fermer</a>
		</div>
	</div>

