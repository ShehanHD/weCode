<?php


class Users extends Model{
    public function __construct($host, $user, $password) {
        parent::__construct($host, $user, $password);
        
        $sql = "CREATE TABLE IF NOT EXISTS clients(
            id int primary key AUTO_INCREMENT,
            date DATE not null,
            name varchar(50) NOT NULL,
            surname varchar(50) not null,
            email varchar(100) not null,
            birthday DATE not null,
            password varchar(100) not null
            );";
        if (!mysqli_query($this->connection, $sql)) {
            echo "Error creating table client: " . mysqli_error($this->connection);
        }    
    }

    public function register($name, $surname, $email, $birthday, $password, $repeat_password){
        return 0;
    }
}