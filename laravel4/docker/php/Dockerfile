FROM php:7.2-fpm

RUN apt-get update
RUN apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libonig-dev \
        libzip-dev \
        libmemcached-dev \
        libmcrypt-dev \
        mc
RUN docker-php-ext-install -j$(nproc) iconv mbstring mysqli pdo_mysql zip
#RUN docker-php-ext-configure gd --with-freetype --with-jpeg
#RUN docker-php-ext-install -j$(nproc) gd
RUN pecl install xdebug-3.1.5
RUN docker-php-ext-enable xdebug
RUN pecl install mcrypt-1.0.3
RUN docker-php-ext-enable mcrypt

COPY ./conf.d /usr/local/etc/php/conf.d/

CMD ["php-fpm"]

EXPOSE 9001
