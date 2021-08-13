<?php

echo "<h1>Creating a table in Sql.</h1>";

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

//Creating table in sql databases
$sql = "CREATE TABLE `trip` (`sno` INT(6) NOT NULL AUTO_INCREMENT, `name` VARCHAR(12) NOT NULL,
`dest` VARCHAR(6) NOT NULL, PRIMARY KEY (`sno`)) ";
$result = mysqli_query($conn, $sql);
if ($result){
    echo "The table was created successfully";
}else {
   echo "The table was not created successfully" .mysqli_error($conn);
}
?>