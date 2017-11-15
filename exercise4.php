<?php
	$etudiants = array(
			1 => array('Prenom' => 'Moussa', 'Nom' => 'Camara', 'Qualification' => '15'),
			2 => array('Prenom' => 'Veronica', 'Nom' => 'Ochoa', 'Qualification' => '15'),
			3 => array('Prenom' => 'Mateo', 'Nom' => 'Durant', 'Qualification' => '3'),
			4 => array('Prenom' => 'Jean', 'Nom' => 'Dupont', 'Qualification' => '7'),
			5 => array('Prenom' => 'Paul', 'Nom' => 'Parrot', 'Qualification' => '10'),
			6 => array('Prenom' => 'Thiery', 'Nom' => 'Lopez', 'Qualification' => '12')
			);

			// utiliser la boucle foreach

			//echo "<h3>Liste des etudiants en php</h3>";

			
     		// echo $key2 .': ' . $value2 . '<br />';
    			/*
    	*/
			
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="C:\wamp64\www\exercisePhp\exercise4.css">
	<title></title>
</head>

<body>

	<h1>Notes d'admition</h1>
	<div>
		<table>

			<caption>Liste des étudiantes général</caption>

			<thead>
				<tr>
       				<th>Id</th>
       				<th>Prenom</th>
       				<th>Nom</th>
       				<th>Qualification</th>
   				</tr>
   			</thead>

   			<tbody>
   				<?php
   					foreach($etudiants as $key1 => $value1)
					{
				?>
					<tr>
						<td><?php echo $key1; ?></td>
						<?php
  			 			foreach ($value1 as $key2 => $value2)
	    				{ ?>
						<td><?php echo $value2; ?></td>
	    				<?php } ?>
					</tr>
	    	  <?php }	?>
				
			</tbody>

		</table>
	</div>

	<div>

		<table>

			<caption>Liste des admis</caption>

			<thead>
				<tr>
       				<th>Id</th>
       				<th>Prenom</th>
       				<th>Nom</th>
       				<th>Qualification</th>
   				</tr>
   			</thead>

   			<tbody>
   				<?php
   					foreach($etudiants as $key1 => $value1)
					{
						if ($value1['Qualification'] > 9) {

						?>
						<tr>
							<td><?php echo $key1; ?></td>
						<?php
  			 		foreach ($value1 as $key2 => $value2)
	    			{ ?>
							<td><?php echo $value2; ?></td>
	    				<?php }?>
						</tr>
	    			<?php 
	    				}	
	    			}	
	   				?>
			</tbody>

		</table>

		<?php /*
	
			echo "<h3>Liste des admis</h3>";

			foreach($etudiants as $key1 => $value1)
			{
				if ($value1['Qualification'] > 9) {

					echo 'Id:' . $key1 .'<br />';
				
				foreach ($value1 as $key2 => $value2)
				{
					echo $key2 . ': ' . $value2 . '<br />';

					}
				}
			}
			*/
		?>
	</div>

	<div>
		<table>

			<caption>Liste des admis</caption>

			<thead>
				<tr>
       				<th>Id</th>
       				<th>Prenom</th>
       				<th>Nom</th>
       				<th>Qualification</th>
   				</tr>
   			</thead>

   			<tbody>
   				<?php
   					foreach($etudiants as $key1 => $value1)
					{
						if ($value1['Qualification'] < 9) {

						?>
						<tr>
							<td><?php echo $key1; ?></td>
						<?php
  			 		foreach ($value1 as $key2 => $value2)
	    			{ ?>
							<td><?php echo $value2; ?></td>
	    				<?php }?>
						</tr>
	    			<?php 
	    				}	
	    			}	
	   				?>
			</tbody>

		</table>

		<?php /*

			echo "<h3>Liste des non admis</h3>";

			foreach($etudiants as $key1 => $value1)
			{
				if ($value1['Qualification'] < 9) {

					echo 'Id:' . $key1 .'<br />';
				
				foreach ($value1 as $key2 => $value2)
				{
					echo $key2 . ': ' . $value2 . '<br />';

					}
				}
			}
			*/

		?>
			
			
	</div>



</body>
</html>