## Restauration du site de Réservation et VR (si possible)

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

En ce qui concerne l'API, refaire la procédure mais sur un sous domaine si vous le souhaitez.

## Restauration du site de VR
...

## Restauration du site backoffice - Déployement avec Vercel

Il faut d'abord ouvrir le terminal

Effectuer les commandes suivantes : 
- Se déplacer dans le bon dossier (backoffice) avec la commande 'cd backoffice/
- Installer Vercel si il n'est pas existant avec la commande : npm install -g vercel
- Se connecter avec la commande : vercel login
- Compiler le dossier quand on modifie des éléments : npm run build
- Le déployer avec la commande suivante si c'est la première fois avec la commande : vercel
- Pour mettre à jour les modifications du site, le faire avec la commande suivante : vercel --prod

## Restauration du site de WordPress
Récuperation des dossiers et de la base donnée:  Compressez le dossier wordpress contenant notre site. Puis téléchargez le fichier zip contenant les fichiers WordPress depuis O2switch. Il faut exporter la base de données de notre site WordPress à partir d'o2switch.  Comment importer notre site Wordpress chez un nouvel herbergeur :  1. Connectez-vous chez votre nouvel hébergeur puis aller dans le gestionnaire de fichiers de votre hébergeur. Téléversez le fichier zip contenant les fichiers WordPress dans le répertoire racine de votre nouveau serveur.  2.Extrayez-le dans le répertoire souhaité. Cela devrait créer un répertoire contenant tous les fichiers WordPress.  4.Importez la base de données que vous avez exportée de votre ancien hébergeur vers la nouvelle base de données que vous venez de créer. Via PhpMyadmin  5.Une fois l'installation terminée, vérifiez que votre site WordPress fonctionne correctement sur le nouveau serveur. 
