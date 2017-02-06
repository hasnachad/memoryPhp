<!--ouverture du code php-->
<?php
	<!--déclaration des variables-->
 +	$tab = array("img/ane.jpg", "img/chat.jpg", "img/chien.jpg", "img/lama.jpg", "img/lapins.jpg", "img/lionne.jpg", "img/ours.jpg", "img/ane.jpg", "img/chat.jpg", "img/chien.jpg", "img/lama.jpg", "img/lapins.jpg", "img/lionne.jpg", "img/ours.jpg");
 +	$dos = 'img/dos.png';
 +	shuffle($tab); //Mélange tableau avec la fonction shuffle(fonction random)
 +?>
 +
 +<!DOCTYPE html>
 +<html>
 +<head>
 +	<title>Jeu des paires</title>
 +	<meta charset="utf-8">
 +	<link href="https://fonts.googleapis.com/css?family=Kumar+One" rel="stylesheet">
 +	<link rel="stylesheet" type="text/css" href="css/style.css">
 +	<script type="text/javascript"> //Ecriture du javascript. Déclaration du tableau js
 +		var tab = [ <?php             		
 +		foreach ($tab as $index => $case) { //Pour chaque case du tableau on affiche la var $tab
 +			echo '"'. $case . '"';          //Echo écrit dans la variable : "$case"
 +				if ($index != 13){ //Si l'index du tableau est différent de 13
 +					echo ',';      // Alors on écris la virgule après "$case", sinon pas de virgule
 +				}
 +					}?> //fin du php
 +				];
 + 		
 +	</script> <!--fin du javascript-->
 +</head>
 +<body>
 +	<div id="titre">
 +		<h1>JEU DES PAIRES</h1>
 +	</div>
 +	<p>Règles du jeu: Afficher toutes les paires pour gagner</p>
 +	<p>Vous avez trouvé <span id="paires">0</span> paires cachées</p>
 +	<span id="chronotime">00:00</span>
 +	<div id="photo"> 
 +		<!--ici PHP--> 
 +
 +			<?php
 +
 +			for($i=0; $i<=count($tab) -1 ; $i++) { //Boucle pour afficher 14 fois les photos de dos
 +					echo "<img src=" . $dos . " class='photo' onclick='choisir(" . $i . ")' draggable='false'>"; //écriture des balises images pour l'affichage de l'image dos'
 +			}
 +
 +			echo "<form method='get' action='index.php'><p>Pseudo : <input id='joueur' type='text' name='nomJoueur' /></p></form>"; //Ecriture du champ pour récuperer le nom du joueur
 +
 +			if (isset($_GET['nomJoueur'])) { //Si un nom de joueur est renseigné
 +				echo "<br /><div><input id='recommence' type='button' class='restart' value='Recommencer' onClick='RedirectionJavascript()''/></div>";//Ecriture bouton recommencer qui appel la fonction reload de la page
 +			}
 +			?>
 + 		<!--ici lien javascript--> 
 +		<script type="text/javascript" src="js/script.js"></script>
 +	</div>
 +</body>
 +</html> 