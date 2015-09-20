<?php
$dir = "log";

if(!file_exists($dir)) {
    echo "hi";
    mkdir ($dir, 0777);
}

if(file_exists($dir)) {
    echo "it's here";
}

$filePath = $dir."/formLog.txt";
$txt = $_POST["text"];

echo $txt;
echo "\n";

file_put_contents($filePath, $txt);

echo file_get_contents($filePath);
?>