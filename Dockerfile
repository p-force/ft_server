# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: bember <bember@student.42.fr>              +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/10/27 19:31:51 by bember            #+#    #+#              #
#    Updated: 2023/08/28 16:44:06 by bember           ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM		debian:buster
RUN 		apt-get -y update && apt-get -y upgrade
RUN 		apt-get -y install  openssl nginx wordpress php7.3 php7.3-fpm \
    							php7.3-mbstring \
    							default-mysql-server

#installing phpMyAdmin and wordpress to nginx root
ADD			https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz phpmyadin.tar.gz
RUN 		tar -xf phpmyadin.tar.gz && mv phpMyAdmin-5.0.2-all-languages phpMyAdmin && mv phpMyAdmin /var/www/html/phpmyadmin
RUN			cp -r /usr/share/wordpress /var/www/html/ && rm /var/www/html/wordpress/wp-config.php

#Settings nginx root owner
RUN			chown -R www-data /var/www/html

#Copy scrs to container
COPY		scrs/createdb.sql scrs/entrypoint.sh scrs/autoindex.sh ./
COPY		scrs/wp-config.php /var/www/html/wordpress/
COPY		scrs/localhost.conf /etc/nginx/sites-available/localhost
RUN 		rm ./etc/nginx/sites-available/default
RUN			ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/localhost && rm /etc/nginx/sites-enabled/default

#Creating SSL certificates
RUN			openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
			-keyout /etc/ssl/private/localhost.key \
    		-out /etc/ssl/private/localhost.crt \
    		-subj "/C=RU/ST=Moscow/O=42/OU=21/CN=localhost"

#Open HTTP and HTTPS ports
EXPOSE		80 443


#Create server entrypoint on script
RUN chmod +x entrypoint.sh
ENTRYPOINT	bash entrypoint.sh

