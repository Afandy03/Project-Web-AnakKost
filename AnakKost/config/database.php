<?php
define('DB_NAME','mysql:dbname=anak_kost');
define('DB_HOST',';host=localhost');
define('DB_USER','root');
define('DB_PASS','');

class Database extends PDO
{
    function __construct(){
       return parent::__construct(DB_NAME.DB_HOST, DB_USER, DB_PASS);
    }
}
