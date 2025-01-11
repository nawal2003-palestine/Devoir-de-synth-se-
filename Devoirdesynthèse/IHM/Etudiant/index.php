<?php include_once '../public/header.php'; ?>
<?php include_once '../public/nav_barre.php'; ?>
<?php require_once '../../Acces_BD/Etudiant.php'; ?>

<h2>Mon Profil</h2>

<?php
session_start();
if (isset($_SESSION['etudiant_code'])) {
    $etudiant = GetProfil($_SESSION['etudiant_code']);
}
?>

<p><strong>Nom :</strong> <?php echo $etudiant['nom']; ?></p>
<p><strong>Prénom :</strong> <?php echo $etudiant['prenom']; ?></p>
<p><strong>Email :</strong> <?php echo $etudiant['email']; ?></p>
<p><strong>Spécialité :</strong> <?php echo $etudiant['specialite']; ?></p>

<?php include_once '../public/footer.php'; ?>
