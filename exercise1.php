
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>exercise1 PHP</title>
</head>
<body>
	<p style="background: pink; width: 500px;">Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
	<h1> exercise1 PHP</h1>

		<?php echo 'hello world'; ?>
		<?php 

		$numero = 2;
		$caracter = "hola";
		$var1 = 20.3;
		echo $numero. '<br>'.$caracter. '<br>'.$var1. '<br>';

		$var0 = "Ochoa";
		$var1 = "Veronica";
		$resultat = $var0."-". $var1;
		echo $resultat. '<br>';


		//concatenation
		$var1 = 'Aston';
		$var2 = 'informatique';
		$var3 = 1;
		echo $var1 . ' ecole ' . $var2 . ' numero ' . $var3. '<br>';


		//table 
		$mois = array("janvier", "fevrier");
		print_r ($mois);

		//Interpolation 
		$salutation = 'bonjour';
		$nom = 'Ochoa';
		$prenom = 'Veronica';
		echo "$salutation $prenom";

		?>


		<table>
			<th>Nom</th>
			<th>prenom</th>

			<tr>
				<td><?php echo $nom; ?></td>
				<td><?php echo $prenom; ?></td>

			</tr>

		</table>

<div>
	
<?php
	//variable globale et locale

	$global = 'ma variable global';

	function text () {
		$locale = 'ma varibale local';

		echo $locale;

	}

		echo $global. '<br>';
		text(); 
?>

</div>

<div>
	
	<?php
	//operation arithmetiques
  	function addition($nombre1, $nombre2){
  		$resultat=$nombre1 + $nombre2;
  		return $resultat;
 	}
  	echo addition (15,1);
?>

</div>


<div>
	
	<?php
	//operation arithmetiques
  	function sustraction($nombre1, $nombre2){
  		$resultat=$nombre1 - $nombre2;
  		return $resultat;
 	}
  	echo sustraction (15,1);
?>

</div>

<div>
	
	<?php
	//operation arithmetiques
  	function multiplication($nombre1, $nombre2){
  		$resultat=$nombre1 * $nombre2;
  		return $resultat;
 	}
  	echo multiplication (15,1);
?>

</div>

<div>
	
	<?php
	//operation arithmetiques
  	function division($nombre1, $nombre2){
  		$resultat=$nombre1 / $nombre2;
  		return $resultat;
 	}
  	echo division (16,2);
?>

</div>


<div>
	
	<?php
	//operation arithmetiques
  	function modulo($nombre1, $nombre2){
  		$resultat=$nombre1 % $nombre2;
  		return $resultat;
 	}
  	echo modulo (20,3);
?>

</div>

<div>
	
	<?php
	//operation arithmetiques
  	function sommes($nombre1, $nombre2, $nombre3){
  		$resultat=$nombre1 + $nombre2 + $nombre3;
  		return $resultat;
 	}
  	echo sommes (15,1,3);
?>

</div>

<div>
	
	<?php
	//operation arithmetiques
  	function multisom($nombre1, $nombre2, $nombre3){
  		$resultat=($nombre1 * $nombre2) + $nombre3;
  		return $resultat;
 	}
  	echo multisom (15,1,3);
?>

</div>

<div>
	
	<?php
	//operation arithmetiques
  	function sommulti($nombre1, $nombre2, $nombre3){
  		$resultat=$nombre1 * ($nombre2 + $nombre3);
  		return $resultat;
 	}
  	echo sommulti (15,1,3);
?>

</div>

<div>
	
	<?php
	//operation arithmetiques
  	function exponentielle($nombre1){
  		$resultat= exp($nombre1);
  		return $resultat;
 	}
  	echo exponentielle (3);
?>

</div>

<div>
	
	<?php
	//operation arithmetiques
  	function puissanse($nombre1, $nombre2){
  		$resultat= pow($nombre1,$nombre2);
  		return $resultat;
 	}
  	echo puissanse (10,3);
?>

</div>


<div>
	<?php
	//operation arithmetiques
  	function raice($nombre1){
  		$resultat= sqrt($nombre1);
  		return $resultat;
 	}
  	echo raice (4);
?>

</div>

<div>
	<?php
	$nombre = -4;

	if($nombre == 0)
	{

		echo "le nombre est égal zero";
	}
	elseif ($nombre > 0) 
	{
		echo "le nombre positif";
	}
	else
	{
		echo "le nombre est negatif";
	}

	?>
</div>







<div>
	
<?php
	$age = 18;
	$majeur =($age >= 18)?true : false;

?>
</div>

<div>
<?php

	if ( $age == 18) {

	$majeur = true;

	}else {
	 $majeur = false; 

	}

?>

</div>


<div>
<?php

$i = 00;

	if ($i == 17) {
	    echo "c est la police";
	} elseif ($i == 18) {
	    echo "c est les pompiers";
	} elseif ($i == 06 ||  $i == 07 ) {
	    echo "c est un mobile";
	} elseif ( $i == 01 || $i == 02 ) {
	    echo "c est un fixe";
	} elseif ( $i == 08 || $i == 09 ) {
	    echo "c est un fixe";
	} elseif ( $i == 00) {
		echo "c est numero etrangere";
	}

?>


<?php /*
	switch ($i) {
		case 17:
			echo 'c est la pogfhhyglice';
			break;
		case 18:
			echo 'c est les pompiers';
			break;
		case 06:
		case 07:
			echo 'c est un mobile';
			break;
		case 01:
		case 02:
		case 08:
		case 09:
			echo 'c est un fixe';
			break;
		default:
			echo 'c est un numero etranger';
			break;
	}*/
?>

</div>






	</body>
</html>


