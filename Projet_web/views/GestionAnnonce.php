<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Annonces</title>
</head>
<body>
    <h1>Liste des Annonces</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Détail</th>
            <th>Catégorie</th>
            <th>Date</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        <?php if (isset($annoncesList) && !empty($annoncesList)): ?>
            <?php foreach ($annoncesList as $annonce): ?>
                <tr>
                    <td><?php echo htmlspecialchars($annonce['id']); ?></td>
                    <td><?php echo htmlspecialchars($annonce['Detail']); ?></td>
                    <td><?php echo htmlspecialchars($annonce['Categorie']); ?></td>
                    <td><?php echo htmlspecialchars($annonce['Date']); ?></td>
                    <td>
                        <a href="ModifierAnnonce.php?id=<?php echo $annonce['id']; ?>">Modifier</a>
                    </td>
                  <td>
    <a href="AnnonceController.php?id=<?= htmlspecialchars($annonce['id']); ?>" 
       onclick="return confirm('Voulez-vous vraiment supprimer cette annonce ?');">
        Supprimer
    </a>
</td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="6">Aucune annonce trouvée.</td></tr>
        <?php endif; ?>
    </table>
    <br>
    <a href="AjouterAnnonce.php">Ajouter une annonce</a>
</body>
</html>
