<?php
    $dir = "WritingsArchive";
    $hash = "07b7a9ede1f0c08e3b8a82e67b56215d";//$_POST["hash"];
    $text = file_get_contents($dir."/".$hash);

    echo json_encode($text);
?>