<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "live_stock";

    $conn = mysqli_connect($server,$username,$password,$database);

    if(!$conn){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
?>