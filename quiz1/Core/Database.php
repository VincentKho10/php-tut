<?php

namespace Core;

use PDO, PDOStatement;

class Database{
    private $connection;
    private PDOStatement $statement;

    public function __construct($options , $username="root", $password=""){
        $dsn = "mysql:".http_build_query($options, "", ";");
        $this->connection = new PDO($dsn,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query_string, $params=[]){
        $this->statement = $this->connection->prepare($query_string);
        $this->statement->execute($params);
        return $this;
    }

    public function findOrFail(){
        $result = $this->statement->fetch();
        if(! $result){
            abort();
        }
        return $result;
    }

    public function findAllOrFail(){
        $result = $this->statement->fetchAll();
        if(! $result){
            abort();
        }
        return $result;
    }
}