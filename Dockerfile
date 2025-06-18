FROM php:8.2-cli

# Установим необходимые расширения и зависимости
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Установим Composer
COPY --from=composer:2.5 /usr/bin/composer /usr/bin/composer

# Копируем проект
WORKDIR /var/www
COPY . .

# Установим зависимости Laravel
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Открываем порт
EXPOSE 8080

# Запуск Laravel
CMD php artisan serve --host=0.0.0.0 --port=8080