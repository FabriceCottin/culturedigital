<a href="form.php">Add a new date</a>
<?php
try {
	$bdd = new PDO('mysql:host=localhost;dbname=timeline;charset=utf8', 'root', '');	
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
$response = $bdd->query('SELECT * FROM date ORDER BY epoque');

while ($donnes = $response->fetch())

{
?>
	<p>
		<strong>Date</strong> : <?php echo $donnes['epoque']; ?>.<br> <strong>Description</strong> : <?php echo $donnes['description']; ?> <br>
	</p>


<?php 

}

$response->closeCursor();
?>


