<?php

$file = "formLog.txt";
$txt = $_POST["text"];
$content = file_get_contents($file) . $txt;

echo $txt."\n";

if(!file_put_contents($file, $content)) {
    echo "ERROR";
} else {
    echo "SUCCESS";
}

echo file_get_contents($file);
?>