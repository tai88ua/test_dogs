# test_dogs


## install for ubuntu console

- `docker-compose build` - in project root directory 
- `docker-compose up`  
- open new tab in console
- `docker exec docker_php_1 composer install` 
- `docker exec docker_php_1 vendor/bin/phpunit tests`  - run tests
- `docker exec docker_php_1 php cli.php mops sound`  - example command