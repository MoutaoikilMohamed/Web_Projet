<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Cours</title>
</head>
<body>
    <h1>Liste des Cours</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Syllabus</th>
            <th>Fichier PDF</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        <?php if (isset($coursList) && !empty($coursList)): ?>
            <?php foreach ($coursList as $cours): ?>
                <tr>
                    <td><?php echo htmlspecialchars($cours['id']); ?></td>
                    <td><?php echo htmlspecialchars($cours['Titre']); ?></td>
                    <td><?php echo htmlspecialchars($cours['Description']); ?></td>
                    <td><?php echo htmlspecialchars($cours['Syllabus']); ?></td>
                    <td><?php echo htmlspecialchars($cours['Fichier_pdf']); ?></td>
                    <td>
                        <a href="ModifierCours.php?id=<?php echo $cours['id']; ?>">Modifier</a>
                    </td>
                    <td>
                        <a href="CoursController.php?id=<?= htmlspecialchars($cours['id']); ?>" 
                           onclick="return confirm('Voulez-vous vraiment supprimer ce cours ?');">
                            Supprimer
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="7">Aucun cours trouvé.</td></tr>
        <?php endif; ?>
    </table>
    <br>
    <a href="AjouterCours.php">Ajouter un cours</a>
</body>
</html>
