FROM php:7.1-apache

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && apt-get install -y libmcrypt-dev \
        zlib1g-dev \
        libzip-dev \
        unzip
RUN docker-php-ext-install zip