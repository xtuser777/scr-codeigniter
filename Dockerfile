FROM debian:bookworm

# Arguments
ARG user=scr
ARG uid=1000

# Install system dependencies
RUN apt update && apt install -y \
    sudo \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    wget \
    zip \
    unzip \
    zlib1g-dev \
    g++ \
    procps \
    libxext6 \
    libxrender1 \
    libxtst6 \
    libxi6 \
    libfreetype6 \
    openssh \
    php-dev \
    php-cli \
    php-common \
    php-pear \
    php-mbstring \
    php-exif \
    php-bcmath \
    php-gd \
    php-sockets \
    php-intl \
    php-json \
    php-mysqli \
    php-curl \
    php-memcache \
    php-xdebug \
    composer

# Clear cache
RUN apt clean && rm -rf /var/lib/apt/lists/*

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root,sudo -u $uid -m -d /home/$user $user
RUN chown -R $user:$user /home/$user && \
    mkdir /home/$user/scr-codeigniter

COPY . /home/$user/scr-codeigniter

# Set working directory
WORKDIR /home/$user/scr-codeigniter

# Copy custom configurations PHP
# COPY .docker/php/custom.ini /usr/local/etc/php/conf.d/custom.ini

RUN chown -R $user:$user /home/$user/scr-codeigniter && chmod 777 -R /home/scr/scr-codeigniter/writable

EXPOSE 8080 22

USER $user

CMD [ "sh -c 'php spark serve --host 0.0.0.0'" ]