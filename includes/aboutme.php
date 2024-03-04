<?php
// Här demonstrerar jag kunskaper inom filhantering i PHP.
$filename = 'includes/ommig.txt';
$file = fopen($filename, 'r'); // Skapa en filestream
if($file) 
{
    $filecontents = fread($file, filesize($filename)); // Läs streamen
    fclose($file); // Stäng streamen
    echo $filecontents;
}
?>