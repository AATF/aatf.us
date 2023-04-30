FROM amazonlinux:2023

RUN yum install --assumeyes php8.1-fpm nginx

RUN mkdir /run/php-fpm/

COPY website/ /website/
COPY files/ /

EXPOSE 80

ENTRYPOINT ["/entrypoint.sh"]
