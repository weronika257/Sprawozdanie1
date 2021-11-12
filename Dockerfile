FROM alpine:latest
LABEL version="rc1"
LABEL author="Weronika Studzinska"
ENV PHPVERSION=7
RUN apk add --update apache2 php${PHPVERSION}-apache2 php${PHPVERSION} && \ 
rm -rf /var/cache/apk/* 
COPY index.php /var/www/html/index.php
#/var/www/localhost/htdocs/index.php
EXPOSE 80/tcp
ENTRYPOINT ["httpd"]
CMD [ "/usr/sbin/apache2ctl","-D", "FOREGROUND"]
