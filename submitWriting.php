<?php
    $dir = "WritingsArchive";
    if(!is_dir(dir)) {
        mkdir($dir);
    }

    $writing = $_POST["text"];
    $email = $_POST["email"];
    
    $hash = hash("md5", $writing);

    if(file_put_contents($dir."/".$hash, $writing)) {
        echo "success";
    }
?>