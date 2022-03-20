#base image
FROM debian:buster

#install mariadb
RUN apt update
RUN apt install -yqq mariadb-server

#install vim for dev
RUN apt install -yqq nano

#expose port 3306 for maraidb
EXPOSE 3306

#copy database setup script
COPY ./conf/db-setup.sh .

#copy my config
COPY ./conf/my.cnf /etc/mysql/my.cnf

#run database setup script
CMD ["bash", "db-setup.sh"]
