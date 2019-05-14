<?php

#Array - variable that holds multiple values.

/*
- Indexed
- Associative
- Multi-dimensional
*/

//Indexed
$people = array('Kevin', 'Jeremy', 'Lisa');
//echo $people[1];
$ids = array(23, 55, 12);
//echo $ids[2];
$cars = ['Honda', 'Toyota', 'Ford'];
//echo $cars[1];
//you can leave it empty and it will auto assign a value
$cars[] = 'Chevy';
//echo $cars[3];

//count function
count($cars);
//echo count($cars);
//count is 4

//prints out the entire array
//print_r($cars);

// more popular shows more info like data types. you can dump any variable and look at its data type and characters
//var_dump($cars);



// Associative Arrays 
/* allows you to define and key and a value. with index the keys are the number but with associative arrays we can assign those keys */

$people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
//echo $people['Brad'];
$ids =[22 => 'Brad', 44 => 'Jose', 63 => 'William'];
//echo $ids[22];

//add to people
$people['Jill'] = 42;
//echo $people[Jill];


//Multi-dimensional arrays
/* array within an array*/

$cars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 23, 12)

);

echo $cars[1][2];




?>