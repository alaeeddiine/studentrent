FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git curl unzip libpq-dev libonig-dev libzip-dev zip \
    && docker-php-ext-install pdo pdo_mysql pdo_sqlite mbstring zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copy composer files first for better caching
COPY composer.json composer.lock ./

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Copy rest of the application
COPY . .

# Ensure storage and cache directories are writable
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Create SQLite database file if not exists
RUN touch database/database.sqlite \
    && chown www-data:www-data database/database.sqlite

# Laravel setup
RUN php artisan config:clear && \
    php artisan route:clear && \
    php artisan view:clear

CMD ["php-fpm"]
