FROM php:8.2-apache

# Copy semua file ke dalam /var/www/html di container
COPY . /var/www/html/

# Install ekstensi mysqli
RUN docker-php-ext-install mysqli
