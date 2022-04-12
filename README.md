# IT Solutions

## Requirements
 - [Nodejs (npm)](https://nodejs.org/en/)
 - [Composer](https://getcomposer.org/download/)

## Documentation
 - [Laravel](https://laravel.com/docs/8.x/readme)

## Installing
### Write permissions:
    
    sudo chmod -R 777 storage
    sudo chmod -R 777 bootstrap/cache
    

### Install dependencies:
  ```
  composer install
  ```
  ```
  npm install
  ```

### Generate configuration file
   In the root of the folder rename the file `.env.example` to `.env` or use 
    
    cp .env.example .env
    

### Generate API Key
    
    php artisan key:generate
    

### Migrations.
  * Create a database using phpmyadmin or the mysql console.
  * Open the .env file from Generate Configuration File.
  * They are placed in the MySQL section (line 11 approx.)
  * There you edit the value of the DB_DATABASE field, placing the name of the database you created. The result is DB_DATABASE=databaseName.
  * Then just run the migrations with
    ```
    php artisan migrate --seed
    ```
    Generates migrations and populates the DB with default data

  * Utilities

    This deletes all the tables from the database
    ```
    php artisan db:wipe
    ```

    This deletes all the tables from the database and recreates all the tables. The --seed option populates the DB with default data
    ```
    php artisan migrate:refresh --seed
    ```

    
 ### Starting a local development server
    
    php artisan server

  If you are using a virtual host routing to an ip 127.0.0.1, you may use this:
    ```
    php artisan server --host 127.0.0.1 --port 80
    ```

  This way, if your virtualhost is called www.itsolutions.com, it will show the web system in the explorer using that name.

    
