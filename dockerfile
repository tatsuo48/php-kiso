FROM php:8.0.3-apache-buster
RUN apt update && apt install -y default-mysql-client-core/stable
RUN docker-php-ext-install pdo_mysql
COPY usr/local/etc/php/php.ini /usr/local/etc/php/php.ini
