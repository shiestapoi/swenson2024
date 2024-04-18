FROM php:8.2-cli

# Install dependencies
RUN apt-get update && apt-get install -y \
    libbz2-dev \
    libcurl4-openssl-dev \
    libssl-dev \
    libzip-dev \
    libonig-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libsqlite3-dev \
    libxml2-dev \
    unzip \
    git

# Install PHP extensions
RUN docker-php-ext-install bz2 curl fileinfo gettext mbstring exif mysqli pdo_mysql pdo_sqlite zip

# Install MongoDB extension
RUN pecl install mongodb && docker-php-ext-enable mongodb

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

CMD ["php", "-S", "0.0.0.0:8000"]
