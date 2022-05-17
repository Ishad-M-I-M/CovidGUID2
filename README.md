# COVIDGuide

---

## About
CS 2062 - Object Oriented Software Development project
A dummy website to publish _New Normal Guidelines_ during covid-19 pandemic

## How to setup

- clone the repository from github.com
- navigate in to the directory of the repository
- run ```composer install```
- create a `.env` file according to following Template
  ```
  DB_DSN = mysql:host=localhost;port= /*your MYSQL listening port*/;
  DB_NAME = /* database name */
  DB_USER = /*your MYSQL username*/
  DB_PASSWORD = /*your MYSQL password*/
  ```
  **Note:** you need to create a database with name given in ```DB_NAME``` in your database server
- 
- run `php migrations.php` in terminal to setup the database
- navigate to public directory and run `php -S localhost:/*port number*/` or any other way to start the server

## Team Contour - Team members
- Kalindu
- Ishad
- Thushalya
- Pasan
