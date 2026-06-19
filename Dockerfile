FROM php:8.3-apache

RUN a2enmod rewrite

COPY . /var/www/html/

<<<<<<< HEAD
RUN chown -R www-data:www-data /var/www/html

CMD ["apache2-foreground"]
=======
EXPOSE 80
>>>>>>> 46fe619c1e4ab28948a3270f8334186577eb7af3
