FROM php:8.0-fpm-alpine3.13
#php:7.4.3-apache-buster
RUN docker-php-source extract \
&& apt-get update \
&& apt-get install libldap2-dev libxml2-dev nano -y \
        libapache2-mod-security2 \
        libxslt-dev \
        libicu-dev \
        libpq-dev \
&& apt-get php8.0-cli php8.0-fpm php8.0-pdo php8.0-mysql \
           php8.0-zip php8.0-gd  php8.0-mbstring php8.0-curl \
           php8.0-xml php8.0-bcmath php8.0-json php8.0-common \
           php8.0-intl php8.0-bz2 php8.0-soap php8.0-mysql \
           php8.0-readline php8.0-opcache php8.0-mbstring \
           php8.0-gd php8.0-curl php8.0-pspell php8.0-zip \
           php8.0-xmlrpc php8.0-tidy php8.0-sqlite3 \
           php8.0-imap php8.0-cli php8.0-fpm php8.0-cgi \
           php8.0-cgi-dbgsym libapache2-mod-php8.0

# Install Composer
#RUN curl -sS https://getcomposer.org/installer | php \
#        && mv composer.phar /usr/local/bin/composer
# Install GD
#RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev \
#        && docker-php-ext-configure gd --with-freetype --with-jpeg \
#        && docker-php-ext-install gd

# Install OPCache
#RUN docker-php-ext-configure opcache --enable-opcache \
#    && docker-php-ext-install opcache

# Install zip
#RUN apt-get update && \
#     apt-get install -y \
#         libzip-dev \
#         && docker-php-ext-install zip

# Install Other extenshions
#RUN docker-php-ext-install pdo pdo_mysql xml json opcache session mysqli soap tokenizer xsl intl gettext #pdo_pgsql

#RUN a2enmod rewrite \
#        && a2enmod ssl \
#        && a2enmod security2 \
#        && a2enmod headers

COPY ./ /var/www/html/
