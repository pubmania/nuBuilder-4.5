FROM php:8.0-fpm-alpine3.13
#php:7.4.3-apache-buster
RUN docker-php-source extract \
&& apt-get update \
&& apt-get install libldap2-dev libxml2-dev nano -y \
        libapache2-mod-security2 \
        libxslt-dev \
        libicu-dev \
        libpq-dev \


# Install Composer
#RUN curl -sS https://getcomposer.org/installer | php \
#        && mv composer.phar /usr/local/bin/composer
# Install GD
RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev \
        && docker-php-ext-configure gd --with-freetype --with-jpeg \
        && docker-php-ext-install gd

# Install OPCache
RUN docker-php-ext-configure opcache --enable-opcache \
    && docker-php-ext-install opcache
# Install zip
RUN apt-get update && \
     apt-get install -y \
         libzip-dev \
         && docker-php-ext-install zip

 Install Other extenshions
RUN docker-php-ext-install pdo pdo_mysql xml json opcache session mysqli soap tokenizer xsl intl gettext #pdo_pgsql

#RUN a2enmod rewrite \
#        && a2enmod ssl \
#        && a2enmod security2 \
#        && a2enmod headers

COPY ./ /var/www/html/
