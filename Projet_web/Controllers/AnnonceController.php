<?php
require_once '../models/tables.php';
$annonces = new Table("annonce");
$annoncesList = $annonces->getAll();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $annonces->SupprimerAnnonce($id); 
}

require_once '../views/GestionAnnonce.php'; 
?>
