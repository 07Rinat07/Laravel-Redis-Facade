### Cache in Laravel. Caching in Laravel. Redis facade in Laravel. Comparing Redis

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
<p align="center">
</p>
<a href="https://git.io/typing-svg"><img src="https://readme-typing-svg.herokuapp.com?font=Fira+Code&size=30&pause=1000&center=true&vCenter=true&multiline=true&width=1080&height=160&lines=I+welcome+everyone!+My+name+is+Rinat.+;I+am+engaged+in+web+development+of+back-end+applications+and;websites+and+a+little+front-end." alt="Typing SVG" /></a>

### Instructions and additional information for installing:
1. sudo apt-get update
2. sudo apt-get install redis
3. sudo service redis-server start
4. redis-cli
5. ping
6. Commands: <https://redis.io/commands/></a>
7. Install plugins in PHPStorm to connect Redis server(plugin Redis Helper)
8. Get the data for setting up a connection to the Redis server in the .env file (REDIS_HOST=127.0.0.1
   REDIS_PASSWORD=null
   REDIS_PORT=6379) and enter the data by checking the test connection.
9. composer require predis/predis
10. In the application, go to the config folder and then to the database.php file. On line 124, change the title from phpredis to predis
### For this tutorial project, additional installation and configuration:
* php artisan make:model Post -mf
* Create a DB (in the .env file and the database, enter the correct data for configuration)
* php artisan migrate
* In the application, go to .env and make changes (on line 14 from CACHE_DRIVER=file to this --> CACHE_DRIVER=redis
#### Attention! To reset the cache in the browser in order to avoid out-of-date information, use the command ---> 
* php artisan optimize:clear
