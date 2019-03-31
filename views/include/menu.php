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
				<li><a class="btn" href="index.php?action=adminNewPost">Editer un service</a><li>
				 <a class="btn" href="index.php?action=adminListComments#com">Tous les Commentaires (<?= $commentsTotal['total_comments']?>)</a>
				<li><a class="btn" href="index.php?action=adminCommentsReport">Commentaires signalés (<?= $commentsReportTotal['total_comments_report']?>)</a></li>
				<li><a class="btn" href="index.php?action=adminListUsers"><i class="fas fa-users"></i> Liste des utilisateurs (<?= $usersTotal['total_users']?>)</a></li>
				<li><a class ="btn" href="index.php?action=logout" OnClick="return confirm('Souhaitez-vous vous déconnecter?')"; ><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
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
		<p>Par téléphone au <i class="fas fa-phone-volume"></i><a href="tel:+0659982720"> 06 59 98 27 20 </a>du lundi au samedi de 8h à 19h sans interruption  ou par <i class="fas fa-envelope"></i> <a href="index.php?action=email">E-mail</a></p>
	</div>
	<div class="nav">
	<div class ="navi">

		<nav>	
			<ul class="navigation">
				<li><div class ='tarifs'>
					<a href="assets/images/tarifs.jpg" download><i class="fas fa-download"></i> Télécharger tarifs </a>
				</div></li>
				<li><a class="btn" href="index.php">Accueil</a></li>
				<li><a class="btn" href="index.php?action=information"><i class="fas fa-info-circle"></i>  Prenez rendez-vous en ligne</a>
				</li>
				<li><a class="btn" href="index.php?action=cinemas"><i class="fas fa-hand-paper"></i>  Contrôle à distance</a></li>
				<li><a class="btn" href="index.php?action=email"><i class="far fa-envelope"></i>  Contactez-nous</a></li>
				<li><a class ="btn" href="index.php?action=logout" OnClick="return confirm('Souhaitez-vous vous déconnecter?')"; "><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
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
		<p>Par téléphone au <i class="fas fa-phone-volume"></i><a href="tel:+0659982720"> 06 59 98 27 20 </a>du lundi au samedi de 8h à 19h sans interruption  ou par <i class="fas fa-envelope"></i> <a href="index.php?action=email">E-mail</a></p>
	</div>
	<div class="nav">
	<div class ="navi">		
		<nav>	
			<ul class="navigation">
			<li><div class ='font-effect-3d-float'>
				Laetitia Bernardi 
			</div></li>
				<li><div class ='tarifs'>
					<a href="assets/images/tarifs.jpg" download><i class="fas fa-download"></i> Télécharger tarifs </a>
				</div></li>
				<li><a class="btn" href="index.php"><i class="fas fa-home"></i> Accueil</a></li>
				<li><a class="btn" id ='serv'href="index.php#welcome"><i class="fas fa-wrench"></i> Liste des Services</a></li>
				<li><a class="btn" href="index.php?action=information"><i class="fas fa-calendar-alt"></i>  Prenez rendez-vous en ligne</a>
				</li>	
				<li><a class="btn" href="index.php?action=login"><i class="fas fa-sign-in-alt"></i>  Inscription/connexion</a></li>
				<li><a class="btn" href="index.php?action=email"><i class="fas fa-envelope"></i>  Contactez-nous</a></li>
			
			</ul>
		</nav>
	</div>
</div>



<?php
endif;
?>
