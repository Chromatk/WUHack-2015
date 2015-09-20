<?php
$txt = $_POST["text"];

$file = "formLog.txt";
$file = "form.txt";

echo $txt;
echo "\n";

file_put_contents($file, $txt);

echo file_get_contents($file);
?>