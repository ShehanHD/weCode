<?php
include_once("model/model.php");

class control{
    function invoke(){

        if(isset($_REQUEST['value'])){
            $request = $_REQUEST['value'];
        }
        else{
            $request = "";
        }

        switch($request){
            default:
                include('view/first.php');
            break;
        }
    }
}