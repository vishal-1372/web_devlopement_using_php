<!-- Develop a PHP script to extract the keys from an associative array using the array_keys()
function. -->

<?php

$student = array(
    "first_name" => "Vishal",
    "last_name" => "Makwana",
    "age" => 21,
    "email" => "mvishal287@gmail.com"
);

$keys = array_keys($student);

echo "Keys from the associative array:<br>";

print_r($keys);

?>
