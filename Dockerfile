FROM php:7.2-cli
CMD apt install php-mysqli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "./index.php" ]