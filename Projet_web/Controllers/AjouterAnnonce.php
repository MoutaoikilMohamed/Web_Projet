<?php
require_once '../models/tables.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $detail = $_POST['detail'];
    $categorie = $_POST['categorie'];
    $date = $_POST['date'];

    $annonceModel = new Table("annonce");
    $annonceModel->addAnnonce($detail, $categorie, $date);

    echo "Annonce ajoutée avec succès !";
}

require_once '../views/AjouterAnnonce.html'; 
?>
