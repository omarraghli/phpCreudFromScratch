<?php session_start();
/////////////////////////////////////////////////////////////////////////////
$nom='';
$prenom='';
$age=0;
/////////////////////////////////////////////////////////////////////////////
if(isset($_POST['nom'])){
    $nom=$_POST['nom'];
}

if(isset($_POST['prenom'])){
    $prenom=$_POST['prenom'];
}

if(isset($_POST['age'])){
    $age=$_POST['age'];
}
////////////////////////////////////////////////////////////////////////////////
try{
    $bdd = new PDO('mysql:host=localhost;dbname=test1;charset=utf8', 'root', '');
    $req=$bdd->prepare('INSERT INTO personne (nom,prenom,age) VALUES(:nom,:prenom,:age)');
    $req->execute(array('nom' =>$nom ,
        'prenom' =>$prenom ,
        'age' =>$age
    ));
}
catch(Exception $e){
    die('Erreur : ' . $e->getMessage()); 
}

//////////////////////////////////////////////////////////////////////////////////
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="afficher.php">Voir base de donné</a>
        <a class="navbar-brand" href="afficher.php">AJOUT AVEC SUCCEE</a>
        <a class="navbar-brand" href="index.php">ajouter élément</a>
        </div>
    </nav>
</header>
    <div class="messagef">
        <h1>élément a été bien ajouté</h1>
    </div>
    <footer>
    </footer>
</body>
</html>


