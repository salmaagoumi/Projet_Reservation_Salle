# Système de gestion des réservations des salles de l'Université de Lille

## Lancement du projet
Veuillez vous rendre sur ce lien : [http://127.0.0.1:8000/home](http://127.0.0.1:8000/home)

## Description du projet
Ce projet a été développé dans le cadre de l'examen de la matière **"Architecture et Applications du Web"** pour l'Université de Lille.  
Il consiste en une application Web permettant de gérer les réservations de salles de classe et leur affectation aux différentes promotions, en s'assurant que deux promotions ne réservent pas la même salle pour le même créneau horaire. Le système permet aussi de visualiser les réservations sous forme de calendrier.

### Fonctionnalités
- Réservation de salles avec la sélection d'une promotion, d'une matière, d'un enseignant et d'un créneau horaire.
- Validation de la réservation après avoir sélectionné les éléments nécessaires.
- Affichage des réservations sous forme de calendrier pour une salle ou une promotion spécifique.

## Outils et technologies utilisés
- **Langage de programmation** : PHP
- **Framework** : Symfony
- **Base de données** : MySQL
- **Outils de versionning** : Git
- **Application Front-end** : Twig, CSS, JavaScript

## Contributions
- **Wissal Wardighi** : Gestion des salles et des enseignants. Création des tables de la base de données pour ces entités, ainsi que l'intégration de la gestion des salles dans l'application.
- **Salma Agoumi** : Gestion des filières et des matières. Développement des fonctionnalités liées aux matières et à leur association avec les filières.
- **Amine Benslimane** : Gestion des réservations et des promotions. Création des fonctionnalités permettant de gérer les réservations, y compris la gestion des créneaux horaires et la validation des réservations.

## Structure du projet
Le projet est composé de plusieurs parties :
1. **Back-end** : Utilisation de Symfony pour gérer la logique métier et la communication avec la base de données.
2. **Base de données** : Tables pour les salles, matières, enseignants, filières, promotions, créneaux horaires et réservations.
3. **Front-end** : Interface utilisateur permettant de réserver une salle, afficher les disponibilités, et visualiser les réservations via un calendrier.

## Détails techniques
Les scripts SQL nécessaires à la création des tables de la base de données sont présents dans le dossier `reservation.sql`. Les relations entre les différentes entités sont gérées via l'ORM de Symfony.

## Livrables
- Dictionnaire de données
- MCD/MLD/MPD de la base de données
- Code source du projet
- Scripts SQL de création des tables

## Conclusion
Ce projet permet de répondre aux besoins de l'Université de Lille en matière de gestion des salles et des réservations.  
Chaque membre de l'équipe a contribué à la réussite du projet, en se concentrant sur des fonctionnalités spécifiques tout en assurant l'intégration complète du système.
