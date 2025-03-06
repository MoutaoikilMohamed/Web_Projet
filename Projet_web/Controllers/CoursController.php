<?php
require_once '../models/tables.php';
$cours = new Table("cours"); 
$coursList = $cours->getAll();


if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 
    $cours->SupprimerCours($id); 
}
require_once '../views/GestionCours.php';




?>
