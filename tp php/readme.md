# TP PHP : Introduction aux Fondamentaux

## Objectifs du travail
Ce TP a pour but de maîtriser la syntaxe de base et les concepts fondamentaux du langage PHP à travers la création d'un script dynamique. [cite_start]Les objectifs spécifiques sont[cite: 64, 73, 83, 88]:
- **Manipulation de variables** : Déclaration et affichage dynamique d'informations (module, enseignant, notes).
- **Gestion de tableaux** : Création, ajout, suppression et parcours de listes d'étudiants.
- **Logique algorithmique** : Utilisation de boucles (`for`, `foreach`) et de conditions pour filtrer les résultats.
- **Modularité** : Création et utilisation de fonctions personnalisées pour calculer des moyennes et vérifier la validation.

## Technologies utilisées
- **Langage** : PHP (Hypertext Preprocessor).
- **Frontend** : HTML5 (pour la structure de la page d'affichage).
- **Serveur** : Apache (via XAMPP, WAMP ou MAMP).

## Contenu du dépôt
Ce dépôt est organisé comme suit :
1. **Code Source (`src/`)** : Le script PHP principal (`index.php`) contenant :
   - La déclaration des variables et tableaux.
   - Les algorithmes de calcul (moyenne, min, max).
   - Les fonctions personnalisées (`moyenne()`, `isvalide()`, `message()`).
2. **Rapport (`rapport/`)** : Le compte-rendu détaillé du TP au format PDF (source LaTeX incluse).

## Instructions d'exécution
Pour tester ce projet :
1. Clonez ce dépôt dans le dossier racine de votre serveur web (ex: `htdocs` ou `www`).
2. Lancez votre serveur local (Apache).
3. Ouvrez votre navigateur et accédez à `http://localhost/NomDuDossier/src/index.php`.

## Fonctionnalités implémentées
- Affichage des informations du module et de l'enseignant.
- Liste des étudiants avec leurs notes.
- Calcul automatique de la moyenne de la classe, de la note minimale et maximale.
- Distinction visuelle entre les étudiants validés (Note $\ge$ 9) et non validés.

## Membres du groupe
* [Ton Nom]
