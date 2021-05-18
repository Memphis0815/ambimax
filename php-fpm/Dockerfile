FROM php:8.0-fpm
RUN docker-php-ext-install -j$(nproc) mysqli
RUN docker-php-ext-install -j$(nproc) pdo
RUN docker-php-ext-install -j$(nproc) pdo_mysql
RUN pecl install xdebug-3.0.4 \
    && docker-php-ext-enable xdebug
