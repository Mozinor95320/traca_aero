Projet de gestion des fiches de traçabilité
Ce projet GitHub propose une application web permettant de créer, éditer et supprimer des fiches de traçabilité pour des produits. Chaque fiche est identifiée par un ID unique, correspondant au numéro de série du produit auquel elle est associée.

Fonctionnalités principales
Création, édition et suppression des fiches de traçabilité.
Chaque fiche comporte deux niveaux de validation :
Validation opérateur : premier niveau de validation.
Validation qualité : deuxième niveau de validation.
Une fiche ayant atteint les deux niveaux de validation n'est plus supprimable de la base de données.
Permissions des utilisateurs
L'accès aux fonctionnalités dépend du niveau de permission de l'utilisateur connecté :

Opérateur : peut créer une nouvelle fiche et effectuer la validation du premier niveau.
Qualiticien : peut confirmer la validation du second niveau et supprimer une fiche tant qu'elle n'a pas été validée à ce deuxième niveau.
Interface utilisateur
L'application affiche une liste des fiches présentes dans la base de données. L'utilisateur peut :

Ouvrir une fiche pour modifier les informations qu'elle contient.
Utiliser une barre de recherche pour filtrer les fiches par numéro de série.
Chaque fiche est composée de trois onglets :

Données de production : un formulaire pour saisir les informations de production (par l'opérateur).
Graphiques de production : visualisation de l'évolution des enregistrements de production via des graphiques (Chart.js).
Processus industriel annexe : autres graphiques affichant des enregistrements d'un processus industriel associé.
Technologies utilisées
L'application est développée avec les technologies suivantes :

HTML / CSS
JavaScript (avec Chart.js)
PHP
Bootstrap
Installation
Clonez ce dépôt :

bash
Copier le code
git clone https://github.com/votre-utilisateur/nom-du-projet.git
Configurez votre serveur PHP et placez le projet dans le répertoire racine du serveur.

Importez la base de données associée (fichier SQL fourni dans le dépôt).

Auteurs
[Votre nom] - Développeur principal
