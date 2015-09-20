<?php
$dir = "log";

if(!file_exists($dir)) {
    echo "hello world";
    mkdir ($dir, 0744);
}

$filePath = $dir."/formLog.txt";
$txt = $_POST["text"];

echo $txt;
echo "\n";

file_put_contents($filePath, $txt);

echo file_get_contents($filePath);
?>