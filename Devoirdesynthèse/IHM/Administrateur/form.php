<?php include_once '../public/header.php'; ?>
<?php include_once '../public/nav_barre.php'; ?>

<h2>Ajouter/Modifier un étudiant</h2>
<form action="save.php" method="POST" enctype="multipart/form-data">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" required>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" required>

    <label for="email">Email :</label>
    <input type="email" name="email" required>

    <label for="sexe">Sexe :</label>
    <select name="sexe" required>
        <option value="M">Masculin</option>
        <option value="F">Féminin</option>
    </select>

    <label for="photo">Photo :</label>
    <input type="file" name="photo">

    <label for="specialite">Spécialité :</label>
    <input type="text" name="specialite" required>

    <button type="submit">Enregistrer</button>
</form>

<?php include_once '../public/footer.php'; ?>
