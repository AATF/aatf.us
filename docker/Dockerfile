FROM amazonlinux:2023

ARG app_user=nginx
ARG app_uid=1111
ARG app_gid=1111

RUN yum install --assumeyes net-tools \
  && groupadd --system --gid $app_gid $app_user \
  && useradd --system --uid $app_uid --home-dir /var/lib/nginx --gid $app_user $app_user

RUN yum install --assumeyes \
  bind-utils \
  git \
  net-tools \
  nginx \
  php8.1-cli \
  php8.1-fpm \
  php8.1-mbstring \
  procps \
  vim \
  wget

WORKDIR /website

COPY docker/files/install-composer /

RUN mkdir /run/php-fpm/ /var/run/nginx
RUN /install-composer \
  && composer require aws/aws-sdk-php

RUN chown --recursive $app_user:$app_user \
  /var/log/php-fpm \
  /var/log/nginx \
  /var/run/nginx \
  /var/run/php-fpm

COPY docker/files/ /
COPY website/ /website/
COPY docker/VERSION /website/

EXPOSE 8080

USER $app_uid:$app_gid

ENTRYPOINT ["/entrypoint.sh"]
