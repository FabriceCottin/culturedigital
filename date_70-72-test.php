<!DOCTYPE html>
<html>
<meta charset="utf-8" lang="fr">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/layer.css">
<head>
	<title>function 2010-2010</title>
</head>
<body>

	<?php
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=timeline;charset=utf8', 'root', '');	
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
	$response = $bdd->query('SELECT epoque, title, description, tag FROM date WHERE epoque BETWEEN "1973-01-01" AND "1975-12-31" ORDER BY `date`.`epoque` ASC');

	while ($donnes = $response->fetch())

	{
	?>

		<div id="mise-en-forme">
			<div class="date"><?php echo ($donnes['epoque']); ?> | <?php echo ($donnes['tag']); ?><br></div>
			<div class="title"><?php echo ($donnes['title']); ?><br></div>
			<div class="description"><?php echo ($donnes['description']); ?><br></div>
		</div>

	<?php 

	}

	$response->closeCursor();
	?>

</body>
</html>



 


 
