<?php

//for connections to database
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
    echo "connection was succesfull<br>";
}

//variables for inserting data into the table
//These variables used to insert data into the table 
$name = "jhatu  aditya";
$destination = "Africa";

$sql = "INSERT INTO `phptrip` (`name`, `destination`) VALUES ( '$name', '$destination')";

//sql query run
$result = mysqli_query( $conn,$sql);

// Adding data into the database "shubham" table "phptrip"
if ($result) {
    die("Record has been inserted successfully..");
}
else{
    echo "not record not inserted into the table";

}


?>
