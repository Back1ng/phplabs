FROM php:8.3-apache

RUN docker-php-ext-install mysqli && \
    a2enmod rewrite

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer