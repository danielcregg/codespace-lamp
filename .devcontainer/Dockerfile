FROM ubuntu:22.04

# Avoid prompts during package installation
ENV DEBIAN_FRONTEND=noninteractive

# Update and install basic packages
RUN apt-get update && apt-get install -y \
    apache2 \
    mysql-server \
    php \
    php-mysql \
    php-curl \
    php-gd \
    php-intl \
    php-mbstring \
    php-soap \
    php-xml \
    php-xmlrpc \
    php-zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Configure Apache
RUN a2enmod rewrite
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Update the default Apache site configuration
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /workspaces/codespaces-lamp/public|g' /etc/apache2/sites-available/000-default.conf

# Ensure the public directory exists
RUN mkdir -p /workspaces/codespaces-lamp/public

# Create the public directory and set permissions
RUN mkdir -p /workspaces/$(basename ${PWD})/public
RUN chown -R www-data:www-data /workspaces/$(basename ${PWD})/public

# Expose ports
EXPOSE 80
EXPOSE 3306

# Start Apache in the foreground
CMD ["apache2ctl", "-D", "FOREGROUND"]