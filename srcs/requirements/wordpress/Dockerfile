FROM debian:bullseye
RUN apt-get -y update && \
    apt-get -y install php7.4-fpm=7.4.33-1+deb11u5 php7.4-mysql=7.4.33-1+deb11u5 curl=7.74.0-1.3+deb11u11
#     apt-get -y install curl
COPY ./tools/wp_config.sh .
RUN chmod 777 wp_config.sh
COPY ./conf/wp-config.php .
RUN chmod 777 wp-config.php
# RUN ./wp_config.sh
# ENTRYPOINT [ "sleep",  "infinity" ]
ENTRYPOINT [ "/wp_config.sh" ] 