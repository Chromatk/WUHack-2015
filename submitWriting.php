<?php
$dir = "WritingsArchive";
if(!is_dir(dir)) {
    mkdir($dir);
}

$writing = $_POST["text"];
$email = $_POST["email"];

//generate unique hash for writing
$hash = hash("md5", $writing.$email.date("r"));

//write essay to file
file_put_contents($dir."/".$hash, $writing);

//save email and hash to SQL//
$servername = "localhost";
$username = "root";
$password = file_get_contents("SQLPwKey.txt");
$password = substr($password, 0, strlen($password)-1);
$dbname = "essaysDB";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Insert Data
$sql = 'INSERT INTO Essays (email, hash)
VALUES ("'
    .$email
    .'","'
    .$hash
    .'")';

echo $sql;
echo "<br>";

$success = mysqli_query($conn, $sql);
if ($success) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//close connection
mysqli_close($conn);

if($success) {
    header("Location: index.html");
    exit();
}
?>