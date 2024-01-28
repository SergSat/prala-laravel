FROM php:8.2-fpm

RUN apt-get update && apt-get install -y  \
    libmagickwand-dev zip unzip \
    --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-install pdo_mysql

# Install composer (php package manager)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy existing application directory contents to the working directory
COPY . /var/www

# Assign permissions of the working directory to the www-data user
RUN chown -R www-data:www-data /var/www \
        /var/www/storage \
        /var/www/bootstrap/cache
