<?php

echo date('d'); //day
echo date ('m'); //month
echo date ('Y'); //year
echo date ('l'); //day of week

echo date('Y/m/d');

echo date('h'); //hour
echo date('i'); //minute
echo date ('s'); //seconds
echo date ('a'); //am or pm

//set the timezone
date_default_timezone_set('America/New_York');
echo date('h:i:sa');

/*A unix timestamp is a long integer containing the number of seconds between the unix epoch and the time specified */
$timestamp = mktime(10,14,54,9,10,1981);
//echo $timestamp;

//echo date('m/d/Y', $timestamp);

$timestamp2 = strtotime('7:00pm March 22 2018');
//echo $timestamp2;
echo date('m/d/Y', $timestamp2);

$timestamp3 = strtotime('tomorrow');
//echo $timestamp2;
echo date('m/d/Y', $timestamp3);
?>