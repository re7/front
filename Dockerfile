# A nginx webserver for the front app, deploying the project
FROM debian:wheezy

MAINTAINER Emeric Kasbarian, emerick42@gmail.com

# Make sure the package repository is up to date
# RUN echo "deb http://archive.ubuntu.com/ubuntu rarity main universe" > /etc/apt/sources.list
RUN apt-get update

# Install php5-fpm
RUN apt-get install -y php5-fpm

# Install nginx
RUN apt-get install -y nginx
RUN rm -v /etc/nginx/sites-enabled/default
ADD docker/nginx.conf /etc/nginx/sites-enabled/
RUN echo "daemon off;" >> /etc/nginx/nginx.conf

# Install the project
RUN mkdir -p /var/www/project
ADD . /var/www/project

# Add the start script
ADD docker/start.sh .
RUN chmod 755 start.sh

EXPOSE 80

ENTRYPOINT ./start.sh
