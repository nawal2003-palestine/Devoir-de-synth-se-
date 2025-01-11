<?php
session_start();
require_once '../../Acces_BD/Administrateur.php';
$etudiants = Lister();

include '../public/header.php';
include '../public/nav_barre.php';
?>

<h2>Liste des étudiants</h2>
<table border="1">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Sexe</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($etudiants as $etudiant): ?>
        <tr>
            <td><?= $etudiant['nom'] ?></td>
            <td><?= $etudiant['prenom'] ?></td>
            <td><?= $etudiant['email'] ?></td>
            <td><?= $etudiant['sexe'] ?></td>
            <td>
                <a href="affichage.php?code=<?= $etudiant['code'] ?>">Afficher</a> |
                <a href="form.php?code=<?= $etudiant['code'] ?>">Modifier</a> |
                <a href="../../Gestion_Actions/Administrateur.php?action=supprimer&code=<?= $etudiant['code'] ?>" 
                   onclick="return confirm('Confirmer la suppression ?');">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include '../public/footer.php'; ?>
