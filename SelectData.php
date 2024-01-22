<?php
//   connectin to the database

$servername = "localhost";
$username = "root";
$password = "";
$database = "contact";

//cennection 
$conn = new mysqli($servername, $username, $password, $database);

//cheking the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "<i>Succesfully connect to the database And name of database is</i>===>". $database ."<br>";
}

// sql query
$sql = "SELECT * FROM `shownumber`";
$result = mysqli_query($conn , $sql);

//findint the record 
$num =  mysqli_num_rows($result);
echo $num."<br>";

// displya the row return by sql query
if($num > 0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    //fetchig the data using looping statements
    while($row = mysqli_fetch_assoc($result) ){
        // echo var_dump($row);
         echo $row['number'];
        echo "<br>";
    }
}



?>