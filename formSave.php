<?php

$file = "formLog.txt";
$txt = $_POST["text"];
$content = file_get_contents($file) . $txt;

echo $txt."\n";

file_put_contents($file, $content);

echo file_get_contents($file);
?>