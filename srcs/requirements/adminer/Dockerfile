#base image
FROM debian:buster

#install adminer and git
RUN apt update
RUN apt-get install git apache2 php php-mysql -yqq

#copy config files
# COPY ./conf/adminer.conf /etc/nginx/snippets/

#copy setup script
COPY ./conf/setup-adminer.sh /

#expose 80 port default adminer
EXPOSE 80

#run setup script
CMD ["bash", "setup-adminer.sh"]
