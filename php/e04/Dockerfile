FROM php:7.2-apache
RUN apt-get update && apt-get install figlet
COPY *.php /var/www/html/
ADD library /var/www/html/library
ADD pages /var/www/html/pages
COPY flag.txt /
