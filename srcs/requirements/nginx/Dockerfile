#base image
FROM debian:buster

#install nginx
RUN apt update
RUN apt install -yqq nginx

#install openssl
RUN apt install -yqq openssl

#generate certs and dhgroup
RUN openssl req -batch -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt
RUN openssl dhparam -out /etc/ssl/certs/dhparam.pem 2048

#copy config files
COPY ./conf/self-signed.conf /etc/nginx/snippets/
COPY ./conf/ssl-params.conf /etc/nginx/snippets/
COPY ./conf/default.conf  /etc/nginx/sites-available/default

#install vim for dev
RUN apt install -yqq nano

#expose port 80 and 443
EXPOSE 80
EXPOSE 443

#run nginx in forground to prevent container stopping
CMD ["nginx", "-g", "daemon off;"]
