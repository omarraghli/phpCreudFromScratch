<?php session_start();
$_SESSION['IdToUpdat']=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifier</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="afficher.php">Voir base de donné</a>
        <a class="navbar-brand" href="#">MODIFIER UN ELEMENT</a>
        <a class="navbar-brand" href="index.php">ajouter élément</a>
        </div>
    </nav>

</header>
<div class="container">
    <form action="modifier.php" method="post">
        <label for="nvxn">Nouveau nom</label>
        <input class="input-group mb-3" name="name" id="nvxn" type="text">
        <label for="nvxp">Nouveau prénom</label>
        <input class="input-group mb-3" name="firstname" id="nvxp" type="text">
        <label for="nvxa">Nouveau age</label>
        <input class="input-group mb-3" name="age" id="nvxa" type="text">
        <input class="btn btn-success" type="submit">
    </form>
</div>
<footer>
</footer>
</body>
</html>