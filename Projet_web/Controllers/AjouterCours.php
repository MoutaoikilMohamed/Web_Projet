<?php
require_once '../models/tables.php';


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $titre = $_POST['titre'];
        $description = $_POST['description'];
        $syllabus = $_POST['syllabus'];
        $fichier_pdf = $_FILES['fichier_pdf']['name'];

        if (move_uploaded_file($_FILES['fichier_pdf']['tmp_name'], "../uploads/" . $fichier_pdf)) {
            $coursModel = new Table("cours");
            $coursModel->addCours($titre, $description, $syllabus, $fichier_pdf);
            echo "Cours ajouté avec succès !";
        } else {
            echo "Erreur lors du téléchargement du fichier.";
        }
    }

    require_once '../views/AjouterCours.html'; 

?>
