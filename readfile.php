<?php
    $dir = "WritingsArchive";
    $hash = $_POST["hash"];
    $text = file_get_contents($dir."/".$hash);

    echo json_encode($text);
?>