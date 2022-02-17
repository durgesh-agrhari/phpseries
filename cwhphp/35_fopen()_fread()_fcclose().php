<?php

$fptr = fopen("file.html", "r");
// echo var_dump($fptr);
if(!$fptr){
    die("Unable to open this file.Please enter a valid filename");
}
$content = fread($fptr, filesize("file.html"));
fclose($fptr);
echo $content;

?>
 