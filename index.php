<!-- database connection -->
<!-- insert query 
INSERT INTO `note` (`srno`, `title`, `description`) VALUES ('1', ' These is my first note', 'These is my first note .\r\nIf these will work properly i Will be very happy.');
 -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "noteproject";
//cennection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "successfully";
}

// getting the variables 
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $title = $_POST["title"];
    $description = $_POST["description"];
}

$sql = "INSERT INTO `note` (`title`, `description`) VALUES ('$title', ' $description')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Your reacord has been INSERTED successfuly";

} else {
    echo "404! for interting the data into the table";
}

?>






<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- following link for table -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <title>I Notes</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">NOTES</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- form started -->
    <div class="container my-4">
        <h2>Add a notes</h2>
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="title">Note title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="description">Example textarea</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Note</button>
        </form>
    </div>



    <!-- form data -->
    <div class="container my-4">
        <!-- adding the table for displaying the data into table formate  -->
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `note`";
                $result = mysqli_query($conn, $sql);
                $sno = 0;

                //fetchig the data using looping statements
                while ($row = mysqli_fetch_assoc($result)) {
                    $sno = $sno + 1;
                    echo " <tr>
                    <th scope='row'>" . $sno . "</th>
                    <td>" . $row['title'] . "</td>
                    <td>" . $row['description'] . "</td>
                    <td>Actions</td>
                </tr>";
                }
                ?>


            </tbody>
        </table>
    </div>






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
        <!-- these is for jquery link and function -->
        <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
        $(document).ready(function () {
            $('#myTable').DataTable();
        })
    </script>
</body>

</html>