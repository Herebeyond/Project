FROM php:8.2-apache

# Installer les extensions nécessaires
RUN docker-php-ext-install pdo pdo_mysql

# Copier le contenu du répertoire html dans le répertoire /var/www/html du conteneur
COPY ./html /var/www/html

# Activer les modules Apache nécessaires (si nécessaire)
RUN a2enmod rewrite