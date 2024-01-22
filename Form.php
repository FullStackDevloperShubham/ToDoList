<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Form</title>
</head>

<body>

  <!-- from here php start-->
  <?php

  //insert data into the table for that create a connection
//for connections to database
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
    echo "connection was succesfull<br>";
  }

  if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $fname = $_POST['name'];
  }

  //varibles to insert the data into the
  $sql = "INSERT INTO `information` (`name`) VALUES ('$fname')";

  //sql query run
  mysqli_query($conn, $sql);

  ?>

  <form action="Form.php" method="post">
    name:<input type="text" name="name">
    <button>save</button>
  </form>















  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>