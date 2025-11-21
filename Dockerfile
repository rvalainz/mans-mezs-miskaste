FROM php:8.2-apache

# Install PDO MySQL extension
RUN docker-php-ext-install pdo pdo_mysql

# Set DocumentRoot to /var/www/html/public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# Enable Apache mod_rewrite (we might use it later)
RUN a2enmod rewrite
