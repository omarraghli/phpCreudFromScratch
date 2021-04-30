<?php
$bdd = new PDO('mysql:host=localhost;dbname=test1;charset=utf8', 'root', '');
$resultat=$bdd->query('SELECT * FROM personne');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>affichage</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="afficher.php">Voir base de donné</a>
        <a class="navbar-brand" href="#">AFFICHAGE BASE DE DONNEES</a>
        <a class="navbar-brand" href="index.php">ajouter élément</a>
        </div>
    </nav>

</header>
<div class="tabprincipale">
    <table>
        <th> Id </th>
        <th> Nom </th>
        <th> Prénom </th>
        <th> Age </th>
        <?php
        while ($donnees = $resultat->fetch()){ 
        ?>
        <tr>  
            <td><?php echo $donnees['id'] ; ?> </td> 
            <td> <?php echo $donnees['nom'] ; ?> </td>
            <td> <?php echo $donnees['prenom'] ; ?> </td>
            <td> <?php echo $donnees['age'] ; ?>  </td>
            <td><a class="btn btn-danger" href="supprimer.php?id=<?php echo$donnees['id'] ?>">Supprimer</a></td>
            <td><a class="btn btn-success" href="premodifier.php?id=<?php echo$donnees['id'] ?>">Modifier</a></td>
        <?php }?>
        </tr>
    </table>

</div>
<footer>
</footer>
</body>
</html>