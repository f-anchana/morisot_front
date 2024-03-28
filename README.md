## Restauration du site de Réservation, API et VR

1ère étape : 
Il faut d'abord configurer un nom de domaine sur l'hébergeur de notre choix (nom de domaine acheté ou sous domaine configuré)

2e étape : 
Configurer la base de données SQL (base de données et utilisateur pour cette base de données avec un mot de passe et lui donner tous les privilèges)

3e étape : 
Importer la base de données (fichier SQL) dans PHPMyAdmin

4e étape : 
Importer la sauvegarde du site de réservation dans le dossier configuré dans le nom de domaine (dans public_html ou www/var/html)

5e étape : 
Ne pas oublier de configurer la connexion avec la base de données dans le fichier qui se connecte à la base de données

6e étape : 
Lancer le site et tout est bon !
Ne pas oublier de générer un certificat SSL pour la sécurité de la navigation.

En ce qui concerne l'API et le site VR, refaire la procédure sur un nom de domaine à part ou sous domaine si vous le souhaitez.

## Restauration du site backoffice - Déployement avec Vercel

Il faut d'abord ouvrir le terminal

Effectuer les commandes suivantes : 
- Se déplacer dans le bon dossier (backoffice) avec la commande 'cd backoffice/
- Installer Vercel si il n'est pas existant avec la commande : npm install -g vercel
- Se connecter avec la commande : vercel login
- Compiler le dossier quand on modifie des éléments : npm run build
- Le déployer avec la commande suivante si c'est la première fois avec la commande : vercel
- Pour mettre à jour les modifications du site, le faire avec la commande suivante : vercel --prod

## Procédure de restauration du site de WordPress

- D'abord compresser le dossier de notre site WordPress
- Télécharger le site depuis notre hébergeur.
- Ensuite, il faut exporter la base de données du site WordPress depuis PHPMyAdmin.
- Pour le restaurer chez un autre hébergeur, déjà s'authentifier à l'espace administration de l'hébergeur choisi.
- Configurer un nom de domaine ou sous domaine si ce n'est pas déjà fait (acheté ou sous domaine)
- Puis, aller dans le gestionnaire de fichiers et déposer, extraire les fichiers de notre site wordpress
- Configurer la base de données si on en possède une
- Importer la base de données qu'on a exporté précédemment sur PHPMyAdmin.
- Testez, et voilà !

Le README complet concernant le site WordPress est dans le fichier Readme-Getthevision.pdf