# TPE - Blog

## 📋 Description du projet

Ce projet est un blog simple développé dans le cadre d'un TP scolaire. L'objectif principal était d'approfondir les technologies web de base en créant une application complète de gestion de blog.

Le blog permet de :
- Afficher une liste d'articles organisés par catégories
- Consulter le détail des articles
- Gérer les articles et catégories via une interface d'administration
- Contacter l'équipe via un formulaire de contact

**Note importante** : Les assets graphiques (images, icônes, templates CSS) ont été fournis dans le cadre de l'exercice pédagogique pour permettre aux étudiants de se concentrer sur l'apprentissage des fonctionnalités backend.

## 🛠️ Technologies utilisées

- **Frontend** : HTML5, CSS3, JavaScript, Bootstrap
- **Backend** : PHP
- **Base de données** : MySQL/MariaDB
- **Autres** : Font Awesome, SCSS

## 📦 Prérequis

Avant de commencer l'installation, assurez-vous d'avoir :

- Un serveur web local (XAMPP, WAMP, MAMP, ou serveur Apache/Nginx)
- PHP 7.4 ou version supérieure
- MySQL 5.7+ ou MariaDB 10.3+
- Un navigateur web moderne

## 🚀 Installation détaillée

### Étape 1 : Récupération du projet

```bash
# Cloner le repository
git clone https://github.com/Zuzog/Mora-Blog.git

# OU télécharger le fichier TPE_BLOG.zip et l'extraire
```

### Étape 2 : Configuration du serveur web

1. **Avec XAMPP/WAMP :**
   - Copiez le dossier `site/` dans votre répertoire `htdocs` (XAMPP) ou `www` (WAMP)

2. **Avec un serveur personnalisé :**
   - Placez le contenu du dossier `site/` dans votre document root
   - Configurez votre virtual host si nécessaire

### Étape 3 : Configuration de la base de données

1. **Démarrer les services :**
   - Lancez Apache et MySQL depuis votre panneau de contrôle (XAMPP/WAMP)

2. **Créer la base de données :**
   - Utiliser le fichier SQL afin de créer votre base de données.

### Étape 4 : Test de l'installation

1. Ouvrez votre navigateur
2. Accédez à l'URL : `http://localhost/site/index.php` 
3. Vérifiez que la page d'accueil s'affiche correctement

## 🎯 Utilisation

### Interface publique
- **Page d'accueil** : `http://localhost/site/index.php`
- **Liste des articles** : Navigation via les catégories ou la page "News"
- **Détail d'un article** : Cliquez sur un article pour voir le contenu complet
- **Contact** : Formulaire de contact

### Interface d'administration
- **Administration** : `http://localhost/site/administration.php`
- **Gestion des articles** : Création, modification, suppression d'articles
- **Gestion des catégories** : Création, modification, suppression de catégories

## ✨ Fonctionnalités

### Côté utilisateur
- ✅ Affichage des articles par catégorie
- ✅ Lecture d'articles complets
- ✅ Navigation responsive
- ✅ Formulaire de contact
- ✅ Design moderne avec Bootstrap

### Côté administration
- ✅ CRUD complet pour les articles
- ✅ CRUD complet pour les catégories
- ✅ Interface backoffice intuitive
- ✅ Gestion des images d'articles

## 📁 Structure du projet

```
site/
├── css/                    # Styles CSS compilés
├── scss/                   # Fichiers SCSS sources
├── js/                     # Scripts JavaScript
├── images/                 # Assets graphiques fournis
├── includes/               # Templates PHP partagés
├── php/                    # Scripts PHP de traitement
├── vendors/                # Bibliothèques tierces
├── index.php              # Page d'accueil
├── administration.php     # Interface d'admin
└── ...                    # Autres pages
```

## 🎓 Contexte pédagogique

Ce projet a été réalisé dans le cadre d'un TPE pour :
- Approfondir le développement web full-stack
- Apprendre les bases de PHP et MySQL
- Comprendre l'architecture MVC simple
- Manipuler les formulaires et la validation
- Gérer les interactions frontend/backend

Les assets visuels (thème, images, CSS de base) ont été fournis pour permettre aux étudiants de se concentrer sur l'apprentissage des concepts techniques plutôt que sur le design.

## 👨‍💻 Auteur

- [@Zuzog](https://github.com/Zuzog)

---

*Projet réalisé dans un cadre éducatif - TPE 2024*
