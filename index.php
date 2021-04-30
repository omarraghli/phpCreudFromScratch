<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="afficher.php">Voir base de donné</a>
            <a class="navbar-brand" href="#">AJOUT DANS LA BASE DE DONNEES</a>
            <a class="navbar-brand" href="index.php">ajouter élément</a>
        </div>
    </nav>
</header>
<div class="container">
    <form method="post" action="ajouter.php">
      <label for="n">Nom</label>
      <input class="input-group mb-3" type="text" name="nom" id="n">
      <label for="p">Prenom</label>
      <input class="input-group mb-3" type="text" name="prenom" id="p">
      <label for="e">Age</label>
      <input class="input-group mb-3" type="text" name="age" id="e">
      <input class="btn btn-success" type="submit">
    </form>
</div>
<footer>
</footer>
</body>
</html>
