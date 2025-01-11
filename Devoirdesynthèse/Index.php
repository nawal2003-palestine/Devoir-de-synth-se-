// 8. index.php (racine)
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="IHM/public/style.css">
</head>
<body>
    <?php include 'IHM/public/header.php'; ?>
    <?php include 'IHM/public/nav_barre.php'; ?>
    
    <div class="container">
        <form action="Gestion_Actions/login.php" method="post" class="login-form">
            <h2>Connexion</h2>
            <?php if(isset($_GET['error'])): ?>
                <div class="alert alert-danger">Identifiants incorrects</div>
            <?php endif; ?>
            
            <div class="form-group">
                <label>Nom d'utilisateur</label>
                <input type="text" name="username" required>
            </div>
            
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="password" required>
            </div>
            
            <button type="submit">Se connecter</button>
        </form>
    </div>
    
    <?php include 'IHM/public/footer.php'; ?>
</body>
</html>
