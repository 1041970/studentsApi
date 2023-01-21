<?php
    $hostname = 'localhost';       
    $dbname   = 'qastudents';
    $username = 'root';            
    $password = 'root';
    $connect_var = mysqli_connect($hostname, $username, $password, $dbname, '3306');
    mysqli_set_charset($connect_var,"utf8");
?>