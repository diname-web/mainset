FROM php:8.3-fpm

# Установим необходимые зависимости
RUN apt-get clean && apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    npm \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql \
    && rm -rf /var/lib/apt/lists/*

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Node.js
RUN curl -sL https://deb.nodesource.com/setup_16.x | bash - && apt-get install -y nodejs

# Рабочая директория 
WORKDIR /var/www

# Копируем файлы приложения
COPY . /var/www

# Установим права на директории storage и bootstrap/cache
#RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
#RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Устанавливаем зависимости Composer
RUN #composer install --prefer-dist --no-scripts --no-dev --optimize-autoloader

# Запускаем команду artisan для кэширования конфигураций
RUN #php artisan config:cache

# Открываем порт 9000 для php-fpm
EXPOSE 9000

CMD ["php-fpm"]
