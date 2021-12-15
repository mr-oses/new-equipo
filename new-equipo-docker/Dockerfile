FROM php:7.2-apache-stretch

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV DATE_TIMEZONE America/Argentina/Buenos_Aires

RUN a2enmod rewrite
RUN a2enmod ssl
RUN apt-get update -y && apt-get install -y apt-utils openssl net-tools inetutils-ping zip unzip bzip2 mysql-client nano libxml2-dev libz-dev git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN curl -sL https://deb.nodesource.com/setup_8.x | bash
RUN apt-get install -y nodejs
RUN docker-php-ext-install pdo_mysql soap zip

EXPOSE 80

COPY --chown=www-data:www-data . /var/www/html/

#RUN chown -R $APACHE_RUN_USER:$APACHE_RUN_GROUP /var/www/html/
#COPY config/php.ini /usr/local/etc/php/
#COPY src /var/www/html/

ADD 000-default.conf /etc/apache2/sites-enabled/000-default.conf

WORKDIR /var/www/html/
