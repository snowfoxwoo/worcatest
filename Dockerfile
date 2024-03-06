FROM php:7.4-apache
# FROM arm64v8/php:7.2-apache

RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql

RUN docker-php-ext-install pdo_pgsql

RUN a2enmod rewrite

WORKDIR /var/www/html

COPY ../ .

EXPOSE 80
EXPOSE 443