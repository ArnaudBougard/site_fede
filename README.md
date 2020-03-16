/*-----------------------------------------*/
/* README Général pour le site fédé F.P.Ms */ 			LAST EDIT : 14 Mars 2020 à 18h08
/*-----------------------------------------*/

Ce fichier constitue le point de départ et le centre névralgique de la documentation du projet de site fédé.
Les technologies utilisées ici sont assez basiques pour un site internet :

- Du PHP et une base de données MySql/MariaDB pour la partie back-end (nous utilisons donc tout naturellement Phpmyadmin pour le développement)

- Un front-end en HTML5, CSS3 et Javascript utilisant les célèbres frameworks Bootstrap et Jquery ainsi que "MetroUI" pour l'animation des tuiles de la page d'accueil du site.

L'architecture du projet est du style Model-View-Controler avec des scripts JS et un dossier "assets" comprenant tous les fichiers audio, image et texte du site. Les views se trouvent dans le dossier "pages".


/*--------------------*/
/* MAJ de la liste des comitards */
/*--------------------*/

on utilise la table historique dans la bdd.
elle est générée en important le fichier historique.csv dans le dossier assets/files/
Il faut donc mettre à jour ce fichier => on prend le fichier historique.xls ( excel ) et on le complète avec la liste fournie par la fede
Attention: bien respecter la "mise en forme" ( repeter la promo, unmerge le cercle et le repeter a chaque ligne)
Export au format csv ( ATTENTION, save with encoding utf-8 sinon l'import dans la bdd va echouer !)
On a notre fichier => import dans phpMyAdmin, attention, cocher "la 1ere ligne sont les noms des colonnes"
Si succès : supprimer la table historique et renommer la nouvelle table importée en 'historique' ( via operations dans phpmyadmin)


Le système est clairement améliorable, faites vous plaiz

