# Gestion des Étudiants - Devoir de Synthèse Web1

Application web PHP de gestion des étudiants avec système d'authentification, développée dans le cadre du cours Web1.

## Informations du Cours
- **Filière** : Cybersécurité & Cyber-intelligence
- **Niveau** : 1ère année
- **Année** : 2024/2025
- **Professeur** : M.GHAILANI

## Fonctionnalités

### 1. Authentification
- Formulaire de connexion (index.php)
- Stockage des identifiants dans la table `users` de la base `gestion_ecole`
- Vérification via login.php dans le dossier Gestion_Actions
- Redirection selon le rôle :
  - Administrateur → Affichage des étudiants
  - Étudiant → Affichage du profil

### 2. Gestion des Étudiants
Données stockées dans la table `etudiant` avec les champs :
- code
- nom
- prénom
- sexe
- photo
- email
- langues
- spécialité

#### Fonctionnalités Administrateur
- Affichage des Étudiants
- Ajout d'un Étudiant
- Modification d'un Étudiant
- Suppression d'un Étudiant
- Modification de son mot de passe

#### Fonctionnalités Étudiant
- Consultation des informations personnelles
- Modification de la photo du profil
- Modification du mot de passe

## Structure du Projet

```
├── index.php                  # Page d'accueil avec authentification
│
├── IHM/
│   ├── Administrateur/
│   │   ├── form.php          # Formulaire ajout/modification
│   │   ├── index.php         # Affichage des informations
│   │   └── affichage.php     # Détails d'un étudiant
│   ├── Etudiant/
│   │   ├── form.php          # Formulaire modification
│   │   └── index.php         # Affichage profil
│   └── public/
│       ├── header.php        # En-tête
│       ├── footer.php        # Pied de page
│       ├── nav_barre.php     # Barre de navigation
│       ├── css/              # Styles CSS
│       └── photos/           # Photos des étudiants
│
├── Acces_BD/
│   ├── .env                  # Paramètres de connexion
│   ├── connexion.php         # Connexion BD
│   ├── Login.php            # Fonctions login/logout
│   ├── Administrateur.php   # Fonctions administrateur
│   └── Etudiant.php        # Fonctions étudiant
│
└── Gestion_Actions/
    ├── login.php            # Gestion authentification
    ├── Administrateur.php   # Actions administrateur
    └── Etudiant.php        # Actions étudiant
```

## Configuration Base de Données

### Fichier .env
```
Serveur : localhost
Utilisateur : root
Password : 
db_name : gestion_ecole
```

### Tables Requises
1. Table `users` :
   - Stockage des identifiants et mots de passe
   - Gestion des rôles (administrateur/étudiant)

2. Table `etudiant` :
   - Stockage des informations des étudiants
   - Champs : code, nom, prénom, sexe, photo, email, langues, spécialité

## Installation
1. Cloner le dépôt :
```bash
git clone [URL_DU_REPO]
```
2. Créer la base de données `gestion_ecole`
3. Configurer le fichier `.env` avec vos paramètres
4. Importer la structure des tables
5. Accéder à l'application via le navigateur

## Prérequis

- Serveur web (Apache recommandé)
- PHP
- MySQL

## Auteur
Naoual Wafiq
---
Devoir de synthèse - Web1 (2024/2025)
