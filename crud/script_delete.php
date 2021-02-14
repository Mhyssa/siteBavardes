<?php

//récupération de l'identifiant passé en GET
$aff_id=$_GET['aff_id'];

//permet de vérifier que l'on a bien l'identifiant attendu
//mettre le header plus bas en commentaire !

//var_dump("id : ".$aff_id);
//echo("<br>");

//**********     connection à la base de données    **********

// si la ligne : 'require "connection_bdd.php";', ci-dessous est décommentée, 
// il faut commenter la ligne : '$db = new PDO('mysql:host=localhost;charset=utf8;dbname=hotel', 'root', '');'
//et décommenter la ligne : '$db = new PDO('mysql:host='.$host.';charset=utf8;dbname='.$base.'', $login, $password);'

//require "connection_bdd.php";

try{        
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=bavardes_site', 'root', '');
    //$db = new PDO('mysql:host='.$host.';charset=utf8;dbname='.$base.'', $login, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (Exception $e) {

    echo "La connection à la base e données a échoué ! <br>";
    echo "Merci de bien vérifier vos paramètres de connection ...<br>";
    echo "Erreur : " . $e->getMessage() . "<br>";
    echo "N° : " . $e->getCode();
    die("Fin du script");
}

//construction de la requête DELETE sans injection SQL

$requete = $db->prepare("DELETE from affiches WHERE aff_id=:aff_id");

//$requete->bindValue(':aff_nom', $nom_affiche, PDO::PARAM_STR);
//$requete->bindValue(':aff_stock', $stock_affiche, PDO::PARAM_INT);
//$requete->bindValue(':aff_description', $description_affiche, PDO::PARAM_STR);
//$requete->bindValue(':aff_prix', $prix_affiche, PDO::PARAM_INT);

$requete->bindValue(':aff_id', $aff_id, PDO::PARAM_INT);

$requete->execute();

//libère la connection au serveur de BDD
$requete->closeCursor();

//redirection vers index.php A MODIFIER
header("Location: index.php");

?>
