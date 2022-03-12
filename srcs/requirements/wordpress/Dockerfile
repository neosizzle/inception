#base image
FROM debian:buster

#install php
RUN apt update
RUN apt install -yqq php-cgi php-common php-fpm php-pear php-mbstring php-zip php-net-socket php-gd php-xml-util php-gettext php-mysql php-bcmath unzip mariadb-client wget git

#configure php
#COPY to php
#restart php

#below need to run script
#install wordpress
# RUN cd /var/www/html/ && wget https://wordpress.org/latest.tar.gz
# RUN tar -xvzf latest.tar.gz

#configure wordpress
# RUN cd wordpress && cp wp-config-sample.php wp-config.php
#can configure using copy?

#change ownership
# RUN chown -R www-data:www-data /var/www/html/wordpress

#install vim for dev
RUN apt install -yqq nano

#copy setup script
COPY ./wp-setup.sh /

EXPOSE 9000

#blocking command, configure php and wordpress
CMD ["bash", "wp-setup.sh"]