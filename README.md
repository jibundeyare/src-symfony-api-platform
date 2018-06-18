# src-symfony-api-platform

## Install

    git clone https://github.com/jibundeyare/src-symfony-api-platform.git
    cd src-symfony-api-platform
    composer install

Éditez le ficiher `.env` et ajoutez-y les accès à votre base de données.

Exemple : `DATABASE_URL=mysql://root:123@127.0.0.1:3306/src_symfony_api_platform`

    php bin/console doctrine:database:create
    php bin/console doctrine:schema:create

## Utilisation

    cd src-symfony-api-platform
    php bin/console server:run

Ouvrez l'url `http://localhost:8000/api/` avec votre navigateur web.

