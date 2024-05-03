#!/bin/bash

mkdir -p /etc/nginx/certs

openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/certs/sskey.key -out /etc/nginx/certs/sscert.crt -subj "/C=ES/L=Madrid/CN=${DOMAIN_NAME}"

echo -e 'server {
        listen 443 ssl;
        listen [::]:443 ssl; 
        
        server_name www.vguttenb.42.fr vguttenb.42.fr;

        ssl_certificate /etc/nginx/certs/sscert.crt;
        ssl_certificate_key /etc/nginx/certs/sskey.key;

        ssl_protocols TLSv1.2 TLSv1.3;
        ssl_prefer_server_ciphers on;

	index index.php;
	root /var/www/html;

        location ~ [^/]\.php(/|$) {
                try_files $uri =404;
                fastcgi_pass wordpress:9000;
                include fastcgi_params;
                fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        }
}' > /etc/nginx/sites-available/default

exec nginx -g "daemon off;"