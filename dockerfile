FROM php:8.0.3-apache-buster
RUN apt update && apt install -y default-mysql-client-core/stable
