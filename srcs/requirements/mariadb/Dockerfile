FROM debian:bullseye
RUN apt-get update && \
    apt-get -y install mariadb-server=1:10.5.23-0+deb11u1
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools/db_config.sh .
RUN chmod 777 db_config.sh
ENTRYPOINT [ "./db_config.sh" ]