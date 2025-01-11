<?php
session_start();
require_once '../../Acces_BD/Etudiant.php';

// Vérification de l'utilisateur connecté
if ($_SESSION['role'] !== 'etudiant') {
    header('Location: ../../index.php');
    exit();
}

// Récupérer les informations actuelles de l'étudiant
$etudiant = GetProfil($_SESSION['user_id']);

include '../public/header.php';
include '../public/nav_barre.php';
?>

<h2>Modifier mon profil</h2>
<form action="../../Gestion_Actions/Etudiant.php?action=modifier_profil" method="POST" enctype="multipart/form-data">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" value="<?= htmlspecialchars($etudiant['nom']) ?>" required>
    
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" value="<?= htmlspecialchars($etudiant['prenom']) ?>" required>
    
    <label for="email">Email :</label>
    <input type="email" name="email" value="<?= htmlspecialchars($etudiant['email']) ?>" required>
    
    <label for="sexe">Sexe :</label>
    <select name="sexe" required>
        <option value="M" <?= $etudiant['sexe'] === 'M' ? 'selected' : '' ?>>Masculin</option>
        <option value="F" <?= $etudiant['sexe'] === 'F' ? 'selected' : '' ?>>Féminin</option>
    </select>
    
    <label for="specialite">Spécialité :</label>
    <input type="text" name="specialite" value="<?= htmlspecialchars($etudiant['specialite']) ?>" required>
    
    <label for="photo">Photo :</label>
    <input type="file" name="photo">
    <input type="hidden" name="photo_old" value="<?= htmlspecialchars($etudiant['photo']) ?>">
    
    <button type="submit">Enregistrer</button>
</form>

<?php include '../public/footer.php'; ?>
