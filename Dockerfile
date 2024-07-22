FROM php:8.1-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Set working directory
WORKDIR /var/www/html

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project files
COPY . /var/www/html

# Install project dependencies
RUN composer install

# Generate application key
RUN php artisan key:generate

# Set folder permissions
RUN chown -R www-data:www-data /var/www/html/storage

# Expose port 8000
EXPOSE 8000

# Start the PHP server
CMD php artisan serve --host=0.0.0.0 --port=8000