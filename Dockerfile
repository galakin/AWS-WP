FROM nginx:1.19

RUN apt-get update 
COPY index.html usr/share/nginx/html/index.html


EXPOSE 80

