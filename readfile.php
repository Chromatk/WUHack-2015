<?php
$dir = "WritingsArchive";
$hash = $_POST["hash"];

echo file_get_contents($dir."/".$hash);
?>