<!DOCTYPE html>
<html>
<meta charset="utf-8" lang="fr">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/date.css">
<head>
	<title>function 80-85</title>
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
$response = $bdd->query('SELECT epoque, title, description FROM date WHERE epoque BETWEEN "1980-01-01" AND "1984-12-31" ORDER BY `date`.`epoque` ASC');

while ($donnes = $response->fetch())

{
?>
	<div class="container">
		<h2><strong>Date</strong> : <?php echo  ($donnes['epoque']); ?><br></h2>
		<h3><strong>Titre</strong> : <?php echo ($donnes['title']); ?><br></h3>
	<p>
		<strong>Description</strong> : <?php echo ($donnes['description']); ?><br>
	</p>
</div>	

<?php 

}

$response->closeCursor();
?>

</body>
</html>



 


 
