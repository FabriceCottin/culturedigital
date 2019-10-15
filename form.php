<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">


    <title>Formulaire d'insertion de date</title>
  </head>
<body>

  <h1 class="center">Ajouter des dates pour la TimeLine</h1>
<form name="insertion" action="form2.php" method="POST">
  <table border="0" cellspacing="10" cellpadding="10">
    <tr>
      <td>Date :</td>
      <td><input type="text" name="epoque"></td>
    </tr>
    <tr>
      <td>Description :</td>
      <td><input type="text" name="description"></td>
    </tr>
    <tr>
      <td>Source :</td>
      <td><input type="text" name="source"></td>
    </tr> 
    <tr>
      <td colspan="2"><input type="submit" value="insérer"></td>
    </tr>
  </table>
</form>
</body>
</html>