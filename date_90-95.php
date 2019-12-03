<!DOCTYPE html>
<html>
<meta charset="utf-8" lang="fr">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/date.css">
<head>
	<title>function 90-95</title>
</head>
<body>
<?php
try {
	$bdd = new PDO('mysql:host=sql25;dbname=stu75863;charset=utf8', 'stu75863', 'MoyaFabou080818!');	
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
$response = $bdd->query('SELECT epoque, title, description FROM date WHERE epoque BETWEEN "1990-01-01" AND "1994-12-31" ORDER BY `date`.`epoque` ASC');

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



 


 
