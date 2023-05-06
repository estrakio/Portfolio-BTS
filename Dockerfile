FROM php:apache


# Install PDO and PGSQL Drivers
#RUN apt-get install -y libpq-dev \
#  && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
#  && docker-php-ext-install pdo pdo_pgsql pgsql \
#  && mkdir /startup \
#  && touch /startup/bootstrap.sh \
#  && chmod -R 777 /startup/bootstrap.sh \
#  && echo '#!/bin/sh \
#php-fpm -F -R' > /startup/bootstrap.sh

RUN apt-get update 
RUN apt-get upgrade -y

ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/

RUN chmod uga+x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions pdo_pgsql && \
    install-php-extensions pgsql

ENV APACHE_DOCUMENT_ROOT=/var/www/html/portfolio
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

COPY config/php.ini /usr/local/etc/php/php.ini

COPY . /porte_folio

