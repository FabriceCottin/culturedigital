<?php
try {
	$bdd = new PDO('mysql:host=sql25;dbname=stu75863;charset=utf8', 'stu75863', '0xxUS0q0LGy');		
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}

$require =$bdd->prepare('INSERT INTO date (epoque, title, description, source, tag, name) VALUES(?, ?, ?, ?, ?, ?)');
$require->execute(array($_POST['epoque'], $_POST['title'], $_POST['description'], $_POST['source'], $_POST['tag'], $_POST['name']));
header('Location: date.php');

?>