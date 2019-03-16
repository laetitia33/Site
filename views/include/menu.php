<?php
//si admin
if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1)
:
    ?>

<div class ="navi">
	<nav>
		<ul class='navigation'>

			<li><a class="btn" href="index.php?action=administration#adminView">Tableau de bord</a></li>
			<li><a class="btn" href="index.php?action=listPosts">Tous les films (<?= $postsTotal['total_posts']?>)</a></li>
			<li><a class="btn" href="index.php?action=adminNewPost">Editer une séance</a><li>
			 <a class="btn" href="index.php?action=adminListComments#com">Tous les Commentaires (<?= $commentsTotal['total_comments']?>)</a>
			<li><a class="btn" href="index.php?action=adminCommentsReport">Commentaires signalés (<?= $commentsReportTotal['total_comments_report']?>)</a></li>
			<li><a class="btn" href="index.php?action=adminListUsers"><i class="fas fa-users"></i> Liste des utilisateurs (<?= $usersTotal['total_users']?>)</a></li>
			<li><a class ="btn" href="index.php?action=logout" OnClick="return confirm('Souhaitez-vous vous déconnecter?')"; "><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
		</ul>
	</nav>
</div>


<?php
//si utilisateur
elseif(isset($_SESSION['id']) && $_SESSION['id_group'] == 2)
:
  ?>

	<div class ="navi">
		<nav>	
			<ul class="navigation">
				<li><div class ='tarifs'>
					<a href="assets/images/tarifs.jpg" download><i class="fas fa-download"></i> Télécharger tarifs </a>
				</div></li>
				<li><a class="btn" href="index.php">Accueil</a></li>
				<li><a class="btn" href="index.php?action=information"><i class="fas fa-info-circle"></i>  Infos pratiques</a>
				</li>
				<li><a class="btn" href="index.php?action=email"><i class="far fa-envelope"></i>  Contactez-nous</a></li>
				<li><a class ="btn" href="index.php?action=logout" OnClick="return confirm('Souhaitez-vous vous déconnecter?')"; "><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
			</ul>
		</nav>
	</div>


<?php
//si visiteur 
else
:
    ?>
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
				<li><a class="btn" href="index.php#container1"><i class="fas fa-wrench"></i> LIste des Services</a></li>
				<li><a class="btn" href="index.php?action=information"><i class="fas fa-calendar-alt"></i>  Prenez rendez-vous en ligne</a>
				</li>
				<li><a class="btn" href="index.php?action=cinemas">  Salles de cinéma</a></li>
				<li><a class="btn" href="index.php?action=login"><i class="fas fa-sign-in-alt"></i>  Inscription/connexion</a></li>
				<li><a class="btn" href="index.php?action=email"><i class="fas fa-envelope"></i>  Contactez-nous</a></li>
			</ul>
		</nav>
	</div>



<?php
endif;
?>
