FROM php:8.3-apache

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libzip-dev \
    && docker-php-ext-install pdo_pgsql pgsql zip \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction

RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' \
    /etc/apache2/sites-available/000-default.conf

RUN printf '<Directory /var/www/html/public>\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n' \
    >> /etc/apache2/apache2.conf
RUN printf "file_uploads=On\n\
upload_max_filesize=15M\n\
post_max_size=20M\n\
memory_limit=256M\n\
max_execution_time=120\n\
max_input_time=120\n" \
> /usr/local/etc/php/conf.d/uploads.ini
CMD ["sh", "-c", "php artisan config:clear && php artisan migrate --force && rm -rf public/storage && php artisan storage:link && chown -R www-data:www-data storage bootstrap/cache && exec apache2-foreground"]
