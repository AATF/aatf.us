#!/bin/bash

set -x

php-fpm &

nginx -g "daemon off;"
