# Use the official PHP 8.3 image as the base
FROM php:8.3-fpm-alpine

# Install required packages
RUN apk add --no-cache \
    composer \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    libzip-dev \
    php83-session \
    php83-fileinfo \
    php83-tokenizer \
    php83-dom \
    php83-xml \
    php83-xmlwriter \
    g++ \
    mariadb-client \
    icu-dev \
    oniguruma-dev \
    libxml2-dev

# Install and enable pdo_mysql extension
RUN docker-php-ext-install pdo pdo_mysql

# Set the working directory
WORKDIR /app

# Copy the composer.json and composer.lock files
COPY composer.json composer.lock ./

# RUN composer install --no-interaction --no-ansi --optimize-autoloader

# Copy the rest of your project files
COPY . .

# Expose the container's port
EXPOSE 5000

# Command to run when the container starts
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=5000"]
