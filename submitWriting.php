<?php
$dir = "WritingsArchive";
if(!is_dir(dir)) {
    mkdir($dir);
}

$writing = $_POST["text"];
$email = $_POST["email"];

//generate unique hash for writing
$hash = hash("md5", $writing);

//write essay to file
file_put_contents($dir."/".$hash, $writing);

//save email and hash to SQL//
$servername = "localhost";
$username = "root";
$password = file_get_contents("SQLPwKey.txt");
$password = substr($password, 0, strlen($password)-1);

//create connection
$conn = mysql_connect($servername, $username, $password);
//Check connection
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Create Database
/*$sql = "CREATE DATABASE IF NOT EXISTS essaysDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

//Create table
$sql = "CREATE TABLE IF NOT EXISTS Essays (
email VARCHAR(254),
hash VARCHAR(32)
)";
mysqli_query($conn, $sql);*/

//Insert Data
$sql = "INSERT INTO Essays (email, hash)
VALUES (".$email.",".$hash.")";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


//close connection
mysqli_close($conn);

?>