#base image
FROM debian:buster

#install ftp and git
RUN apt update
RUN apt-get install vsftpd -yqq

#copy config files
COPY ./conf/vsftpd.conf /

#copy setup script
COPY ./conf/setup-ftp.sh /

#expose 20 and 21 port default ftp
EXPOSE 20
EXPOSE 21

#run setup script
CMD ["bash", "setup-ftp.sh"]
