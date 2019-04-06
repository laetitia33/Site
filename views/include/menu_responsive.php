<?php
//si administrateur
if(isset($_SESSION['id']) && $_SESSION['id_group'] == 1):
    ?>

<div class ="navigation_mob ">
	<nav>
		<a href="#" id="toggler">
     		<i class = "fas fa-bars"></i> 
 		 </a>	
		<div id="toggle">
		<ul class="navigation_mobile">
			<li><a class="btn" href="index.php?action=administration#adminView">Tableau de bord</a></li>
				<li><a class="btn" href="index.php?action=listPosts">Tous les services (<?= $postsTotal['total_posts']?>)</a></li>
				<li><a class="btn" href="index.php?action=rdv"><i class="fas fa-calendar-alt"></i>  Mon agenda</a>
				</li>
				<li><a class="btn" href="index.php?action=adminNewPost">Editer un service</a><li>
				 <a class="btn" href="index.php?action=adminListComments#com">Tous les Commentaires (<?= $commentsTotal['total_comments']?>)</a>
				<li><a class="btn" href="index.php?action=adminCommentsReport">Commentaires signalés (<?= $commentsReportTotal['total_comments_report']?>)</a></li>
				<li><a class="btn" href="index.php?action=adminListUsers"><i class="fas fa-users"></i> Liste des utilisateurs (<?= $usersTotal['total_users']?>)</a></li>
				<li><a class="btn" href="index.php?action=email"><i class="fas fa-envelope"></i> boite mails</a></li>
				<li><a class ="btn" href="index.php?action=logout" OnClick="return confirm('Souhaitez-vous vous déconnecter?')"; ><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
		</ul>	
		</div>
	</nav>
</div>
<?php
//si utilisateur
elseif(isset($_SESSION['id']) && $_SESSION['id_group'] == 2)
:
    ?>

<div class ="navigation_mob ">
	<nav>	
		<a href="#" id="toggler">
     		<i class = "fas fa-bars"></i>
 		</a>
		<div id="toggle">
		<ul class="navigation_mobile">
			<li><div class ='tarifs'>
			<a href="assets/images/tarifs.jpg" download><i class="fas fa-download"></i> Télécharger tarifs </a>
			</div></li>
			<li><a class="btn" href="index.php"><i class="fas fa-home"></i> Accueil</a></li>
			<li><a class="btn" id ='serv'href="index.php#welcome"><i class="fas fa-wrench"></i> Liste des Services</a></li>
			<li><a class="btn" href="index.php?action=rdv"><i class="fas fa-calendar-alt"></i>  Prenez rendez-vous en ligne</a>
			</li>
			<li><a class="btn" href="index.php?action=vpn"><i class="fas fa-hand-paper"></i>  Contrôle à distance</a></li>
			<li><a class="btn" href="index.php?action=email"><i class="far fa-envelope"></i>  Contactez-nous</a></li>
			<li><a class ="btn" href="index.php?action=logout" OnClick="return confirm('Souhaitez-vous vous déconnecter?')"; "><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
		</ul>
		</div>
	</nav>
</div>

<?php
//si visiteur
else
:
    ?>

<div class ="navigation_mob ">
	<nav>	
		<a href="#" id="toggler">
     		<i class = "fas fa-bars"></i> 
 		 </a>
		<div id="toggle">
		<ul class="navigation_mobile">
		<li><div class ='tarifs'>
				<a href="assets/images/tarifs.jpg" download><i class="fas fa-download"></i> Télécharger tarifs </a>
				</div></li>
				<li><a class="btn" href="index.php"><i class="fas fa-home"></i> Accueil</a></li>
				<li><a class="btn" id ='serv'href="index.php#welcome"><i class="fas fa-wrench"></i> Liste des Services</a></li>
				<li><a class="btn" href="index.php?action=rdv"><i class="fas fa-calendar-alt"></i>  Prenez rendez-vous en ligne</a>
				</li>	
				<li><a class="btn" href="index.php?action=login"><i class="fas fa-sign-in-alt"></i>  Inscription/connexion</a></li>
				<li><a class="btn" href="index.php?action=email"><i class="fas fa-envelope"></i>  Contactez-nous</a></li>
		</ul>
		</div>

	</nav>
</div>



<?php
endif;