// 7. Gestion_Actions/Administrateur.php
<?php
session_start();
require_once "../Acces_BD/Administrateur.php";

if(isset($_GET['action'])) {
    switch($_GET['action']) {
        case 'lister':
            $_SESSION['etudiants'] = Lister();
            header('Location: ../IHM/Administrateur/index.php');
            break;
            
        case 'ajouter':
            if(isset($_FILES['photo'])) {
                $photo = '../IHM/public/photos/' . uniqid() . '_' . $_FILES['photo']['name'];
                move_uploaded_file($_FILES['photo']['tmp_name'], $photo);
                $_POST['photo'] = $photo;
            }
            Ajouter($_POST);
            header('Location: Administrateur.php?action=lister');
            break;
            
        case 'modifier':
            if(isset($_FILES['photo'])) {
                $photo = '../IHM/public/photos/' . uniqid() . '_' . $_FILES['photo']['name'];
                move_uploaded_file($_FILES['photo']['tmp_name'], $photo);
                $_POST['photo'] = $photo;
            }
            Modifier($_POST);
            header('Location: Administrateur.php?action=lister');
            break;
            
        case 'supprimer':
            Supprimer($_GET['code']);
            header('Location: Administrateur.php?action=lister');
            break;
    }
}
?>