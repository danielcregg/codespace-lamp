# See here for image contents: https://github.com/microsoft/vscode-dev-containers/tree/v0.191.1/containers/debian/.devcontainer/base.Dockerfile

# [Choice] Debian version: bullseye, buster, stretch
#ARG VARIANT="buster"
FROM mcr.microsoft.com/vscode/devcontainers/base:ubuntu

# Install PHP and server apps.
RUN apt-get update && export DEBIAN_FRONTEND=noninteractive \
    && apt-get -y install --no-install-recommends php php-mysql mysql-server apache2

# Configure Apache.
RUN echo "Listen 8080" >> /etc/apache2/ports.conf && \
    a2enmod rewrite
