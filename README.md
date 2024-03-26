## Tuto 
halo ! 
Tout d'abord je voulais vous dire que merci de pas toucher index.php c'est le fichier du router et faites moi confiance tout se passera bien !
vooici tous mes secrets : 
## 1 : les liens
vous verrez ce type de liens, veuillez ne pas prendre en compte le php mais seulement le 'oeuvres' dans le php, dans notre cas, il est défini comme l'url /oeuvres, c'est magique ! ça veut dire imagine tu veux ton lien /connexion tu pourras remplacer le oeuvres par connexion et moi je m'occupe du reste
<a href="<?= $router->generate('oeuvres')?>">Oeuvre </a><br>


## 2 : les fichiers

vous avez remarqué que l'arborescence est un peu spécial. Il y a un dossier public, en gros c'est la seule partie de l'arborescence que les personnes peuvent voir et accéder et tout le reste au dessus, personne aura accès, c'est magique. Vous les dev fronts, vous pourrez travailler avec localhost views ça marchera très bien pour le moment
mais pour faire des vrais tests, il faut se placer dans public puisque c'est notre nouvelle racine. Ainsi, vous pouvez utiliser cette commande dans le terminal

php -S localhost:8001 -t public

Et cela va générer un lien localhost sans utiliser wamp

## 3 : Media

Les différentes largeurs du reponsive:

@media screen and (min-width: 425px)
@media screen and (min-width: 576px)
@media screen and (min-width: 768px) 
@media screen and (min-width: 1024px)
@media screen and (min-width: 1200px)
@media screen and (min-width: 1400px)
@media screen and (min-width: 1920px)




## STYLISER MES MESSAGES PITIEEEEEEE
dans connexion
et dans mon espace mais pas encore fini 