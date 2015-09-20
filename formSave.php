<?php
$dir = "log";

if(!file_exists($dir)) {
    mkdir ($dir, 0744);
    echo file_exists($dir);
}

$filePath = $dir."/formLog.txt";
$txt = $_POST["text"];

echo $txt;
echo "\n";

file_put_contents($filePath, $txt);

echo file_get_contents($filePath);
?>