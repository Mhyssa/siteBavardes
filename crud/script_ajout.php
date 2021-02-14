<?php

// Récupération des informations passées en POST, nécessaires à la modification

$nom_affiche=$_POST['nom'];
$stock_affiche=$_POST['stock'];
$description_affiche=$_POST['description'];
$prix_affiche=$_POST['prix'];

// Connexion à la base de données

require "connexion_bdd.php";

try {
// Construction de la requête INSERT sans injection SQL

$requete = $db->prepare("INSERT INTO station (sta_nom,sta_altitude) VALUES (:sta_nom,:sta_altitude)");

$requete->bindValue(':aff_nom', $nom_affiche, PDO::PARAM_STR);
$requete->bindValue(':aff_stock', $stock_affiche, PDO::PARAM_INT);
$requete->bindValue(':aff_description', $description_affiche, PDO::PARAM_STR);
$requete->bindValue(':aff_prix', $prix_affiche, PDO::PARAM_INT);

$requete->execute();

// Libération de la connexion au serveur de BDD
$requete->closeCursor();
}

// Gestion des erreurs
catch (Exception $e) {

        echo "La connexion à la base de données a échoué ! <br>";
        echo "Merci de bien vérifier vos paramètres de connexion ...<br>";
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
        die("Fin du script");
}

// Redirection vers la page index.php
header("Location: index.php");
exit;
?>