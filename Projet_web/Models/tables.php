<?php
require_once 'DB.php';  

class Table {
    private string $nom;

    public function __construct(string $nom) {
        $this->nom = $nom;
    }

    public function getAll() {
        $pdo = DB::connect(); 
        $stmt = $pdo->prepare("SELECT * FROM " . $this->nom);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if (empty($result)) {
            echo "⚠ Aucun enregistrement trouvé dans la table " . $this->nom;
        }

        return $result;
    }

    public function addCours($titre, $description, $syllabus, $fichier_pdf) {
        $pdo = DB::connect(); 
        $stmt = $pdo->prepare("INSERT INTO cours (Titre, Description, Syllabus,Fichier_PDF) VALUES (:titre, :description, :syllabus, :fichier_pdf)");
        $stmt->execute([
            ':titre' => $titre,
            ':description' => $description,
            ':syllabus' => $syllabus,
            ':fichier_pdf' => $fichier_pdf
        ]);
    }

    public function addAnnonce($detail, $categorie, $date) {
        $pdo = DB::connect();
        $stmt = $pdo->prepare("INSERT INTO annonce (Detail, Categorie, Date) VALUES (:detail, :categorie, :date)");
        $stmt->execute([
            ':detail' => $detail,
            ':categorie' => $categorie,
            ':date' => $date
        ]);
    }
    public function addPublication($titre, $annee, $sujet, $type) {
        $pdo = DB::connect(); 
        $stmt = $pdo->prepare("INSERT INTO publication (Titre, Annee, Sujet, Type) VALUES (:titre, :annee, :sujet, :type)");
        $stmt->execute([
            ':titre' => $titre,
            ':annee' => $annee,
            ':sujet' => $sujet,
            ':type' => $type
        ]);
    }

    public function SupprimerPublication($id) {
        $pdo = DB::connect(); 
        $stmt = $pdo->prepare("DELETE FROM " . $this->nom . " WHERE id = :id");
        $stmt->execute([':id' => $id]);
    
        header("Location: PublicationController.php");
        exit();
    }
    
    public function SupprimerCours($id) {
        $pdo = DB::connect(); 
        $stmt = $pdo->prepare("DELETE FROM cours WHERE id = :id");
        $stmt->execute([':id' => $id]);
    
        header("Location: CoursController.php"); 
        exit();
    }
    public function SupprimerAnnonce($id) {
        $pdo = DB::connect();
        $stmt = $pdo->prepare("DELETE FROM annonce WHERE id = :id");
        $stmt->execute([':id' => $id]);
    
        header("Location: AnnonceController.php");
        exit();
    }
    
    
    
}

    


