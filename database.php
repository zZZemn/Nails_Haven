<?php
$servername = "localhost";
$database = "nh";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
    {
        die('Could not Connect My Sql:'.mysqli_error($conn));
    }
?>