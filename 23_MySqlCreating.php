<?php

echo "<h1>My Sql Creating Table. </h1>";

//Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";

//Create a connection 
$conn = mysqli_connect($servername, $username, $password);

//Create DataBase 
$sql = "CREATE DATABASE viku";
$result = mysqli_query($conn, $sql);
if ($result){
    echo "The db was created successfully";
}else {
   echo "The db was not created successfully" .mysqli_error($conn);
}


?>