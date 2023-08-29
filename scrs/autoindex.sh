#!bin/bash

if grep -q "autoindex on" /etc/nginx/sites-available/localhost
then
	sed -i 's/autoindex on/autoindex off/g' /etc/nginx/sites-available/localhost
	echo "autoindex off"
	nginx -s reload
elif grep -q "autoindex off" /etc/nginx/sites-available/localhost
then
	sed -i 's/autoindex off/autoindex on/g' /etc/nginx/sites-available/localhost
	echo "autoindex on"
	nginx -s reload
fi