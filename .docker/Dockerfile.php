FROM php:7.4-fpm-alpine
RUN apk add --no-cache freetype libpng libjpeg-turbo freetype-dev libpng-dev libjpeg-turbo-dev zlib-dev libzip-dev tidyhtml-dev curl-dev
RUN docker-php-ext-install pdo pdo_mysql mysqli zip bcmath gd json tidy curl fileinfo exif
COPY ./.docker/php.ini /usr/local/etc/php/
EXPOSE 9000
