# Roadweb V2 - BACK-END (https://github.com/roadweb/backend)

Vous vous trouvez dans le projet Roadweb.
Ici, on va développer la version 2 du site, côté Back (le back et le front du site se trouveront donc sur des repositories séparés).
Pour les intégrateurs, ne touchez pas au code PHP. S'il y a un problème que vous rencontrez, signalez le a un développeur, ou dans la partie issues de github.


## Starter & Downloads

### Installer composer
https://getcomposer.org/doc/00-intro.md

Pour les utilisateurs de WAMP (ou XAMP) il est impératif de se rendre dans le fichier php.ini (..\wamp\bin\php\php5.4.12\php.ini)
et de "décommenter" la ligne ;extension=php_openssl.dll en supprimant le point virgule (;).
 Ensuite, enregistrez, quittez et installez composer.

Si vous vous rendez compte que vous ne pouvez pas afficher les pages php (message d'erreur suivant : Internal Server Error  The server encountered an internal error or misconfiguration and was unable to complete your request. etc.), il suffit d'activer le module rewrite_module dans WAMP - APACHE - MODULES APACHE.


## Récupérer le projet

- une fois rendu à l'adresse correspondante, cliquez sur "fork" en haut à droite et sélectionnez votre profil pour y ajouter le projet (il vous faut bien entendu un compte git).
- dans votre dossier www si vous utilisez wamp ou dans le dossier de vos projets, ouvrez git bash et tapez
```git clone https://github.com/votrepseudogit/backend.git``` 
Le projet se télécharge depuis votre compte git dans vos dossiers.


### Installer les dépendances
Dans la racine du projet, executez cette ligne de code :
```composer install```

Toujours dans git bash, lancez la commande de generation de clé
```php artisan key:generate```

puis lancez ```php artisan jwt:generate``` pour générer la clé JWT


### Connexion à la base de données
La base de données doit être créée en local. Renommer le fichier .env.example en .env et paramétrez les accès à votre base de données (DB_HOST, DB_DATABASE, DB_USERNAME et DB_PASSWORD à remplir).                                                                                            DB_DATABASE=roadwebback
Pour insérer les bases de données en local, créez votre base de données et tapez ```php artisan migrate``` dans vos lignes de commande puis tapez ```php artisan db:seed``` pour remplir automatiquement votre base de données.

### Afficher le projet dans son navigateur

 Vous pouvez soit visualiser le projet via WAMP (ou XAMP), soit utiliser le serveur généré avec laravel (tapez alors cette ligne de commande ```php artisan serve``` puis entrez cette adresse dans votre navigateur : ```http://localhost:8000/```)
 Attention seule la vue Welcome est laissée pour vérifier que votre installation fonctionne !!!
 
### Utiliser Postman : 

Lancez une requete POST vers localhost:8000/api/authenticate et avec les paramétres suivants :

email : email0@blop.fr et password : password0

Vous devriez voir apparaitre un token.

###Parametrer le remote distant Roadweb
Cette commande vous permet de lier votre projet en local au projet en ligne (pour récupérer les modifications mergées) :
```git remote add roadweb https://github.com/roadweb/Back.git``` 

## Les commandes clés
Pour RECUPERER les modifications du projet source : ```git pull roadweb develop```
Pour ENVOYER nos modifications de notre branche locale vers NOTRE repository en ligne : ```git push origin NomDeLaBranche```
Pour faire un pull request, tout se passe en ligne une fois que vous avez exécuté la commande précédente.

## Tutoriels

Si vous êtes nouveaux dans Laravel, Grafikart fait une formation gratuite et ultra complète pour vous aider !
```http://www.grafikart.fr/formations/laravel```

N'hésitez pas à consulter ce tuto également pour savoir faire des routes :
```http://www.grafikart.fr/tutoriels/php/router-628```

### Allez voir le Wiki du projet !

Voici le lien du Wiki pour avoir plus d'informations sur l'organisation du projet : https://github.com/roadweb/Back/wiki/Organisation-des-branches
Et si vous avez le moindre souci, la moindre question : n'hésitez pas à demander de l'aide ! ;)