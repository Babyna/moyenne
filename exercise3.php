<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Les fonctions php</title>
</head>
<body>
	<h2 style="color: blue">Les fonctions include et require</h2>

	<div>
			
		<p style="font-size: 1.1em">La fonction <strong>INCLUDE</strong> est optionelle, si le fichier n'esiste pas, PHP affichera une alerte (warning), mais il continuera l'execution du script.<br> 
		La fonction <strong>REQUIRE</strong> est obligatoire ou necesaire et elle générera une erreur fatale.<br><br>
		Il existe aussi les fonctions:<br><br>
		<strong>Requiere_once</strong><br>
		<strong>Incluide_once</strong><br>
		</p>
	</div>

		<p>Exemple code : <strong style="color: red">require 'exercise1.php';</strong></p>
		<h3>Je suis le require</h3>

	<div>

		<?php

			include 'index.html';
			//include 'exercise2.php';
			//require 'exercise1.php';
		?>

	</div>

	<div>
	
	</div>



</body>
</html>