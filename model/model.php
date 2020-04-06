<?php
include("users.php");

class Model{
    public $connection;

    public function __construct($host, $user, $password) {   
        $this->connection = new MySQLi("localhost" , "root", "")  or die(mysqli_connect_error());
        
        if (!mysqli_select_db($this->connection,'wecode')) {
            $sql = "CREATE DATABASE IF NOT EXISTS wecode";
            if (!mysqli_query($this->connection, $sql)) {
               echo "Error creating database: " . mysqli_error($this->connection);
            }
        }   
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

    }
}