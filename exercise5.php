<?php
	if (isset()) {
		
		
	}

echo $_GET[nom]; // Methode GET
echo $_POST[nom]; // Methode POST
echo $_GET[prenom]; // methode POST

?>



<!DOCTYPE html>
<html>
<head>
	<title>Formulaires</title>
</head>
<body>
	<form action="index.php" method="Get">
		<label for="nom">Nom :</label>
		<input type="test" name="nom" id="nom"><br>
		<label for="prenom">Preom :</label>
		<input type="test" name="prenom" id="prenom"><br>
		<label for="adresse">Adresse :</label>
		<input type="test" name="adresse" id="adresse"><br>
		<input type="submit">
	</form>



</body>
</html>