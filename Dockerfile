FROM php:7.4-fpm

# Arguments defined in docker-compose.yml
ARG user
ARG uid

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer

# Print the values of uid and user for debugging
RUN echo "uid: $uid, user: $user"

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Copy the application code
COPY . /var/www

# Set working directory
WORKDIR /var/www

# Install Composer dependencies
RUN composer install --optimize-autoloader --no-interaction

# Copy env
RUN cp .env.example .env

USER $user
