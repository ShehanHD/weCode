<?php
include_once("model/model.php");

class control{

   function invoke()
   {
       $users = new users("localhost", "root", "");
       
       if(isset($_REQUEST['value'])){
        $request = $_REQUEST['value'];
       }
       else{
           $request = "";
       }

       switch($request){
            case "register":
                $users->register();
            break;
            default:
                include('view/first.php');
            break;
       }
   }
}