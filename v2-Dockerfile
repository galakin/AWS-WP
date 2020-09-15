FROM mysql AS database

RUN apt-get install -y install gnupg
RUN apt-get install -y wget
RUN cd /tmp && wget https://dev.mysql.com/get/mysql-apt-config_0.8.13-1_all.deb
RUN apt-get install -y lsb-release
RUN dpkg -i mysql-apt-config*
RUN apt-get install -y mysql-server
RUN cd / && /etc/init.d/mysql start

#RUN /ect/init.d/mysql start

#WORKDIR /var/lib/mysql
#RUN service mysql start

FROM romeoz/docker-apache-php AS apache

WORKDIR /var/www/app
# RUN cd /etc/apache2/mods-enabled && \
#     ln -s ../mods-available/rewrite.load

#RUN apt-get update && apt-get install -yq git && rm -rf /var/lib/apt/lists/*
#RUN rm -fr /app

RUN apt-get update
RUN apt-get upgrade
#RUN apt-get -y install mariadb-server
#RUN apt-get -y install mysql
RUN apt-get install -y apache2
RUN /etc/init.d/apache2 restart


EXPOSE 80
EXPOSE 3306

#CMD /etc/init.d/mysql start

