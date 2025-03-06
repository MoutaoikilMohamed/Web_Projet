<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
</head>
<body>
    <h2>Bienvenue, <?php echo htmlspecialchars($_SESSION['user']['nom']); ?> !</h2>
    <p><a href="logout.php">Se déconnecter</a></p>
    
    <h3>Gestion des Contenus</h3>
    <ul>
        <li><a href="../Controllers/PublicationController.php">Gestion des Publications</a></li>
        <li><a href="../Controllers/CoursController.php">Gestion des Cours</a></li>
        <li><a href="../Controllers/AnnonceController.php">Gestion des Annonces</a></li>
        <li><a href="../Controllers/AnnonceController.php">Gestion des contact</a></li>
        <li><a href="../Controllers/AnnonceController.php">Gestion des Forums</a></li>

    </ul>
</body>
</html>
