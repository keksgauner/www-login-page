FROM php:8.0-apache

# Change the DocumentRoot in the Apache configuration
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Uncomment the following line to copy to the container
COPY . /var/www/html/
