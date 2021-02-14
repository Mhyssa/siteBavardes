<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail</title>
</head>
<body>

<?php

require "connexion_bdd.php";

?>

<?php

try {
    // Récupération de l'identifiant concerné, passé en GET
    $sta_id=$_GET['aff_id'];

    $requete = "SELECT * FROM affiches where aff_id=".$aff_id;
    $result = $db->query($requete);

    // Récupération du résultat de la requête

    $row = $result->fetch(PDO::FETCH_OBJ);

    // Libération de la connexion au serveur de BDD
    $result->closeCursor();
}

catch (Exception $e) {

        echo "La connexion à la base de données a échoué ! <br>";
        echo "Merci de bien vérifier vos paramètres de connexion ...<br>";
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
        die("Fin du script");
}
?>

<div>

     Identifiant : <?php echo   $row->aff_id."<br>"; ?>
     Nom de l'affiche' : <?php echo   $row->aff_nom."<br>"; ?>
     Stock : <?php  echo   $row->aff_stock."<br>"; ?>
     Description : <?php  echo   $row->aff_description."<br>"; ?>
     Prix : <?php  echo   $row->aff_prix."<br>"; ?>

</div>

</body>
</html>