FROM php:8.2-apache

# Install libcurl dev headers, then the curl PHP extension (used by includes/apis.php)
RUN apt-get update \
    && apt-get install -y --no-install-recommends libcurl4-openssl-dev \
    && docker-php-ext-install curl \
    && rm -rf /var/lib/apt/lists/*

# Enable mod_rewrite (clean URLs in .htaccess) and mod_headers (CORS headers)
RUN a2enmod rewrite headers

# Allow .htaccess overrides under /var/www (Debian default is AllowOverride None)
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

COPY . /var/www/html/

# API response cache must be writable by Apache
RUN chown -R www-data:www-data /var/www/html/includes/cache

EXPOSE 80
