FROM php:apache

RUN apt-get update

RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli

RUN apt-get install -y zlib1g-dev libpng-dev
RUN docker-php-ext-install gd
RUN docker-php-ext-enable gd