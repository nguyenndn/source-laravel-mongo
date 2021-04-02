FROM kun391/phpup:3.0

RUN apk --update add --virtual build-dependencies build-base openssl-dev autoconf \
      && pecl install mongodb \
      && docker-php-ext-enable mongodb \
      && apk del build-dependencies build-base openssl-dev autoconf

RUN chown -R root:root /var/www

RUN chmod -R 755 /var/www
