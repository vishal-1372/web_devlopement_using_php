<!-- Create variables for the day, month, and year of your birthdate. Display your birthdate in
the format "DD/MM/YYYY" using the echo statement. -->

<?php
$day = 29;   
$month = 03;  
$year = 2001; 

$birthdate = sprintf("%02d/%02d/%04d", $day, $month, $year);

echo "My birthdate is: $birthdate";
?>






