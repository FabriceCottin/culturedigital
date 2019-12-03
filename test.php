<!DOCTYPE html>
<html>
<meta charset="utf-8" lang="fr">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/layer.css">
<head>
	<title>Test mise en page</title>
</head>
<body>
		<img class="fond" src="images/image1.jpg">
	<header>		
		
		<nav>
			<ul>
				<li>1970 - 1974</li>
				<li>1975 - 1979</li>
				<li>1980 - 1984</li>
				<li>1985 - 1989</li>
				<li>1990 - 1994</li>
				<li>1995 - 1999</li>
				<li>2000 - 2004</li>
				<li>2005 - 2009</li>
				<li>2010 - NOW</li>
			</ul>
		</nav>
	</header>

	<section class="mise-en-forme">

		<div class="date">
			<?php echo  ($donnes['epoque']); ?>
		</div>

		<div class="title">
			<?php echo ($donnes['title']); ?>
		</div>

		<div class="description">
			<?php echo ($donnes['description']); ?>
		</div>

	</section>

	<?php
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=timeline;charset=utf8', 'root', '');	
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
	$response = $bdd->query('SELECT epoque, title, description FROM date WHERE epoque BETWEEN "1970-01-01" AND "1974-12-31" ORDER BY `date`.`epoque` ASC');

	while ($donnes = $response->fetch()) {
	?>
	<?php 
	}
	$response->closeCursor();
	?>
</body>
</html>



 
