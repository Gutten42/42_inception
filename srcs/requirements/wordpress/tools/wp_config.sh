#!/bin/bash

curl https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar > wp

chmod 777 wp

mv wp /usr/local/bin/
    
mkdir -p /var/www/html

mv wp-config.php /var/www/html/

cd /var/www/html

wp core download --allow-root

# cp wp-config-sample.php wp-config.php 

sed -i -r "s/database_name_here/$MYSQL_DB_NAME/1"   wp-config.php
sed -i -r "s/username_here/$MYSQL_USER/1"  wp-config.php
sed -i -r "s/password_here/$MYSQL_PASSWORD/1"    wp-config.php
sed -i -r "s/localhost/mariadb/1"    wp-config.php

sleep 10

wp core install --url=$DOMAIN_NAME/ --title=$WP_TITLE --admin_user=$WORDPRESS_ADMIN --admin_password=$WORDPRESS_ADMIN_PASSWORD\
 --admin_email=$WORDPRESS_ADMIN_EMAIL --skip-email --allow-root

# sleep infinity

wp user create "${WORDPRESS_USER}" "${WORDPRESS_USER_EMAIL}" --user_pass="${WORDPRESS_USER_PASSWORD}" --role=author --allow-root

sed -i 's/listen = \/run\/php\/php7.4-fpm.sock/listen = 9000/g' /etc/php/7.4/fpm/pool.d/www.conf

mkdir /run/php

exec /usr/sbin/php-fpm7.4 -F