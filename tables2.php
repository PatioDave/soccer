<?php
echo "hello";

$file_handle = fopen("baba.txt", "r");
while (!feof($file_handle)) {
   $line = fgets($file_handle);
   echo $line;
}
fclose($file_handle);
?> 

