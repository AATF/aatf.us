FROM amazonlinux:2023

RUN yum install --assumeyes \
  net-tools \
  nginx \
  php8.1-fpm \
  procps

RUN mkdir /run/php-fpm/

COPY website/ /website/
COPY files/ /

EXPOSE 80

ENTRYPOINT ["/entrypoint.sh"]
