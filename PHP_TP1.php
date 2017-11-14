<!DOCTYPE html>
<html>
<head>
	<title>PHP_TP1</title>
</head>

<body>
	<h1>Exercise 1 PHP</h1>

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