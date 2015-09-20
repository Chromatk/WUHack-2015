<?php
    $writing = $_POST["text"];
    $email = $_POST["email"];
    $dir = "WritingsArchive/";
    $hash = hash("md5", $writing);

    file_put_contents($dir.$hash, $writing);
?>