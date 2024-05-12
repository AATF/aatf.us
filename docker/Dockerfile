FROM amazonlinux:2023

ARG app_user=nginx
ARG app_uid=1111
ARG app_gid=1111

WORKDIR /website

RUN yum install --assumeyes net-tools \
  && groupadd --system --gid $app_gid $app_user \
  && useradd --system --uid $app_uid --home-dir /var/lib/nginx --gid $app_user $app_user

RUN yum install --assumeyes \
  git \
  net-tools \
  nginx \
  php8.1-cli \
  php8.1-fpm \
  php8.1-mbstring \
  procps \
  vim \
  wget

COPY files/install-composer /

RUN mkdir /run/php-fpm/ \
  && /install-composer \
  && composer require aws/aws-sdk-php

RUN chown --recursive $app_user:$app_user /var/log/php-fpm /var/log/nginx

COPY files/ /
COPY website/ /website/
COPY VERSION /website/

EXPOSE 80

USER $app_uid:$app_gid

ENTRYPOINT ["/entrypoint.sh"]
