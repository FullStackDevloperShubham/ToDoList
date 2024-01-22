<?php

$servername = "localhost";
$username = "root";
$password = "";

//cennection 
$conn = new mysqli($servername, $username, $password);


//creatinng db 
$sql = "CREATE DATABASE shubham";
$result = mysqli_query( $conn,$sql);


// Check connection
if ($result->$connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "connection was succesfull";

}




    
?>
