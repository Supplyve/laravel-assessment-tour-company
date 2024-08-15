FROM php:7.2-fpm

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    curl \
    git \
    unzip \
    libzip-dev \
    tzdata

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql