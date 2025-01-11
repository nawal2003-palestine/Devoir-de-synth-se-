<?php
require_once 'connexion.php';

function GetProfil($user_id) {
    $cnx = Connect();
    $query = "SELECT * FROM etudiant WHERE user_id=?";
    $stmt = mysqli_prepare($cnx, $query);
    mysqli_stmt_bind_param($stmt, 'i', $user_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $etudiant = mysqli_fetch_assoc($result);
    mysqli_close($cnx);
    return $etudiant;
}

function ModifierPhoto($user_id, $photo) {
    $cnx = Connect();
    $query = "UPDATE etudiant SET photo=? WHERE user_id=?";
    $stmt = mysqli_prepare($cnx, $query);
    mysqli_stmt_bind_param($stmt, 'si', $photo, $user_id);
    $result = mysqli_stmt_execute($stmt);
    mysqli_close($cnx);
    return $result;
}
?>
