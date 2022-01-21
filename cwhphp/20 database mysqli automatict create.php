<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Create a db
$sql = "CREATE DATABASE dbHarry1";
$result = mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}
  
?>
