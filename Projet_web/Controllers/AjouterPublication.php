<?php
require_once '../models/tables.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $titre = $_POST['titre'];
    $annee = $_POST['annee'];
    $sujet = $_POST['sujet'];
    $type = $_POST['type'];

    $publicationModel = new Table("publication");
    $publicationModel->addPublication($titre, $annee, $sujet, $type);

    echo "Publication ajoutée avec succès !";
}

require_once '../views/AjouterPublication.html'; 
?>
