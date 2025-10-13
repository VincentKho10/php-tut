<?php

class Database{
    private $connection;

    public function __construct($options , $username="root", $password=""){
        $dsn = "mysql:".http_build_query($options, "", ";");
        $this->connection = new PDO($dsn,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query_string, $params=[]){
        $statement = $this->connection->prepare($query_string);
        $statement->execute($params);
        return $statement;
    }
}