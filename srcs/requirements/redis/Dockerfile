#base image
FROM debian:buster

#install redis
RUN apt update
RUN apt install redis-server -yqq 

#copy config files
# COPY ./conf/redis.conf /etc/nginx/snippets/

#copy setup script
COPY ./conf/setup-redis.sh /

#expose 6379 port default redis
EXPOSE 6379

#install vim for dev
RUN apt install -yqq nano

#run setup script
CMD ["bash", "setup-redis.sh"]
