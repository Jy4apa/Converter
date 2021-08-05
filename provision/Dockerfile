FROM php:7.3-fpm
WORKDIR /var/www

# Install common
RUN apt-get update && apt-get install -y --force-yes --no-install-recommends \
    vim \
    unzip \
    git \
    curl \
    libpng-dev

RUN docker-php-ext-install gd

# Composer install
ENV COMPOSER_ALLOW_SUPERUSER 1
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# Permissions
ADD . /var/www
RUN chown -R www-data:www-data /var/www

# Entrypoint
COPY /provision/entrypoint.sh /usr/local/bin/
RUN sed -i 's/\r//' /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

ENTRYPOINT ["entrypoint.sh"]

EXPOSE 9000
CMD ["php-fpm"]
