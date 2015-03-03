#!/bin/sh

# Start the php5-fpm daemon
service php5-fpm start

# Start the nginx service (in foreground)
service nginx start
