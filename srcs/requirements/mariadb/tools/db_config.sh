#!/bin/bash

service mariadb start 

sleep 3

echo -e "
    CREATE DATABASE IF NOT EXISTS $MYSQL_DB_NAME;
    ALTER USER root@'localhost' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD';
    CREATE USER IF NOT EXISTS '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD' ;
    GRANT ALL PRIVILEGES ON $MYSQL_DB_NAME.* TO '$MYSQL_USER'@'%';
    FLUSH PRIVILEGES;
" | mysql

# service mariadb stop
kill $(cat /var/run/mysqld/mysqld.pid)

sleep 3

exec mysqld