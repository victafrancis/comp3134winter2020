<?php

$filename = "index.html";

error_reporting(E_ALL);

$path= file_exists($_GET['q']. $filename) ? $_GET['q'] : '.';

print "<pre>";

print_r(scandir($path));

print "</pre>";

print "<h1>";
print $basename;
print "</h1>"
?>
