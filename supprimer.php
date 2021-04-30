<?php   
 session_start();
try{
    $bdd = new PDO('mysql:host=localhost;dbname=test1;charset=utf8', 'root', '');
    $r=$bdd->prepare('DELETE  FROM personne WHERE id=:id');
    $r->execute(array('id' =>$_GET['id']));
}
catch(Exception $e){
    die('Erreur : ' . $e->getMessage()); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>supprimer</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="afficher.php">Voir base de donné</a>
        <a class="navbar-brand" href="#">SUPPRESSION ELEMENT</a>
        <a class="navbar-brand" href="index.php">ajouter élément</a>
        </div>
    </nav>

</header>
    <div class="messagef">
        <h1>l'élement a été bien suprimé</h1>
    </div>
    <footer>
    </footer>
</body>
</html>