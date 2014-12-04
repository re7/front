# A nginx webserver for the front app, deploying the project
FROM ubuntu:utopic

MAINTAINER Emeric Kasbarian, emerick42@gmail.com

# Make sure the package repository is up to date
RUN apt-get update

# Install project dependencies
RUN apt-get install -y curl
RUN curl -sL https://deb.nodesource.com/setup | sudo bash -
RUN apt-get install -y nodejs
# Update npm to the latest version
RUN curl -L https://npmjs.org/install.sh | sh

# Install php and nginx
RUN apt-get install -y php5-cli php5-fpm php5-curl
RUN apt-get install -y nginx
RUN rm -v /etc/nginx/sites-enabled/default
ADD docker/nginx.conf /etc/nginx/sites-enabled/
RUN echo "daemon off;" >> /etc/nginx/nginx.conf

# Install the project
RUN mkdir -p /var/www/project
ADD . /var/www/project
WORKDIR /var/www/project

# Setup the symfony project
RUN npm install
RUN npm install -g gulp
RUN gulp install
RUN curl -sS https://getcomposer.org/installer | php
RUN php composer.phar install

# Set permissions for cache and logs (should be done in a better way)
RUN chown -R www-data var/cache
RUN chown -R www-data var/logs

# Add the start script
ADD docker/start.sh /
RUN chmod 755 /start.sh

EXPOSE 80

CMD /start.sh
