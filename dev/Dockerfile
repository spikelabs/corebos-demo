FROM alpine:3.7

RUN apk update && apk upgrade && apk add curl bash
RUN adduser -D -g 'www' www

RUN mkdir /www
RUN chown -R www:www /www

RUN mkdir -p /run/php

RUN apk add php7-fpm php7-mcrypt php7-soap php7-openssl php7-gmp php7-pdo_odbc php7-json \
    php7-dom php7-pdo php7-zip php7-mysqli php7-sqlite3 php7-apcu php7-pdo_pgsql php7-bcmath \
    php7-gd php7-odbc php7-pdo_mysql php7-pdo_sqlite php7-gettext php7-xmlreader php7-xmlrpc \
    php7-bz2 php7-iconv php7-pdo_dblib php7-curl php7-ctype php7-cli php7-session \
    php7-phar php7-dom php7-tokenizer php7-mbstring php7-xmlwriter php7-xml php7-simplexml php7-fileinfo

COPY php7/php.ini /etc/php7/
COPY php7/php-fpm.conf /etc/php7/
COPY php7/php-fpm.d/www.conf /etc/php7/php-fpm.d/

RUN apk add tzdata
RUN ls /usr/share/zoneinfo
RUN cp /usr/share/zoneinfo/Europe/Madrid /etc/localtime
RUN echo "Europe/Madrid" > /etc/timezone

COPY --chown=www:www corebos/. /www
COPY --chown=www:www dev/config.inc.php /
RUN mv config.inc.php /www/

RUN apk update
RUN apk upgrade
RUN apk add --update curl openssl

RUN curl -OL https://squizlabs.github.io/PHP_CodeSniffer/phpcs.phar

RUN mv phpcs.phar /usr/local/bin/

RUN chmod +x /usr/local/bin/phpcs.phar

RUN apk add --update nodejs nodejs-npm

RUN npm install -g eslint

WORKDIR /www

CMD ["build/coreBOSTests/phpunit", "-c", "build/coreBOSTests/phpunit.xml"]