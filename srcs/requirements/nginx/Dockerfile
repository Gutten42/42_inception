FROM debian:bullseye
RUN apt-get update && \
    apt-get -y install nginx=1.18.0-6.1+deb11u3 && \
    apt-get -y install openssl
EXPOSE 443
COPY server_config.sh .
RUN chmod 777 server_config.sh
# COPY sscert.crt /etc/nginx/certs/
# COPY sskey.key /etc/nginx/certs/
ENTRYPOINT [ "./server_config.sh" ]