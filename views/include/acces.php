
 <!--////////////////////// acces///////////////////////////-->
		<!---accessibilité regle et calculatrice-->
					<div class='calculatriceContainer'>
							
							<div class="calc-body">	
								<a class='stopCalculatrice'>X</a>
								<div class="display">
									<p class="result"></p>
									<p class="string"></p>			
								</div>
								<div class="keys">
								<button type="button" class="non-digit" name="clear">C</button>
								<button type="button" class="non-digit" name="back">Back</button>			
								<button type="button" class="non-digit append" name="append">AP</button>
								<button type="button" class="non-digit" value="+/-" name="swneg">&#177;</button>
								<button type="button" class="non-digit" name="square-root">&radic;</button>			
								<input type="button" class="non-digit" value="(">
								<input type="button" class="non-digit" value=")">
								<input type="button" value="/" class="non-digit">
									<input type="button" value="7" name="nr7">
									<input type="button" value="8">
									<input type="button" value="9">
									<input type="button" value="*" class="non-digit">
									<input type="button" value="4">
									<input type="button" value="5">
									<input type="button" value="6">
									<input type="button" value="-" class="non-digit">
									<input type="button" value="1">
									<input type="button" value="2">
									<input type="button" value="3">
									<input type="button" value="+" class="non-digit">
									<input class="zero" type="button" value="0">
									<input type="button" value="." name=".">
									<button type="button" value="=" name="equal" class="equal">=</button>
							</div>	
						</div>
						</div>
					<div class="regle"><a id='stop'>X</a>Règle</div>
				</div>


	<div id="volet_clos2">
		<div id="volet2">
		<div class="content-widget">

<!--//////////////////////////boutons filtres////////////////////////////////////////////-->			
    	<p>Ajouter filtres</p><br>
	    	<div class='filtresCarres'>
					<div class="grid__item">
					<div class="tooltip tooltip--dori" data-type="dori">
						<div class="tooltip__trigger" role="tooltip" >
							<button class='fondCarre' id='filtre1'></button>
						</div>
						<div class="tooltip__base">
							<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
								<path d="M 22,108 22,236 C 22,236 64,216 103,212 142,208 184,212 184,212 L 200,229 216,212 C 216,212 258,207 297,212 336,217 378,236 378,236 L 378,108 C 378,108 318,83.7 200,83.7 82,83.7 22,108 22,108 Z"/>
							</svg>
							<div class="tooltip__content info-dori">Sepia</div>
						</div>
					</div>
				</div>
				<div class="grid__item">
					<div class="tooltip tooltip--dori" data-type="dori">
						<div class="tooltip__trigger" role="tooltip">
							<button class='fondCarre' id='filtre2'>
					</button>
						</div>
						<div class="tooltip__base">
							<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
								<path d="M 22,108 22,236 C 22,236 64,216 103,212 142,208 184,212 184,212 L 200,229 216,212 C 216,212 258,207 297,212 336,217 378,236 378,236 L 378,108 C 378,108 318,83.7 200,83.7 82,83.7 22,108 22,108 Z"/>
							</svg>
							<div class="tooltip__content info-dori">Gris</div>
						</div>
					</div>
				</div>
				<div class="grid__item">
					<div class="tooltip tooltip--dori" data-type="dori">
						<div class="tooltip__trigger" role="tooltip">
							<button class='fondCarre' id='filtre3'></button>
						</div>
						<div class="tooltip__base">
							<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
								<path d="M 22,108 22,236 C 22,236 64,216 103,212 142,208 184,212 184,212 L 200,229 216,212 C 216,212 258,207 297,212 336,217 378,236 378,236 L 378,108 C 378,108 318,83.7 200,83.7 82,83.7 22,108 22,108 Z"/>
							</svg>
							<div class="tooltip__content info-dori">Intervertir couleurs</div>
						</div>
					</div>
				</div>
				<div class="grid__item">
					<div class="tooltip tooltip--dori" data-type="dori">
						<div class="tooltip__trigger" role="tooltip">
							<button class='fondCarre' id='filtre4'></button>
						</div>
						<div class="tooltip__base">
							<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
								<path d="M 22,108 22,236 C 22,236 64,216 103,212 142,208 184,212 184,212 L 200,229 216,212 C 216,212 258,207 297,212 336,217 378,236 378,236 L 378,108 C 378,108 318,83.7 200,83.7 82,83.7 22,108 22,108 Z"/>
							</svg>
							<div class="tooltip__content info-dori">Saturate</div>
						</div> 
					</div>
				</div>
				<div class="grid__item">
					<div class="tooltip tooltip--dori" data-type="dori">
						<div class="tooltip__trigger" role="tooltip">
							<button class='fondCarre' id='filtre5'></button>
						</div>
						<div class="tooltip__base">
							<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
								<path d="M 22,108 22,236 C 22,236 64,216 103,212 142,208 184,212 184,212 L 200,229 216,212 C 216,212 258,207 297,212 336,217 378,236 378,236 L 378,108 C 378,108 318,83.7 200,83.7 82,83.7 22,108 22,108 Z"/>
							</svg>
							<div class="tooltip__content info-dori">Plus clair</div>
						</div>
					</div>
				</div>
				<div class="grid__item">
					<div class="tooltip tooltip--dori" data-type="dori">
						<div class="tooltip__trigger" role="tooltip">
						<button class='fondCarre' id='filtre6'></button>
						</div>
						<div class="tooltip__base">
							<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
								<path d="M 22,108 22,236 C 22,236 64,216 103,212 142,208 184,212 184,212 L 200,229 216,212 C 216,212 258,207 297,212 336,217 378,236 378,236 L 378,108 C 378,108 318,83.7 200,83.7 82,83.7 22,108 22,108 Z"/>
							</svg>
							<div class="tooltip__content info-dori">Contraste</div>
						</div>
					</div>
				</div>
				<div class="grid__item">
					<div class="tooltip tooltip--dori" data-type="dori">
						<div class="tooltip__trigger" role="tooltip">
							<button class='fondCarre' id='filtre7'></button>
						</div>
						<div class="tooltip__base">
							<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
								<path d="M 22,108 22,236 C 22,236 64,216 103,212 142,208 184,212 184,212 L 200,229 216,212 C 216,212 258,207 297,212 336,217 378,236 378,236 L 378,108 C 378,108 318,83.7 200,83.7 82,83.7 22,108 22,108 Z"/>
							</svg>
							<div class="tooltip__content info-dori">Aucun filtre</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
<!--////////////////////////////boutons police//////////////////////////////////////////-->
			<p>Taille de la police d'écriture</p><br>			  
			<button id='police1'> + </button>
			<button id='police2'> + </button>
			<button id='police3'> + </button>

			<button id='policeDefaut'>police par default </button><br><hr>


<!--//////////////////////////boutons fonds d'ecrans////////////////////////////////////-->

			<p>Changer la couleur du fond d'ecran</p><br>
			<div class='grandFondCercle'>
				<div class="grid__item">
					<div class="tooltip tooltip--smaug" data-type="smaug">
						<div class="tooltip__trigger" role="tooltip">
							<button class='fondCercle' id='background1'></button>
						</div>
						<div class="tooltip__base">
							<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
								<path d="M 314,100 C 313,100 312,100 311,100 L 89.5,100 C 55.9,100 29.1,121 29.1,150 29.1,178 53.1,201 89.5,201 L 184,201 200,223 217,201 311,201 C 344,201 371,178 371,150 371,122 346,99 314,100 Z"/>
							</svg>
							<div class="tooltip__content info-smaug">Gris</div>
						</div>
					</div>
				</div>
				<div class="grid__item">
					<div class="tooltip tooltip--smaug" data-type="smaug">
						<div class="tooltip__trigger" role="tooltip">
							<button class='fondCercle' id='background2'></button>
						</div>
						<div class="tooltip__base">
							<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
								<path d="M 314,100 C 313,100 312,100 311,100 L 89.5,100 C 55.9,100 29.1,121 29.1,150 29.1,178 53.1,201 89.5,201 L 184,201 200,223 217,201 311,201 C 344,201 371,178 371,150 371,122 346,99 314,100 Z"/>
							</svg>
							<div class="tooltip__content info-smaug">Noir</div>
						</div>
					</div>
				</div>
				<div class="grid__item">
					<div class="tooltip tooltip--smaug" data-type="smaug">
						<div class="tooltip__trigger" role="tooltip">
							<button class='fondCercle' id='background3'></button>
						</div>
						<div class="tooltip__base">
							<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
								<path d="M 314,100 C 313,100 312,100 311,100 L 89.5,100 C 55.9,100 29.1,121 29.1,150 29.1,178 53.1,201 89.5,201 L 184,201 200,223 217,201 311,201 C 344,201 371,178 371,150 371,122 346,99 314,100 Z"/>
							</svg>
							<div class="tooltip__content info-smaug">Initial</div>
						</div>
					</div>
				</div>	
				<div class="grid__item">
					<div class="tooltip tooltip--smaug" data-type="smaug">
						<div class="tooltip__trigger" role="tooltip">
							<button class='fondCercle' id='background4'></button>
						</div>
						<div class="tooltip__base">
							<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
								<path d="M 314,100 C 313,100 312,100 311,100 L 89.5,100 C 55.9,100 29.1,121 29.1,150 29.1,178 53.1,201 89.5,201 L 184,201 200,223 217,201 311,201 C 344,201 371,178 371,150 371,122 346,99 314,100 Z"/>
							</svg>
							<div class="tooltip__content info-smaug">Jaune</div>
						</div>
					</div>
				</div>	
				<div class="grid__item">
					<div class="tooltip tooltip--smaug" data-type="smaug">
						<div class="tooltip__trigger" role="tooltip">
							<button class='fondCercle' id='background5'></button>
						</div>
						<div class="tooltip__base">
							<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
								<path d="M 314,100 C 313,100 312,100 311,100 L 89.5,100 C 55.9,100 29.1,121 29.1,150 29.1,178 53.1,201 89.5,201 L 184,201 200,223 217,201 311,201 C 344,201 371,178 371,150 371,122 346,99 314,100 Z"/>
							</svg>
							<div class="tooltip__content info-smaug">Rouge</div>
						</div>
					</div>
				</div>	
			</div>
			<br><hr>
<!--////////////////////////////////boutons autres outils//////////////////////////////////////-->
			<!--fond noir police jaune-->
			<div class='autresOutils'>
			<div class="grid__item">
						<div class="tooltip tooltip--hador" data-type="hador">
							<div class="tooltip__trigger" role="tooltip">
								<div id='yellowBlackClose'><i class="fas fa-times-circle fa-2x"></i></div>
							</div>
							<div class="tooltip__base">
								<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
									<path class="path-hador-1" d="M 154,283 A 6.12,6.12 0 0 1 149,290 6.12,6.12 0 0 1 142,286 6.12,6.12 0 0 1 146,278 6.12,6.12 0 0 1 154,283 Z"/>
									<path class="path-hador-2" d="M 167,265 A 7.83,7.83 0 0 1 162,276 7.83,7.83 0 0 1 152,270 7.83,7.83 0 0 1 157,261 7.83,7.83 0 0 1 167,265 Z"/>
									<path class="path-hador-3" d="M 183,244 A 11.9,11.9 0 0 1 174,258 11.9,11.9 0 0 1 160,250 11.9,11.9 0 0 1 168,235 11.9,11.9 0 0 1 183,244 Z"/>
									<path class="path-hador-4" d="M 327,120 A 127,111 0 0 1 200,231 127,111 0 0 1 72.9,120 127,111 0 0 1 200,9.44 127,111 0 0 1 327,120 Z"/>
								</svg>
								<div class="tooltip__content info-hador">Fermer.</div>
							</div>
						</div>
					</div>
	
				<div id ='buttonYellowBlack'>
					<button class='autresOutilsBtn' id='yellowBlack'>police jaune sur fond noir <span id='fontawesome1'><i class="fas fa-check"></i></span></button>
				</div>

			<!--inspecter-->	
			<div class="grid__item">
						<div class="tooltip tooltip--hador" data-type="hador">
							<div class="tooltip__trigger" role="tooltip">
								<div id='inspecterClose'><i class="fas fa-times-circle fa-2x"></i></div>
							</div>
							<div class="tooltip__base">
								<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
									<path class="path-hador-1" d="M 154,283 A 6.12,6.12 0 0 1 149,290 6.12,6.12 0 0 1 142,286 6.12,6.12 0 0 1 146,278 6.12,6.12 0 0 1 154,283 Z"/>
									<path class="path-hador-2" d="M 167,265 A 7.83,7.83 0 0 1 162,276 7.83,7.83 0 0 1 152,270 7.83,7.83 0 0 1 157,261 7.83,7.83 0 0 1 167,265 Z"/>
									<path class="path-hador-3" d="M 183,244 A 11.9,11.9 0 0 1 174,258 11.9,11.9 0 0 1 160,250 11.9,11.9 0 0 1 168,235 11.9,11.9 0 0 1 183,244 Z"/>
									<path class="path-hador-4" d="M 327,120 A 127,111 0 0 1 200,231 127,111 0 0 1 72.9,120 127,111 0 0 1 200,9.44 127,111 0 0 1 327,120 Z"/>
								</svg>
								<div class="tooltip__content info-hador">Fermer.</div>
							</div>
						</div>
					</div>
				<div id ='buttonInspect'>
					<button class='autresOutilsBtn' id='inspecter'>Inspecter<span id='fontawesome2'><i class="fas fa-check"></i></span></button>				
				</div>
				
				<!--mettre en valeur les liens-->
				<div class="grid__item">
						<div class="tooltip tooltip--hador" data-type="hador">
							<div class="tooltip__trigger" role="tooltip">
								<div id='liensClose'><i class="fas fa-times-circle fa-2x"></i></div>				
							</div>
							<div class="tooltip__base">
								<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
									<path class="path-hador-1" d="M 154,283 A 6.12,6.12 0 0 1 149,290 6.12,6.12 0 0 1 142,286 6.12,6.12 0 0 1 146,278 6.12,6.12 0 0 1 154,283 Z"/>
									<path class="path-hador-2" d="M 167,265 A 7.83,7.83 0 0 1 162,276 7.83,7.83 0 0 1 152,270 7.83,7.83 0 0 1 157,261 7.83,7.83 0 0 1 167,265 Z"/>
									<path class="path-hador-3" d="M 183,244 A 11.9,11.9 0 0 1 174,258 11.9,11.9 0 0 1 160,250 11.9,11.9 0 0 1 168,235 11.9,11.9 0 0 1 183,244 Z"/>
									<path class="path-hador-4" d="M 327,120 A 127,111 0 0 1 200,231 127,111 0 0 1 72.9,120 127,111 0 0 1 200,9.44 127,111 0 0 1 327,120 Z"/>
								</svg>
								<div class="tooltip__content info-hador">Fermer.</div>
							</div>
						</div>
				</div>

				<div id ='buttonLien'>
					<button class='autresOutilsBtn' id='liens'>Mettre en valeur les liens<span id='fontawesome3'><i class="fas fa-check"></i></span></button>
				</div>


				<!--augmenter le curseur-->
				<div class="grid__item">
						<div class="tooltip tooltip--hador" data-type="hador">
							<div class="tooltip__trigger" role="tooltip">
								<div id='curseurClose'><i class="fas fa-times-circle fa-2x"></i></div>			
							</div>
							<div class="tooltip__base">
								<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
									<path class="path-hador-1" d="M 154,283 A 6.12,6.12 0 0 1 149,290 6.12,6.12 0 0 1 142,286 6.12,6.12 0 0 1 146,278 6.12,6.12 0 0 1 154,283 Z"/>
									<path class="path-hador-2" d="M 167,265 A 7.83,7.83 0 0 1 162,276 7.83,7.83 0 0 1 152,270 7.83,7.83 0 0 1 157,261 7.83,7.83 0 0 1 167,265 Z"/>
									<path class="path-hador-3" d="M 183,244 A 11.9,11.9 0 0 1 174,258 11.9,11.9 0 0 1 160,250 11.9,11.9 0 0 1 168,235 11.9,11.9 0 0 1 183,244 Z"/>
									<path class="path-hador-4" d="M 327,120 A 127,111 0 0 1 200,231 127,111 0 0 1 72.9,120 127,111 0 0 1 200,9.44 127,111 0 0 1 327,120 Z"/>
								</svg>
								<div class="tooltip__content info-hador">Fermer.</div>
							</div>
						</div>
				</div>
				<div id="buttonCursor">
					<button class='autresOutilsBtn' id='curseur'>Augmenter le curseur<span id='fontawesome4'><i class="fas fa-check"></i></span></button>
				</div>

				<!--regle-->
				<div class="grid__item">
						<div class="tooltip tooltip--hador" data-type="hador">
							<div class="tooltip__trigger" role="tooltip">
								<div id='regleClose'><i class="fas fa-times-circle fa-2x"></i></div>			
							</div>
							<div class="tooltip__base">
								<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
									<path class="path-hador-1" d="M 154,283 A 6.12,6.12 0 0 1 149,290 6.12,6.12 0 0 1 142,286 6.12,6.12 0 0 1 146,278 6.12,6.12 0 0 1 154,283 Z"/>
									<path class="path-hador-2" d="M 167,265 A 7.83,7.83 0 0 1 162,276 7.83,7.83 0 0 1 152,270 7.83,7.83 0 0 1 157,261 7.83,7.83 0 0 1 167,265 Z"/>
									<path class="path-hador-3" d="M 183,244 A 11.9,11.9 0 0 1 174,258 11.9,11.9 0 0 1 160,250 11.9,11.9 0 0 1 168,235 11.9,11.9 0 0 1 183,244 Z"/>
									<path class="path-hador-4" d="M 327,120 A 127,111 0 0 1 200,231 127,111 0 0 1 72.9,120 127,111 0 0 1 200,9.44 127,111 0 0 1 327,120 Z"/>
								</svg>
								<div class="tooltip__content info-hador">Fermer.</div>
							</div>
						</div>
				</div>
				<div id ='buttonAide'>
					<button class='autresOutilsBtn' id='regle'>Aide à la lecture<span id='fontawesome5'><i class="fas fa-check"></i></span></button>
				</div>
				
				<!--calculatrice-->
				<div class="grid__item">
						<div class="tooltip tooltip--hador" data-type="hador">
							<div class="tooltip__trigger" role="tooltip">
								<div id='calculatriceClose'><i class="fas fa-times-circle fa-2x"></i></div>			
							</div>
							<div class="tooltip__base">
								<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
									<path class="path-hador-1" d="M 154,283 A 6.12,6.12 0 0 1 149,290 6.12,6.12 0 0 1 142,286 6.12,6.12 0 0 1 146,278 6.12,6.12 0 0 1 154,283 Z"/>
									<path class="path-hador-2" d="M 167,265 A 7.83,7.83 0 0 1 162,276 7.83,7.83 0 0 1 152,270 7.83,7.83 0 0 1 157,261 7.83,7.83 0 0 1 167,265 Z"/>
									<path class="path-hador-3" d="M 183,244 A 11.9,11.9 0 0 1 174,258 11.9,11.9 0 0 1 160,250 11.9,11.9 0 0 1 168,235 11.9,11.9 0 0 1 183,244 Z"/>
									<path class="path-hador-4" d="M 327,120 A 127,111 0 0 1 200,231 127,111 0 0 1 72.9,120 127,111 0 0 1 200,9.44 127,111 0 0 1 327,120 Z"/>
								</svg>
								<div class="tooltip__content info-hador">Fermer.</div>
							</div>
						</div>
				</div>				
				<div id ='buttonCalc'>	
					<button class='autresOutilsBtn' id='calcu'>calculatrice <span id='fontawesome6'><i class="fas fa-check"></i></span></button>
		 		</div>
			
				<!--loupe-->
				<div class="grid__item">
						<div class="tooltip tooltip--hador" data-type="hador">
							<div class="tooltip__trigger" role="tooltip">
								<div id='loupeClose'><i class="fas fa-times-circle fa-2x"></i></div>			
							</div>
							<div class="tooltip__base">
								<svg class="tooltip__shape" width="100%" height="100%" viewBox="0 0 400 300">
									<path class="path-hador-1" d="M 154,283 A 6.12,6.12 0 0 1 149,290 6.12,6.12 0 0 1 142,286 6.12,6.12 0 0 1 146,278 6.12,6.12 0 0 1 154,283 Z"/>
									<path class="path-hador-2" d="M 167,265 A 7.83,7.83 0 0 1 162,276 7.83,7.83 0 0 1 152,270 7.83,7.83 0 0 1 157,261 7.83,7.83 0 0 1 167,265 Z"/>
									<path class="path-hador-3" d="M 183,244 A 11.9,11.9 0 0 1 174,258 11.9,11.9 0 0 1 160,250 11.9,11.9 0 0 1 168,235 11.9,11.9 0 0 1 183,244 Z"/>
									<path class="path-hador-4" d="M 327,120 A 127,111 0 0 1 200,231 127,111 0 0 1 72.9,120 127,111 0 0 1 200,9.44 127,111 0 0 1 327,120 Z"/>
								</svg>
								<div class="tooltip__content info-hador">Fermer.</div>
							</div>
					</div>
				</div>		
				<div id ='divloupeClick'>	
					<button class='autresOutilsBtn' id='loupe'>loupe pour images <span id='fontawesome7'><i class="fas fa-check"></i></span></button>
		 		</div>
				<br>


				<div id ='buttonTotal'>	
					<button class='autresOutilsBtn' id='reload'>Effacer tous les changements<span id='fontawesome8'><i class="fas fa-check"></i></span></button>
				</div>
				<br><br>
    	</div>


				<a href="#volet2" class="ouvrir2" aria-hidden="true">Outils </a>
				<a href="#volet_clos2" class="fermer2" aria-hidden="true">fermer</a>
			</div>
		</div>
	</div>


