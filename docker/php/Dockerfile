FROM php:7.4-fpm
COPY php.ini /usr/local/etc/php/

RUN apt-get update \
  && apt-get install -y zlib1g-dev libzip-dev mariadb-client \
  && docker-php-ext-install zip pdo_mysql

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin
RUN composer global require "laravel/installer"

RUN curl -SL https://deb.nodesource.com/setup_13.x | bash
RUN apt-get install -y nodejs && \
  npm install -g npm@latest && \
  npm install -g @vue/cli

WORKDIR /var/www