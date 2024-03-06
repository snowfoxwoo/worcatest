FROM php:7.4-apache
# FROM arm64v8/php:7.2-apache

RUN a2enmod rewrite

WORKDIR /var/www/html

COPY ../ .

EXPOSE 80
EXPOSE 443