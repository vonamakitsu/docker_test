FROM php:8.1.27-fpm

COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

RUN apt update; apt install -y git
RUN docker-php-ext-install pdo pdo_mysql
RUN apt install -y \
        libzip-dev \
        zip \
    && docker-php-ext-install zip


WORKDIR /var/www/symfony