<?php

$handle = fopen("sample.txt", "r");

if ($handle) {
    while (($line = fgets($handle)) !== false) {
        echo $line . "<br>";
    }
    fclose($handle);
} else {
    die("error opening the file");
}
