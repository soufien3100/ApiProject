**Configuration**

*Pour commencer, utiliser la commande*

```bash
composer install
```

*afin d'avoir certain dossier necessaire au bon fonctionnement de Laravel.*

*Ensuite, lancer la commande*

```bash
cp .env.example .env
```

*pour avoir un environnementde travaille pour Laravel.*

*Dans le .env nouvellement créer, modifier la ligne*

*DB_CONNECTION=mysql*

*en*

*DB_CONNECTION=sqlite*

*et la ligne*

*DB_DATABASE=laravel*

*par*

*DB_DATABASE='{chemin du projet}/database/database.sqlite'*

**Mise en place de la Base de Donnée**

*Pour mettre en place la base de données, lancer les commandes suivantes :*

```bash
php artisan migrate
php artisan db:seed
```

*Les tables de la base de donnée seront ainsi créer. Enfin, lancer dans un nouveau terminal la commande :*

```bash
php artisan serve
```

*afin de lancer un serveur en local.*

*Se connecter au serveur local en utilisant 'localhost' ou l'adresse afficher sur le terminal.*

**Utilisation de l'API**

*Pour utiliser l'API, faire une recherche sous la forme*

*http://127.0.0.1:8000/api/{table}*

*ou 'table' peut prendre
    *drivers
    *circuits
    *constructors
    *races

*Vous recevrez une réponse sous forme d'un fichier JSON.*