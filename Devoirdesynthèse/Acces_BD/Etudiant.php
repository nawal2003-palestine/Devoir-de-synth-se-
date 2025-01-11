// 5. Acces_BD/Etudiant.php
<?php
require_once 'connexion.php';

function GetProfil($code) {
    $cnx = Connect();
    $query = "SELECT * FROM etudiant WHERE code=$code";
    $result = mysqli_query($cnx, $query);
    $etudiant = mysqli_fetch_assoc($result);
    mysqli_close($cnx);
    return $etudiant;
}

function ModifierPhoto($code, $photo) {
    $cnx = Connect();
    $query = "UPDATE etudiant SET photo='$photo' WHERE code=$code";
    $result = mysqli_query($cnx, $query);
    mysqli_close($cnx);
    return $result;
}
?>