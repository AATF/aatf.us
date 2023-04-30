#!/bin/bash

set -x

sed -i 's@error_log = .*@error_log = /dev/stdout@g' /etc/php-fpm.conf

php-fpm &

nginx -g "daemon off;"
