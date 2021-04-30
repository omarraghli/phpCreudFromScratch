<?php session_start();
/////////////////////////////////////////////////////////////////////////////////////////
$nvxnom;
$nvxprenom;
$nvxage;
$idch;
/////////////////////////////// verfication des entrées //////////////////////////////////
if(isset($_POST['name'])){
    $nvxnom=$_POST['name'];
}
if(isset($_POST['firstname'])){
    $nvxprenom=$_POST['firstname'];
}
if(isset($_POST['age'])){
    $nvxage=$_POST['age'];
}
//////////////////////////////////////////id à modifier/////////////////////////////////////
$idch=$_SESSION['IdToUpdat'];
///////////////////////////////////requette SQL////////////////////////////////////////////
try{
    $bdd = new PDO('mysql:host=localhost;dbname=test1;charset=utf8', 'root', '');
    $prep=$bdd->prepare('UPDATE personne SET nom=:nom , prenom=:prenom,age=:age WHERE id=:id');
    $prep->execute(array('nom' =>$nvxnom,'prenom' => $nvxprenom,'age' => $nvxage,'id' => $idch));
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
    <title>Modifier</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="afficher.php">Voir base de donné</a>
            <a class="navbar-brand" href="#">MODIFICATION COMPLETTE</a>
            <a class="navbar-brand" href="index.php">ajouter élément</a>
        </div>
    </nav>
</header>
<div class="messagef">
    <h1> l'élement a été bien modifier</h1>
</div>
<footer>
</footer>
</body>
</html>