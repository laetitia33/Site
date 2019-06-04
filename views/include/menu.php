
<?php
//si admin
if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1)
:
    ?>
 <div class="wrapper">
	<div class="header">
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
				<li><a class="btn" id ='serv1' href="index.php#welcome"><i class="fas fa-wrench"></i> Liste des Services</a></li>
				<li><a class="btn" href="index.php?action=rdv"><i class="fas fa-calendar-alt"></i>  Prenez rendez-vous en ligne</a>
				</li>
				<li><a class="btn" href="index.php?action=vpn"><i class="fas fa-hand-paper"></i>  Contrôle à distance</a></li>
				<li><a class="btn" href="index.php?action=gold"><i class="fas fa-book-open"></i>  Livre d'or</a></li>
				<li><a class="btn" href="index.php?action=email"><i class="far fa-envelope"></i>  Contactez-nous</a></li>
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
				<li><a class="btn" id ='serv2' href="index.php#welcome"><i class="fas fa-wrench"></i> Liste des Services</a></li>
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
		</nav>
	</div>
</div>
		
<?php
endif;
?>


<?php  include_once 'views/include/acces.php'; ?>