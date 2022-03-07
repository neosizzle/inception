#base image
FROM debian:buster

#install nginx
RUN apt update
RUN apt install -yqq nginx

#expose port 80
EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]