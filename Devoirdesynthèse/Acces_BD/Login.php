// 3. Acces_BD/Login.php
<?php
require_once 'connexion.php';

function login($username, $password) {
    $cnx = Connect();
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($cnx, $query);
    
    if($user = mysqli_fetch_assoc($result)) {
        if(password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            
            if($user['role'] == 'etudiant') {
                $query = "SELECT code FROM etudiant WHERE user_id=" . $user['id'];
                $result = mysqli_query($cnx, $query);
                $etudiant = mysqli_fetch_assoc($result);
                $_SESSION['etudiant_code'] = $etudiant['code'];
            }
            mysqli_close($cnx);
            return true;
        }
    }
    mysqli_close($cnx);
    return false;
}

function logout() {
    session_start();
    session_destroy();
    header('Location: /index.php');
    exit();
}
?>