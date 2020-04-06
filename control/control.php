<?php
include("model/model.php");

class Control{
   function invoke(){
        $users = new Users("localhost", "root", "");
        
        if(isset($_REQUEST['value'])){
            $request = $_REQUEST['value'];
        }
        else{
            $request = "";
        }

        switch($request){
                case "register":
                    $users->register($_POST["name"], $_POST["surname"], $_POST["email"], $_POST["birthday"], $_POST["password"], $_POST["repeat_password"]);
                break;
                case "login":
                    //$users->login();
                break;
                default:
                    include('view/first.php');
                break;
        }
   }
}