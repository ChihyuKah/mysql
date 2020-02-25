<?php

class connection
{
     private   $dbhost = "localhost";
     private   $dbuser = "chihyu";
     private   $dbpass = "chihyukah";
     private   $db = "students";


    public function openConnection()
    {
        // Try to figure out what these should be for you
        $dsn = 'mysql:host='.$this->dbhost.';dbname='.$this->db;
        $pdo = new PDO($dsn,$this->dbuser,$this->dbpass);


        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        // Why we do this here
        return $pdo;
    }

}

