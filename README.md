# CagarMaja

Sistem Informasi Geografis Cagar Budaya Kabupaten Mojokerto berbasis website dengan php framework codeigniter 4, database mysql.

running on php server with php spark:
- import database
- edit environtment variable in .env
- open cmd to project path
- php spark serve
- open in browser http://localhost:8080/

running on docker development server(Apache, Mysql, Adminer):
- copy project to Dockerize/src
- open cmd to dockerize path
- run docker compose: docker-compose up
- import database
- edit environtment variable in .env
- setting database configuration
- open project -> http://localhost:8000/
- open adminer -> http://localhost:8080/

open admin:
- route url to 'path/admin'
- username -> admin, password -> cagarmaja

alternative pull php apache dockerize application on:
https://hub.docker.com/r/isron89/docker-php-apache-mysql-adminer
