<?php
class users extends model{
    public $con;

    public function __construct($host, $user, $password) {
        $this->con = new MySQLi($host, $user, $password);;      
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
