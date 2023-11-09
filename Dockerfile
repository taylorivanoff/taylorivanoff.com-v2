# Use the official PHP 8.2 FPM base image
FROM php:8.2-fpm

# Install any additional extensions you need
RUN docker-php-ext-install pdo pdo_mysql

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set up a working directory for your application
WORKDIR /var/www/html

# Copy the composer.json and composer.lock files to the container
COPY composer.json composer.lock ./

# Install the project's dependencies
RUN composer install

# Expose port 9000 for PHP-FPM
EXPOSE 9000
