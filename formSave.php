<?php
$txt = $_POST["text"];
<<<<<<< HEAD:WUHack2015/formSave.php
$file = "formLog.txt";
=======
$file = "form.txt";
<<<<<<< HEAD
echo $txt;
echo "\n";

file_put_contents($file, $txt);

echo file_get_contents($file);
?>
=======
>>>>>>> origin/master:WUHack2015/writeForm.php

$current = file_get_contents($file);
$current .= $txt;

file_put_contents($file, $current);

echo $file_get_contents($file);
?>
>>>>>>> e49ac8ef708aabe3ed8b703f51dcd9d9e42e7753
