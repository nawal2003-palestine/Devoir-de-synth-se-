<?php
session_start();
require_once "../Acces_BD/Login.php";

if(isset($_POST['username']) && isset($_POST['password'])) {
    if(login($_POST['username'], $_POST['password'])) {
        if($_SESSION['role'] == 'admin') {
            header('Location: ../IHM/Administrateur/index.php');
        } else {
            header('Location: ../IHM/Etudiant/index.php');
        }
    } else {
        header('Location: ../index.php?error=1');
    }
}
?>