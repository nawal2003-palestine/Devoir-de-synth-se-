// 4. Acces_BD/Administrateur.php
<?php
require_once 'connexion.php';

function Lister() {
    $cnx = Connect();
    $query = "SELECT * FROM etudiant";
    $result = mysqli_query($cnx, $query);
    $etudiants = [];
    while($row = mysqli_fetch_assoc($result)) {
        $etudiants[] = $row;
    }
    mysqli_close($cnx);
    return $etudiants;
}

function Ajouter($data) {
    $cnx = Connect();
    $query = "INSERT INTO etudiant (nom, prenom, sexe, photo, email, langues, specialite) 
              VALUES ('$data[nom]', '$data[prenom]', '$data[sexe]', '$data[photo]', 
                      '$data[email]', '$data[langues]', '$data[specialite]')";
    $result = mysqli_query($cnx, $query);
    mysqli_close($cnx);
    return $result;
}

function Modifier($data) {
    $cnx = Connect();
    $query = "UPDATE etudiant SET 
              nom='$data[nom]', 
              prenom='$data[prenom]', 
              sexe='$data[sexe]', 
              photo='$data[photo]', 
              email='$data[email]', 
              langues='$data[langues]', 
              specialite='$data[specialite]' 
              WHERE code=$data[code]";
    $result = mysqli_query($cnx, $query);
    mysqli_close($cnx);
    return $result;
}

function Supprimer($code) {
    $cnx = Connect();
    $query = "DELETE FROM etudiant WHERE code=$code";
    $result = mysqli_query($cnx, $query);
    mysqli_close($cnx);
    return $result;
}

function GetById($code) {
    $cnx = Connect();
    $query = "SELECT * FROM etudiant WHERE code=$code";
    $result = mysqli_query($cnx, $query);
    $etudiant = mysqli_fetch_assoc($result);
    mysqli_close($cnx);
    return $etudiant;
}
?>

