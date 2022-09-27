# This dockerfile exists because this apache image doesnt have installed mysqli, so I couldn't do it all in the file docker-compose.yml
# If we needed to have 3 Dockerfiles, just use Dockerfile.name and it should work. For example, this would be Dockerfile.apache
FROM php:8.1.1-apache

# Installing custom libraries
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli

# Executing the last line of code from the image we are using for the container
# It just launches the apache service automatically working in background
CMD ["apache2-foreground"]