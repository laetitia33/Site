<?php $title = 'Connexion / Inscription';?>
<?php ob_start(); ?>    
<div class='pageCo'>
<!--volet de presentation à gauche-->   
<div id="volet_clos">
    <div id="volet">
        <p>Par téléphone au <br> <i class="fas fa-phone-volume"></i><a href="tel:+0659982720"> 06 59 98 27 20 </a><br>du lundi au samedi de 8h à 19h <br>sans interruption  ou par <br><i class="fas fa-envelope"></i> <a href="index.php?action=email">E-mail</a></p>
        <a href="#volet" class="ouvrir" aria-hidden="true">Contact </a>
        <a href="#volet_clos" class="fermer" aria-hidden="true">fermer </a>
    </div>
</div>
<!--formualire de connexion-->
<div class="container">
    <div class="card"></div>
    <div class="card">
        <h1 class="title">Connexion</h1>
        <form class="formLogin"  action="index.php?action=log" method="POST">
            <div>
                <label for="user">Pseudo :</label><br />
                <input type="text" placeholder="pseudo" class="inputbasic" id="user" name="pseudo" required >              
            </div>
            <div>
                <label for="pass">Mot de passe :</label><br /> 
                <input type="password" class="inputbasic" id="pass" name="pass"  placeholder="mot de passe" required>
            </div>
            <div class="button-container">
                <button><span>Go</span></button>
            </div>
        </form>
    </div>
    <!--formualire d'inscription-->
    <div class="card alt">
        <div class="toggleLogin"></div>
        <div class="content">
            <div class="grid1">
                <div class="grid__item">
                    <div class="tooltip tooltip--amras" data-type="amras">
                        <div class="tooltip__trigger" role="tooltip" aria-describedby="info-amras">
                            <div class="toggle"></div>
                            <span class="tooltip__trigger-text"></span>
                        </div>
                        <div class="tooltip__base tooltip_login">
                            <svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
                                <path class="path-amras-2" d="M 293,106 A 90.1,90.1 0 0 1 203,197 90.1,90.1 0 0 1 112,106 90.1,90.1 0 0 1 203,16.2 90.1,90.1 0 0 1 293,106 Z"/>
                                <path class="path-amras-3" d="M 324,66.2 A 46.9,46.9 0 0 1 277,113 46.9,46.9 0 0 1 230,66.2 46.9,46.9 0 0 1 277,19.3 46.9,46.9 0 0 1 324,66.2 Z"/>
                                <path class="path-amras-1" d="M 180,111 A 67.2,67.2 0 0 1 112,178 67.2,67.2 0 0 1 45.9,111 67.2,67.2 0 0 1 112,43.5 67.2,67.2 0 0 1 180,111 Z"/>
                                <path class="path-amras-4" d="M 371,98.6 A 52.7,52.7 0 0 1 318,152 52.7,52.7 0 0 1 266,98.6 52.7,52.7 0 0 1 318,45.9 52.7,52.7 0 0 1 371,98.6 Z"/>
                                <path class="path-amras-9" d="M 375,167 A 66.8,55.1 0 0 1 308,222 66.8,55.1 0 0 1 241,167 66.8,55.1 0 0 1 308,112 66.8,55.1 0 0 1 375,167 Z"/>
                                <path class="path-amras-5" d="M 187,199 A 52,52 0 0 1 136,251 52,52 0 0 1 84.1,199 52,52 0 0 1 136,147 52,52 0 0 1 187,199 Z"/>
                                <path class="path-amras-6" d="M 287,217 A 66.8,66.8 0 0 1 221,284 66.8,66.8 0 0 1 154,217 66.8,66.8 0 0 1 221,150 66.8,66.8 0 0 1 287,217 Z"/>
                                <path class="path-amras-7" d="M 132,168 A 53.9,53.9 0 0 1 78.7,222 53.9,53.9 0 0 1 24.8,168 53.9,53.9 0 0 1 78.7,114 53.9,53.9 0 0 1 132,168 Z"/>
                                <path class="path-amras-8" d="M 343,211 A 48.7,48.7 0 0 1 295,260 48.7,48.7 0 0 1 246,211 48.7,48.7 0 0 1 295,163 48.7,48.7 0 0 1 343,211 Z"/>
                            </svg>
                            <div class="tooltip__content" id="info-amras"><i class="fas fa-pencil-alt"></i>&nbsp;
                                Inscription,cliquez ici
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="title">
            Inscription
            <span class="close"></span>
        </h1>
        <form class ="form" action="index.php?action=register" method="post">
            <div class="input-container">
                <div>
                    <label for="pseudo"></label>
                    <p></p>
                    <input type="text" name="pseudo" id="pseudo" class="inputbasic" placeholder="Pseudo" required/>               
                </div>
            </div>
            <div class="input-container">
                <div>
                    <label for="password"></label>
                    <p></p>
                    <input type="password" name="password" id="password" class="inputbasic" placeholder="Mot de passe" required/>
                </div>
            </div>
            <div class="input-container">
                <div>
                    <label for="password_confirm"></label>
                    <p></p>
                    <input type="password" name="password_confirm" id="password_confirm" class="inputbasic" placeholder="Confirmez votre mot de passe" required/>
                </div>
            </div>
            <div class="input-container">
                <div>
                    <label for="email"></label>
                    <p></p>
                    <input type="email" name="email" id="email" class="inputbasic" placeholder="adresse mail" required/>          
                </div>
            </div>
            <div class="button-container">
                <button><span>Next</span></button>
            </div>
        </form>
    </div>
</div>
</div>
<?php $content = ob_get_clean(); ?>
<!--///////////////////////////////// renvoi vers template //////////////////////////////////-->
<?php require('views/template.php'); ?>