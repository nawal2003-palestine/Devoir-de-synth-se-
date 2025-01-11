<?php include_once '../public/header.php'; ?>
<?php include_once '../public/nav_barre.php'; ?>
<?php require_once '../../Acces_BD/Administrateur.php'; ?>

<?php
if (isset($_GET['code'])) {
    $etudiant = GetById($_GET['code']);
}
?>

<h2>Détails de l'étudiant</h2>
<p><strong>Nom :</strong> <?php echo $etudiant['nom']; ?></p>
<p><strong>Prénom :</strong> <?php echo $etudiant['prenom']; ?></p>
<p><strong>Email :</strong> <?php echo $etudiant['email']; ?></p>
<p><strong>Sexe :</strong> <?php echo $etudiant['sexe']; ?></p>
<p><strong>Photo :</strong> <img src="../public/photos/<?php echo $etudiant['photo']; ?>" alt="Photo de l'étudiant"></p>
<p><strong>Spécialité :</strong> <?php echo $etudiant['specialite']; ?></p>

<?php include_once '../public/footer.php'; ?>
