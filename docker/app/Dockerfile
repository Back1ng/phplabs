FROM php:8.3-apache

RUN docker-php-ext-install mysqli

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer