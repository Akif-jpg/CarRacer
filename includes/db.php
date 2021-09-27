<?php
    ob_start();

    $db['db_host'] = "localhost";
    $db['db_user'] = "newuser";
    $db['db_pass'] = "02ba2Desengo!artist02";
    $db['db_name'] = "carRacer";
    
    foreach($db as $key => $value){
        define(strtoupper($key),$value);
    }
    
    $conn = mysqli_connect($db['db_host'],$db['db_user'],$db['db_pass'],$db['db_name']) or die("connection was failed!");

   