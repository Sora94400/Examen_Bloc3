# Système de Gestion des Utilisateurs

Ce projet est un système de gestion des utilisateurs sécurisé développé en PHP natif avec une base de données MySQL.

## Fonctionnalités

- Inscription des utilisateurs
- Connexion sécurisée
- Visualisation du profil
- Déconnexion

## Sécurité

- Hachage des mots de passe avec password_hash()
- Protection contre les injections SQL avec PDO
- Protection XSS avec htmlspecialchars()
- Validation des entrées utilisateur
- Sessions sécurisées

## Installation

1. Créez une base de données MySQL nommée 'librairiexyz'

2. Importez le fichier SQL/users.sql pour créer la table des utilisateurs

3. Configurez les paramètres de connexion dans config.php :
   - host
   - dbname
   - username
   - password

4. Assurez-vous que PHP et MySQL sont installés et configurés

5. Placez les fichiers dans votre répertoire web

## Structure des fichiers

1. **Cloner le Dépôt :**
   - Utilisez la commande suivante pour cloner le dépôt :
     ```bash
     git clone https://github.com/Andragogy-FR/evaluation-librairie---Sujet-2
     ```

2. **Configuration de la Base de Données :**
   - Exécutez les scripts SQL du dossier evaluation-librairie/SQL/library.sql pour créer les tables nécessaires de votre base de donnée.

3. **Configuration du Backend :**
   - Configurez les paramètres de la base de données dans le fichier `config.php`.

4. **Lancer l'Application :**
   - Démarrez le serveur PHP intégré :
     ```bash
     cd nom-du-depot
     php -S localhost:8000
     ```

     OU

Accédez à l'application en démarrant MAMP, WAMP, XAMP, AMPPS, LARAVEL ou autre.

5. **Accéder à l'Application :**
   - Ouvrez votre navigateur et allez à [http://localhost:8000](http://localhost:8000).
