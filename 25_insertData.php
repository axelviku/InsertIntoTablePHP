<?php

echo "<h1>Inserting data into a table.</h1>";

$servername = "localhost";
$username = "root";
$password = "";
$database = "viku1";

//connection created
$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}else {
    echo "Connection was successfully created.";
}

//inserting into a table Trip
$sql = "INSERT INTO `trip` (`sno`, `name`, `dest`) VALUES ('2', 'Manish', 'BAnglore');";
$result = mysqli_query($conn, $sql);

if ($result){
    echo "Record has been successfully inserted!";
}else {
   echo "Record was not created successfully" .mysqli_error($conn);
}


?>