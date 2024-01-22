<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "shubham";

//cennection 
$conn = new mysqli($servername, $username, $password, $database);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "connection was succesfull";

}

//create table into 'shubham' database
$sql = "CREATE TABLE `phptrip` (`srno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `destination` VARCHAR(20) NOT NULL , PRIMARY KEY (`srno`))";


//sql query run
$result = mysqli_query( $conn,$sql);

// Table created or not checking
if ($result) {
    die("The table wad created ..");
}
else{
    echo "The table was not created error 404";

}


    
?>
