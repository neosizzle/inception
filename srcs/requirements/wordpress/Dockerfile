#base image
FROM debian:buster

#install php
RUN apt update
RUN apt install -yqq php-cgi php-common php-fpm php-pear php-mbstring php-zip php-net-socket php-gd php-xml-util php-gettext php-mysql php-bcmath unzip mariadb-client wget git

# RUN chown -R www-data:www-data /var/www/html/wordpress

#install vim for dev
RUN apt install -yqq nano

#copy setup script
COPY ./wp-setup.sh /

#copy php fpm config
COPY ./conf/php-fpm.conf /etc/php/7.3/fpm/php-fpm.conf
COPY ./conf/www.conf /etc/php7/php-fpm.d/www.conf

EXPOSE 9000

#blocking command, configure php and wordpress
CMD ["bash", "wp-setup.sh"]