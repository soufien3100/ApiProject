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

*Dans le .env nouvellement créer, modifier les lignes*

*DB_CONNECTION=mysql*

*en*

*DB_CONNECTION=sqlite*

*et la ligne*

*DB_DATABASE=laravel*

*par*

*DB_DATABASE='{chemin du projet}/database/database.sqlite'*