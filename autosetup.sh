#!/bin/bash

# La finalidad de este script es arrancar rapidamente los contenedores
# para desarrollo y visualizacion inmediata sin configuraciones tediosas
# Requiere tener instalado:
# * Docker
# * Docker compose
# * Bash

## Arrancar los contenedores
docker compose up -d

## Se inicializan los comandos requeridos para docker
dockerRunApp="docker compose run --rm app"
dockerRunNode="docker compose run --rm node"

## Crear carpetas requeridas
$dockerRunApp mkdir -p storage/framework/{cache,sessions,views,testing}
$dockerRunApp mkdir -p bootstrap/cache

## Instalar composer
$dockerRunApp composer install

## Permisos requeridos en las carpetas
$dockerRunApp chmod -R 775 storage bootstrap/cache
$dockerRunApp chown -R www-data:www-data storage bootstrap/cache

## Configurar el .env
$dockerRunApp cp .env.example .env
$dockerRunApp php artisan key:generate
$dockerRunApp php artisan migrate --seed

## Instalar las dependencias de Node
$dockerRunNode npm install
$dockerRunNode npm run build
