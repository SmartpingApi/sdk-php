FROM php:8.2-cli

# Install tool to manage PHP extensions as official Docker images
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# Install required dependencies
RUN apt update \
    && apt install -y libicu-dev git zip libzip-dev \
    && chmod +x /usr/local/bin/install-php-extensions \
    && install-php-extensions intl zip @composer

WORKDIR /app
