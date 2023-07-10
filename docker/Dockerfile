FROM amazonlinux:2023

WORKDIR /website

RUN yum install --assumeyes \
  git \
  net-tools \
  nginx \
  php8.1-cli \
  php8.1-fpm \
  procps \
  vim \
  wget

RUN mkdir /run/php-fpm/

COPY files/ /

RUN /install-composer && composer require aws/aws-sdk-php

COPY website/ /website/
COPY VERSION /website/

EXPOSE 80

ENTRYPOINT ["/entrypoint.sh"]
