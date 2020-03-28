<?php
class users extends model{
    private $con;

    public function __construct($host, $user, $password) {
        $this->con = new MySQLi($host, $user, $password);
        
        if (!mysqli_select_db($this->con,'users')) {
            $sql = "CREATE DATABASE IF NOT EXISTS users";
            if (!mysqli_query($this->con, $sql)) {
               echo "Error creating database: " . mysqli_error($this->con);
            }
        }   
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }
    public function register(){
        if($this->con or die(mysqli_connect_error())){
            echo "1";
        }
        else{
            echo "0";
        }
    }
}
