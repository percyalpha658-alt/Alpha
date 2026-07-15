FROM php:8.2-apache

# Installer l'extension mysqli
RUN docker-php-ext-install mysqli

# Copier les fichiers du projet
COPY . /var/www/html/

# Donner les permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
