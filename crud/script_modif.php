<?php 
// Dans ce fichier, nous récupérons les informations pour réaliser la requête de modification : UPDATE

// Récupération des informations passées en POST, nécessaires à la modification

$id_affiche=$_POST['id'];
$nom_affiche=$_POST['nom'];
$stock_affiche=$_POST['stock'];
$description_affiche=$_POST['description'];
$prix_affiche=$_POST['prix'];

// Connexion à la base de données
require "connexion_bdd.php";

// Construction de la requête UPDATE sans injection SQL
try {
$requete = $db->prepare("UPDATE station SET sta_nom=:sta_nom, sta_altitude=:sta_altitude WHERE sta_id=:sta_id");

$requete->bindValue(':aff_nom', $nom_affiche, PDO::PARAM_STR);
$requete->bindValue(':aff_stock', $stock_affiche, PDO::PARAM_INT);
$requete->bindValue(':aff_id', $id_affiche, PDO::PARAM_INT);
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

// Redirection vers la page index.php A MODIFIER
header("Location: index.php");
exit;

?>