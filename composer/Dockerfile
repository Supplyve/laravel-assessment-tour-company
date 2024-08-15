FROM ubuntu:18.04

# Set environment variables to avoid interactive prompts during package installation
ENV DEBIAN_FRONTEND=noninteractive
ENV TZ=Etc/UTC

# Install necessary packages and PHP extensions
RUN apt-get update && apt-get install -y \
    curl \
    php7.2 \
    php7.2-curl \
    git \
    unzip \
    libzip-dev \
    tzdata 
    # && docker-php-ext-install zip
WORKDIR /var/www/html
# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get install -y php7.2-zip php7.2-xml
RUN apt-get install -y php-mysql
# RUN docker-php-ext-install zip curl 
# RUN pickle install zip-1.15.5 && pickle enable zip
# Add platform configuration for compatibility with Magento 2
# RUN composer config platform.php 7.2.5

# Set the working directory


# Optional: If you need to install additional PHP extensions for Magento 2, add them here
# Example: RUN docker-php-ext-install pdo_mysql
