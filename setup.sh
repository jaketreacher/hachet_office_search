#!/bin/bash

if [ ! -x "$(command -v composer)" ]; then
    echo "Composer not installed."
    exit 1
fi

function delete_line()
{
    local key=$1

    sed "/.*${key}.*/d" .env > .env.tmp && mv .env.tmp .env
}

composer install
cp .env.example .env
php artisan key:generate
sed "s/.*DB_CONNECTION.*/DB_CONNECTION=sqlite/" .env > .env.tmp && mv .env.tmp .env
delete_line DB_HOST
delete_line DB_PORT
delete_line DB_DATABASE
delete_line DB_USERNAME
delete_line DB_PASSWORD
touch database/database.sqlite
php artisan migrate
php artisan db:seed