<?php
echo  date('d'); //date
echo date('m'); //month
echo date('y'); //year

echo date('l'); //date of the week

echo date('y/m/d'); //format year month day or('m/d/y')

echo date('h'); //shows the hour
echo date('m'); //shows minutes
echo date('s'); //shows seconds
echo date('a'); //shows am or pm

//set timezone
date_default_timezone_set('Europe/Amsterdam');

echo date('h:i:sa');

$timestamp = mktime (1, 15, 30, 9, 1, 1986);

echo date('m/d/y h:i:sa', $timestamp);

$timestamp2 = strtotime('7pm March 22 2016');
$timestamp3 = strtotime('tomorrow');
$timestamp4 = strtotime('next Sunday');
$timestamp5 = strtotime('+ 2 Months'); //days/years etc.

echo $timestamp4;
echo date('m/d/y h:i:sa', $timestamp3);

 ?>
