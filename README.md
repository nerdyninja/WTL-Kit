# WTL-Kit
A starter kit for web development in PHP, part of lab project cpl501

## Structure
Defined file structure of this kit, following MVC Architecture
* **config/**
  * **database.php** : contains your database configuration
  * **messages.php** : contains your exception messages 
  * **system.php**   : to be included in every page where you need controller interaction in any page
* **controller/**
  * **DBClass.php**  : database connection model
  * **__NAME__Controller.php** : here \_\_NAME\_\_ can be anything for controller, default comes with DemoController with constructor and function. every controller with database actions should include the constructor
* **migrations/**
  * **create_table_name_table.sql** : sql schema to be imported into database
* **view/**
  * **header.php** : consists of header section to be included everywhere
  * **footer.php** : consists of footer section to be included everywhere
* **static-files/**
  * **css/** : consists all your stylesheets
  * **js/** : consists all your javascript files, comes with jquery 3.2.1
* **index.php** : default template of each and every file to show usage of views in every page

## Author
Omkar Prabhu - [nerdyninja](https://github.com/nerdyninja)
