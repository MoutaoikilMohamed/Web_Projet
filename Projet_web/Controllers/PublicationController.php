<?php
require_once '../models/tables.php';

$publications = new Table("publication");
$publicationsList = $publications->getAll();  


if (isset($_GET['id'])) {
    
    $id = intval($_GET['id']); 
    $publications->SupprimerPublication($id); 
}
require_once '../views/GestionPublication.php'; 


?>
