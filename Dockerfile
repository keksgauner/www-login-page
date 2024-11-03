# Stage 1: NodeJS
FROM node:22 AS build-nodejs

WORKDIR /app

COPY . .

RUN npm install --save-dev
RUN npm run tailwind

# Stage 2: Composer
FROM composer:2.8.2 AS build-composer

WORKDIR /app

COPY --from=build-nodejs /app .

RUN composer install --no-dev --optimize-autoloader

# Stage 3: PHP Server
FROM php:8.2-apache

RUN a2enmod rewrite

# Change the DocumentRoot in the Apache configuration
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

COPY --from=build-composer ./app .


