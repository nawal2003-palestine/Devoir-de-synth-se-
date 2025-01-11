<nav>
    <ul>
        <?php if (isset($_SESSION['role'])): ?>
            <?php if ($_SESSION['role'] == 'admin'): ?>
                <li><a href="/IHM/Administrateur/index.php">Tableau de bord</a></li>
                <li><a href="/IHM/Administrateur/form.php">Ajouter un étudiant</a></li>
                <li><a href="/IHM/Administrateur/affichage.php">Afficher un étudiant</a></li>
            <?php else: ?>
                <li><a href="/IHM/Etudiant/index.php">Mon espace</a></li>
            <?php endif; ?>
            <li><a href="/Gestion_Actions/login.php?action=logout">Déconnexion</a></li>
        <?php else: ?>
            <li><a href="/index.php">Connexion</a></li>
        <?php endif; ?>
    </ul>
</nav>
