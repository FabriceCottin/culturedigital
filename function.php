<!DOCTYPE html>
<html>
<meta charset="utf-8" lang="fr">
<link rel="stylesheet" type="text/css" href="">
<head>
	<title>function date</title>
</head>
<body>
	<button id="timemaj1">1970-1974</button>
	<button id="timemaj2">1975-1979</button>
	<button id="timemaj3">1980-1984</button>
	<button id="timemaj4">1985-1989</button>
	<button id="timemaj5">1990-1994</button>
	<button id="timemaj6">1995-1999</button>
	<button id="timemaj7">2000-2004</button>
	<button id="timemaj8">2005-2009</button>
	<button id="timemaj9">2010-2014</button>
	<button id="timemaj10">2015-2020</button>
	<button id="timemaj11">View all</button>
	<button><a href="form.php">Add a new date</a></button>

	<div id="time1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>

	<script src="jquery/jquery.js"></script>

	<script>
		$(function() {
			$('#timemaj1').click(function(){
				$('#time1').load('date_70-75.php', function() {
					alert(data);				})
			})
		})

		$(function() {
			$('#timemaj2').click(function(){
				$('#time1').load('date_75-80.php', function() {
					alert(data);				})
			})
		})

		$(function() {
			$('#timemaj3').click(function(){
				$('#time1').load('date_80-85.php', function() {
					alert(data);				})
			})
		})

		$(function() {
			$('#timemaj4').click(function(){
				$('#time1').load('date_85-90.php', function() {
					alert(data);				})
			})
		})

		$(function() {
			$('#timemaj5').click(function(){
				$('#time1').load('date_90-95.php', function() {
					alert(data);				})
			})
		})

		$(function() {
			$('#timemaj6').click(function(){
				$('#time1').load('date_95-2000.php', function() {
					alert(data);				})
			})
		})

		$(function() {
			$('#timemaj7').click(function(){
				$('#time1').load('date_2000-2005.php', function() {
					alert(data);				})
			})
		})

		$(function() {
			$('#timemaj8').click(function(){
				$('#time1').load('date_2005-2010.php', function() {
					alert(data);				})
			})
		})

		$(function() {
			$('#timemaj9').click(function(){
				$('#time1').load('date_2010-2015.php', function() {
					alert(data);				})
			})
		})

		$(function() {
			$('#timemaj10').click(function(){
				$('#time1').load('date_2015-2020.php', function() {
					alert(data);				})
			})
		})

		$(function() {
			$('#timemaj11').click(function(){
				$('#time1').load('date_all.php', function() {
					alert(data);				})
			})
		})
	</script>
</body>
</html>