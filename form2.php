<?php
try {
	$bdd = new PDO('mysql:host=localhost;dbname=timeline;charset=utf8', 'root', '');	
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}

$require =$bdd->prepare('INSERT INTO date (epoque, description, source) VALUES(?, ?, ?)');
$require->execute(array($_POST['epoque'], $_POST['description'], $_POST['source']));
header('Location: date.php');

?>