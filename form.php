<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">


    <title>Formulaire d'insertion de date</title>
  </head>
<body>

  <h1 class="center">Ajouter des dates pour la TimeLine</h1>
  <div class="centre">
<form name="insertion" action="form2.php" method="POST">
  <table border="0" cellspacing="10" cellpadding="10">
    <tr>
      <td>Date :</td>
      <td><input type="date" name="epoque"></td>
    </tr>
        <tr>
      <td>Titre :</td>
      <td><input type="text" name="title"></td>
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
      <td>Tag :</td>
      <td><input type="text" name="tag"></td>
    </tr> 
    <tr>
      <td>Nom :</td>
      <td><input type="text" name="name"></td>
    </tr> 
    <tr>
      <td class="envoie"><input type="submit" value="insérer"></td>
    </tr>
  </table>
  </div>
</form>
</body>
</html>