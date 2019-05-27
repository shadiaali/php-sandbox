<?php
# FUNCTION - block of code that can be repeatedly called. 

/*
Camel Case - myFunction()
Lower Case - my_function()
Pascal Case - MyFunction()
 */

 //Create simple function
 function simpleFunction(){
     echo 'Hello World';
 }

 //call/run simple function
 simpleFunction();

 //function with parameters (arguments)
 function sayHello($name){
     echo "Hello $name<br>"; 
 }

 sayHello('Joe');

 //function with default
 function sayHello2($name1 = 'Worlds'){
    echo "Hello $name1<br>"; 
}

sayHello2();

// Return Value
function addNumbers ($num1, $num2){
    return $num1 + $num2;
}

echo addNumbers(2,3);

//by Reference

$myNum = 10;

function addFive($num){
    $num += 5;
}

function addTen(&$num){
    $num +=10;
}

addFive($myNum);
echo "Value: $myNum";

addTen($myNum);
echo "Value: $myNum";
?>