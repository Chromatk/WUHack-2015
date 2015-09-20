<?php
$servername = "localhost";
$username = "root";
$password = file_get_contents("SQLPwKey.txt");
$password = substr($password, 0, strlen($password)-1);
$dbname = "essaysDB";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error($conn));
}

//select data
$sql = 'SELECT * FROM Essays';
$text = mysqli_query($conn, $sql);

echo $text;

mysqli_close($conn);
?>