<?php
     $usersList = [
      0=>['uid'=>1001,"name"=>"John","email"=>"john@gmail.com"],
      1=>['uid'=>1002,"name"=>"Smith","email"=>"smith@gmail.com"]

     ];
     //cors free 
     header('Access-Control-Allow-Origin: *');//allowing all client with any ip address.

     header('Access-Control-Allow-Methods: GET,POST,PUT,DELETE');//http methods
     
     header("Access-Control-Allow-Headers:X-Requested-With");//ajax request
     header("Content-Type: application/json; charset=utf-8");
    echo json_encode($usersList);
     

?>