<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Publications</title>
</head>
<body>
    <h1>Liste des Publications</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Année</th>
            <th>Sujet</th>
            <th>Type</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        <?php if (isset($publicationsList) && !empty($publicationsList)): ?>
            <?php foreach ($publicationsList as $publication): ?>
                <tr>
                    <td><?php echo htmlspecialchars($publication['id']); ?></td>
                    <td><?php echo htmlspecialchars($publication['Titre']); ?></td>
                    <td><?php echo htmlspecialchars($publication['Annee']); ?></td>
                    <td><?php echo htmlspecialchars($publication['Sujet']); ?></td>
                    <td><?php echo htmlspecialchars($publication['Type']); ?></td>
                    <td>
                        <a href="ModifierPublication.php?id=<?= $publication['id'] ?>">Modifier</a>
                    </td>
                    <td>
    <a href="PublicationController.php?id=<?= htmlspecialchars($publication['id']); ?>" 
       onclick="return confirm('Voulez-vous vraiment supprimer cette publication ?');">
        Supprimer
    </a>
</td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="7">Aucune publication trouvée.</td></tr>
        <?php endif; ?>
    </table>
    <br>
    <a href="AjouterPublication.php">Ajouter une publication</a>
</body>
</html>
