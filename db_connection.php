<?php
$host="localhost";
$user="root";
$password="";
$db_name="unisex_shoes_model";

 $connection=mysqli_connect($host, $user, $password, $db_name) ;
//check if the connection failed
if(isset($connection)){
    die("DB connection failed!!!");
}