<!DOCTYPE html>
<html>
<meta charset="utf-8" lang="fr">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/layer.css">
<head>
	<title>function 1970 - 1972</title>
</head>
<body>
	<div class="containers">
	<img class="fond" src="images/image1.png">
	<div class="test-hr"></div>
	<header>		
		<nav>
			<ul>
				<button id="timemaj1">1970 - 1974</button>
				<li id="timemaj2">1975 - 1979</li>
				<li id="timemaj3">1980 - 1984</li>
				<li id="timemaj4">1985 - 1989</li>
				<li id="timemaj5">1990 - 1994</li>
				<li id="timemaj6">1995 - 1999</li>
				<li id="timemaj7">2000 - 2004</li>
				<li id="timemaj8">2005 - 2009</li>
				<button id="timemaj9"> 2010 - NOW</button>
			</ul>
		</nav>
	</header>
<?php
try {
	$bdd = new PDO('mysql:host=localhost;dbname=timeline;charset=utf8', 'root', '');	
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
$response = $bdd->query('SELECT epoque, title, description, tag FROM date WHERE epoque BETWEEN "1970-01-01" AND "1972-12-31" ORDER BY `date`.`epoque` ASC');

while ($donnes = $response->fetch())

{
?>
<section class="cards">
	<div id="mise-en-forme">
		<div class="mise-en-page">
			<div class="date"><?php echo ($donnes['epoque']); ?> | <?php echo ($donnes['tag']); ?><br></div>
			<div class="title"><?php echo ($donnes['title']); ?><br></div>
			<div class="description"><?php echo ($donnes['description']); ?><br></div>
		</div>
	</div>	
</section>

</div>
<?php 

}

$response->closeCursor();
?>

	<script src="jquery/jquery.js"></script>

	<script>
		$(function() {
			$('#timemaj1').click(function(){
				$('#mise-en-forme').load('date_70-72-test.php', function() {
					alert(data);
				})
			})
		})


		$(function() {
			$('#timemaj9').click(function(){
				$('#mise-en-forme').load('date_2015-2020-test.php', function() {
					alert(data);
				})
			})
		})
	</script>
</body>
</html>



 


 
