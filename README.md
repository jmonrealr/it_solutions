# IT Solutions

## Requirements
 - [Nodejs (npm)](https://nodejs.org/en/)


## Installing
### Write permissions:
    ~~~
    sudo chmod -R 777 storage
    sudo chmod -R 777 bootstrap/cache
    ~~~

### Install dependencies:
    ~~~
    composer install
    npm install
    ~~~

### Generate configuration file
   In the root of the folder rename the file **.env.example** to **.env** or use 
    ~~~
    cp .env.example .env
    ~~~

### Generate API Key
    ~~~
    php artisan key:generate
    ~~~

### Migrations.
  * Create a database using phpmyadmin or the mysql console.
  * Open the .env file from Generate Configuration File.
  * They are placed in the MySQL section (line 11 approx.)
  * There you edit the value of the DB_DATABASE field, placing the name of the database you created. The result is DB_DATABASE=databaseName.
  * Then just run the migrations with
    ~~~
    php artisan migrate --seed
    ~~~
    Generates migrations and populates the DB with default data
