<?php

namespace Laetitia_Bernardi\site\Model;
use \PDO;


class Manager
{
   
    private $_db;

    public function getDb()
    {
        return $this->_db;
    }

    protected function dbConnect() {
        $host = 'localhost';
        $db = 'info';
        $user = 'root';
        $pass = 'azerty33';
        $charset = 'UTF8';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";        
        $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET time_zone = '+02:00'"

        ];
        return new PDO($dsn, $user, $pass, $opt);
    }

}



