# Intro
This is a skeleton for Object Oriented PHP(MVC) 

## How to install
clone this repository then read the `README.md` file. Then create something awasome.

## Notes

### 1. use `\` for escape namespace [autoload]

    PDO                \PDO
    PDO::FETCH_ASSOC   \PDO::FETCH_ASSOC
    DateTime           \DateTime
    DateTimeZone       \DateTimeZone

# File structure

    config/
     ---config.php          // configuration of database connection and other
    controllers/            //recieve req from user
     ---ProductController   // perform operation & get data from model
    models/                 // get,set data into database
     ---DB.php              //databse connection file
     ---Products            // perform database operation
    public/                 // where view stored
     ---index.php           //default view

# Rules

whenever you use a `controller` include these two files:  

    require_once __DIR__.'/../config/config.php';
    require_once __DIR__.'/../autoload.php';

# Referrence links  
[PHP trying to use autoload function to find PDO class](https://stackoverflow.com/questions/17909966/php-trying-to-use-autoload-function-to-find-pdo-class/17910005)


