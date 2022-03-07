<?php
//check if the add button has been clicked
if (isset($_POST{"btn_add"})){
    //start receiving data from the user
    $Name=$_POST["name"];
    $Phone=$_POST["phone"];
    $Email=$_POST["email"];
    $Message=$_POST["message"];

 //connect to the database to save
    require_once "db_connection.php";

$insertQuery= "INSERT INTO `contact us table`(`Name`, `Phone`, `Email`, `Message`) VALUES ('$Name','$Phone','$Email','$Message')";
    $save=mysqli_query($connection, $insertQuery);
if(isset($save)){
    header("location: contact_php");
}else{
    echo "sending failed";
}
}