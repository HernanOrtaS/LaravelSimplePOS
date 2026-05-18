FROM php:8.4-fpm

# BASE
RUN apt-get update && apt-get install -y \
    unzip zip git curl \
    libzip-dev libpng-dev libonig-dev libxml2-dev \
    gnupg

RUN docker-php-ext-install pdo pdo_mysql zip

# COMPOSER
RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin \
    --filename=composer

WORKDIR /var/www/html
