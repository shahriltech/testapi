# API JSON test

Before start
================
- run this command at terminal `cp .env.example .env`
- run `composer update`
- run `php artisan key:generate`
- open your .env file then put your database stuff like database name,user and password.
- run `php artisan migrate` . migrate structure table into your database . make sure create your database first before execute this command.
- run `php artisan db:seed` . transfer dump data into database.

Run your web apps without artisan CLI ( localhost/testapi)? 
- enable mod_rewrite and configure apache for pretty url
- rename server.php to index.php
- put this url into your browser `localhost/testapi`

if want to using artisan CLI ( localhost:8000 ) ?
- run this stuff at terminal . `php artisan serve`
- put this url into your browser `localhost:8000`	